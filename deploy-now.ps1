# Швидкий деплой на сервер з наявними даними
# Використання: .\deploy-now.ps1

param(
    [Parameter(Mandatory=$false)]
    [string]$ServerPath = "/home/purelifebiz/public_html"
)

Write-Host "=== Швидкий деплой на сервер ===" -ForegroundColor Cyan
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

# 1. Перевірка Git статусу
Write-Host "=== Перевірка Git ===" -ForegroundColor Cyan
$hasUncommitted = git status --porcelain
$currentBranch = git rev-parse --abbrev-ref HEAD

if ($hasUncommitted) {
    Write-Host "Знайдено незакомічені зміни. Додаю до коміту..." -ForegroundColor Yellow
    git add .
    
    $commitMessage = Read-Host "Введіть повідомлення коміту (Enter для 'Оновлення проекту')"
    if ([string]::IsNullOrWhiteSpace($commitMessage)) {
        $commitMessage = "Оновлення проекту"
    }
    
    git commit -m $commitMessage
    if ($LASTEXITCODE -ne 0) {
        Write-Host "Помилка при створенні коміту!" -ForegroundColor Red
        exit 1
    }
    Write-Host "✓ Коміт створено" -ForegroundColor Green
} else {
    Write-Host "✓ Немає незакомічених змін" -ForegroundColor Green
}

# 2. Відправка на GitHub
Write-Host "`n=== Відправка на GitHub ===" -ForegroundColor Cyan
git push origin $currentBranch
if ($LASTEXITCODE -ne 0) {
    Write-Host "Помилка при відправці на GitHub!" -ForegroundColor Red
    Write-Host "Можливо, це перший push. Спробуйте:" -ForegroundColor Yellow
    Write-Host "  git push -u origin $currentBranch" -ForegroundColor White
    exit 1
}
Write-Host "✓ Відправлено на GitHub" -ForegroundColor Green

# 3. Деплой на сервер через SSH
Write-Host "`n=== Деплой на сервер ===" -ForegroundColor Cyan

# Перевірка чи є plink (PuTTY)
$plinkPath = Get-Command plink -ErrorAction SilentlyContinue

if ($plinkPath) {
    Write-Host "Використовую plink для SSH підключення..." -ForegroundColor Gray
    
    # Команда для виконання на сервері
    $sshCommand = "cd $($config.path) && git pull origin $currentBranch"
    
    # Використання plink з паролем
    $plinkArgs = @(
        "-ssh",
        "-pw", $config.password,
        "$($config.user)@$($config.host)",
        $sshCommand
    )
    
    Write-Host "Підключення до сервера..." -ForegroundColor Gray
    & plink $plinkArgs
    
    if ($LASTEXITCODE -eq 0) {
        Write-Host "`n✓ Деплой на сервер виконано успішно!" -ForegroundColor Green
    } else {
        Write-Host "`n⚠ Можлива помилка при деплої на сервер" -ForegroundColor Yellow
        Write-Host "Перевірте вручну:" -ForegroundColor Yellow
        Write-Host "  ssh $($config.user)@$($config.host)" -ForegroundColor White
        Write-Host "  cd $($config.path)" -ForegroundColor White
        Write-Host "  git pull origin $currentBranch" -ForegroundColor White
    }
} else {
    Write-Host "⚠ plink не знайдено. Встановіть PuTTY або виконайте вручну:" -ForegroundColor Yellow
    Write-Host ""
    Write-Host "Підключіться до сервера:" -ForegroundColor Cyan
    Write-Host "  ssh $($config.user)@$($config.host)" -ForegroundColor White
    Write-Host ""
    Write-Host "Пароль: $($config.password)" -ForegroundColor Gray
    Write-Host ""
    Write-Host "Потім виконайте:" -ForegroundColor Cyan
    Write-Host "  cd $($config.path)" -ForegroundColor White
    Write-Host "  git pull origin $currentBranch" -ForegroundColor White
    Write-Host ""
    
    # Спробуємо використати стандартний ssh (може не працювати з паролем)
    Write-Host "Спробую використати стандартний ssh..." -ForegroundColor Yellow
    Write-Host "(Може запитати пароль вручну)" -ForegroundColor Gray
    
    $sshCommand = "cd $($config.path) && git pull origin $currentBranch"
    $fullSshCommand = "ssh $($config.user)@$($config.host) `"$sshCommand`""
    
    Write-Host "Виконайте вручну:" -ForegroundColor Yellow
    Write-Host $fullSshCommand -ForegroundColor White
}

Write-Host "`n=== Готово ===" -ForegroundColor Green
