# Скрипт для оновлення файлів на сервері
# Використання: .\update-server.ps1

param(
    [Parameter(Mandatory=$false)]
    [string]$ServerPath = "/home/purelifebiz/public_html"
)

Write-Host "=== Оновлення файлів на сервері ===" -ForegroundColor Cyan
Write-Host ""

# Читання конфігурації
$configPath = Join-Path $PSScriptRoot "deploy-config.json"
if (-not (Test-Path $configPath)) {
    Write-Host "Помилка: deploy-config.json не знайдено!" -ForegroundColor Red
    exit 1
}

$config = Get-Content $configPath | ConvertFrom-Json

# Оновлення шляху, якщо вказано
if ($ServerPath) {
    $config.path = $ServerPath
}

Write-Host "Сервер: $($config.host)" -ForegroundColor Gray
Write-Host "Користувач: $($config.user)" -ForegroundColor Gray
Write-Host "Шлях: $($config.path)" -ForegroundColor Gray
Write-Host ""

# Перевірка чи є plink
$plinkPath = Get-Command plink -ErrorAction SilentlyContinue

if ($plinkPath) {
    Write-Host "Використовую plink для SSH підключення..." -ForegroundColor Green
    Write-Host ""
    
    # Команда для перевірки чи існує репозиторій
    $checkRepoCommand = "if [ -d `"$($config.path)/.git`" ]; then echo 'EXISTS'; else echo 'NOT_EXISTS'; fi"
    
    Write-Host "Перевірка наявності Git репозиторію на сервері..." -ForegroundColor Cyan
    $checkResult = & plink -ssh -pw $config.password "$($config.user)@$($config.host)" $checkRepoCommand 2>&1
    
    if ($checkResult -match "NOT_EXISTS") {
        Write-Host "Git репозиторій не знайдено. Клоную репозиторій..." -ForegroundColor Yellow
        
        # Створення папки, якщо не існує
        $mkdirCommand = "mkdir -p `"$($config.path)`""
        & plink -ssh -pw $config.password "$($config.user)@$($config.host)" $mkdirCommand 2>&1 | Out-Null
        
        # Клонування репозиторію
        $cloneCommand = "cd `"$($config.path)`" && git clone https://github.com/valet343/purelife.git ."
        Write-Host "Виконую клонування..." -ForegroundColor Cyan
        & plink -ssh -pw $config.password "$($config.user)@$($config.host)" $cloneCommand 2>&1
        
        if ($LASTEXITCODE -eq 0) {
            Write-Host "`n✓ Репозиторій успішно клоновано!" -ForegroundColor Green
        } else {
            Write-Host "`n⚠ Можливі проблеми при клонуванні" -ForegroundColor Yellow
            Write-Host "Виконайте вручну:" -ForegroundColor Yellow
            Write-Host "  ssh $($config.user)@$($config.host)" -ForegroundColor White
            Write-Host "  cd $($config.path)" -ForegroundColor White
            Write-Host "  git clone https://github.com/valet343/purelife.git ." -ForegroundColor White
        }
    } else {
        Write-Host "✓ Git репозиторій знайдено. Оновлюю файли..." -ForegroundColor Green
        Write-Host ""
        
        # Оновлення через git pull
        $pullCommand = "cd `"$($config.path)`" && git pull origin main"
        Write-Host "Виконую git pull..." -ForegroundColor Cyan
        & plink -ssh -pw $config.password "$($config.user)@$($config.host)" $pullCommand 2>&1
        
        if ($LASTEXITCODE -eq 0) {
            Write-Host "`n✓ Файли на сервері успішно оновлено!" -ForegroundColor Green
        } else {
            Write-Host "`n⚠ Можливі проблеми при оновленні" -ForegroundColor Yellow
            Write-Host "Виконайте вручну:" -ForegroundColor Yellow
            Write-Host "  ssh $($config.user)@$($config.host)" -ForegroundColor White
            Write-Host "  cd $($config.path)" -ForegroundColor White
            Write-Host "  git pull origin main" -ForegroundColor White
        }
    }
} else {
    Write-Host "⚠ plink не знайдено. Встановіть PuTTY або виконайте вручну:" -ForegroundColor Yellow
    Write-Host ""
    Write-Host "1. Підключіться до сервера:" -ForegroundColor Cyan
    Write-Host "   ssh $($config.user)@$($config.host)" -ForegroundColor White
    Write-Host "   Пароль: $($config.password)" -ForegroundColor Gray
    Write-Host ""
    Write-Host "2. Перейдіть в папку проекту:" -ForegroundColor Cyan
    Write-Host "   cd $($config.path)" -ForegroundColor White
    Write-Host ""
    Write-Host "3. Якщо репозиторій вже є, оновіть:" -ForegroundColor Cyan
    Write-Host "   git pull origin main" -ForegroundColor White
    Write-Host ""
    Write-Host "4. Якщо репозиторію немає, клонуйте:" -ForegroundColor Cyan
    Write-Host "   git clone https://github.com/valet343/purelife.git ." -ForegroundColor White
    Write-Host ""
    Write-Host "Або встановіть PuTTY для автоматичного деплою:" -ForegroundColor Yellow
    Write-Host "   https://www.putty.org/" -ForegroundColor White
}

Write-Host "`n=== Готово ===" -ForegroundColor Green
