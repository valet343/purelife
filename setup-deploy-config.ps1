# Скрипт для налаштування конфігурації деплою
# Використання: .\setup-deploy-config.ps1

Write-Host "=== Налаштування конфігурації деплою ===" -ForegroundColor Cyan
Write-Host ""

$configPath = Join-Path $PSScriptRoot "deploy-config.json"

# Перевірка чи вже існує конфігурація
if (Test-Path $configPath) {
    Write-Host "Знайдено існуючу конфігурацію." -ForegroundColor Yellow
    $response = Read-Host "Перезаписати? (y/n)"
    if ($response -ne "y" -and $response -ne "Y") {
        Write-Host "Операцію скасовано." -ForegroundColor Yellow
        exit 0
    }
    
    $existingConfig = Get-Content $configPath | ConvertFrom-Json
    Write-Host "Поточні значення показані в дужках []. Натисніть Enter для збереження поточного значення." -ForegroundColor Gray
    Write-Host ""
}

# Збір інформації
Write-Host "Введіть дані для SSH підключення:" -ForegroundColor Cyan
Write-Host ""

$host = Read-Host "SSH хост (IP або домен) [$($existingConfig.host)]"
if ([string]::IsNullOrWhiteSpace($host)) {
    $host = $existingConfig.host
}

$user = Read-Host "SSH користувач [$($existingConfig.user)]"
if ([string]::IsNullOrWhiteSpace($user)) {
    $user = $existingConfig.user
}

$path = Read-Host "Шлях до проекту на сервері (наприклад: /var/www/html) [$($existingConfig.path)]"
if ([string]::IsNullOrWhiteSpace($path)) {
    $path = $existingConfig.path
}

Write-Host ""
Write-Host "Виберіть метод автентифікації:" -ForegroundColor Cyan
Write-Host "1. SSH ключ (рекомендовано)"
Write-Host "2. Пароль"
Write-Host "3. Стандартні SSH ключі з ~/.ssh (Linux/Mac) або %USERPROFILE%\.ssh (Windows)"
$authMethod = Read-Host "Вибір [1-3]"

$config = @{
    host = $host
    user = $user
    path = $path
}

switch ($authMethod) {
    "1" {
        $keyPath = Read-Host "Шлях до приватного SSH ключа (наприклад: C:\Users\YourName\.ssh\id_rsa)"
        if (-not [string]::IsNullOrWhiteSpace($keyPath)) {
            $config.keyPath = $keyPath
        }
    }
    "2" {
        Write-Host "⚠ Увага: Пароль буде збережено у відкритому вигляді!" -ForegroundColor Yellow
        Write-Host "Рекомендується використовувати SSH ключі для безпеки." -ForegroundColor Yellow
        $password = Read-Host "SSH пароль" -AsSecureString
        $BSTR = [System.Runtime.InteropServices.Marshal]::SecureStringToBSTR($password)
        $plainPassword = [System.Runtime.InteropServices.Marshal]::PtrToStringAuto($BSTR)
        $config.password = $plainPassword
    }
    "3" {
        # Використання стандартних SSH ключів
        Write-Host "Буде використано стандартні SSH ключі" -ForegroundColor Green
    }
    default {
        Write-Host "Некоректний вибір. Використовується метод 3 (стандартні ключі)" -ForegroundColor Yellow
    }
}

# Збереження конфігурації
$config | ConvertTo-Json -Depth 10 | Set-Content $configPath -Encoding UTF8

Write-Host ""
Write-Host "✓ Конфігурацію збережено: $configPath" -ForegroundColor Green
Write-Host ""
Write-Host "Важливо:" -ForegroundColor Yellow
Write-Host "- Файл deploy-config.json містить конфіденційні дані" -ForegroundColor Yellow
Write-Host "- Додайте його до .gitignore (якщо ще не додано)" -ForegroundColor Yellow
Write-Host "- Не комітьте цей файл у Git!" -ForegroundColor Yellow
Write-Host ""

# Перевірка .gitignore
$gitignorePath = Join-Path $PSScriptRoot ".gitignore"
if (Test-Path $gitignorePath) {
    $gitignoreContent = Get-Content $gitignorePath -Raw
    if ($gitignoreContent -notmatch "deploy-config\.json") {
        Write-Host "Додавання deploy-config.json до .gitignore..." -ForegroundColor Cyan
        Add-Content $gitignorePath "`ndeploy-config.json"
        Write-Host "✓ Додано до .gitignore" -ForegroundColor Green
    }
}

Write-Host ""
Write-Host "Тепер ви можете використовувати:" -ForegroundColor Cyan
Write-Host "  .\deploy-auto.ps1 `"Опис змін`"" -ForegroundColor White
