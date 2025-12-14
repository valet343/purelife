# Git Workflow Script для локальної роботи з підтвердженням push на сервер
# Використання: .\git-workflow.ps1

param(
    [string]$Message = "",
    [switch]$Status,
    [switch]$Commit,
    [switch]$Push,
    [switch]$Pull,
    [switch]$Help
)

function Show-Help {
    Write-Host "=== Git Workflow Helper ===" -ForegroundColor Green
    Write-Host ""
    Write-Host "Використання:" -ForegroundColor Yellow
    Write-Host "  .\git-workflow.ps1 -Status          # Перевірити статус змін"
    Write-Host "  .\git-workflow.ps1 -Commit -Message 'Опис змін'  # Зробити commit"
    Write-Host "  .\git-workflow.ps1 -Push            # Завантажити на сервер (після підтвердження)"
    Write-Host "  .\git-workflow.ps1 -Pull            # Отримати зміни з сервера"
    Write-Host ""
    Write-Host "Комбіноване використання:" -ForegroundColor Yellow
    Write-Host "  .\git-workflow.ps1 -Commit -Message 'Опис' -Push  # Commit + Push"
    Write-Host ""
}

function Show-Status {
    Write-Host "=== Статус репозиторію ===" -ForegroundColor Green
    Write-Host ""
    git status --short
    Write-Host ""
    Write-Host "=== Останні коміти ===" -ForegroundColor Green
    git log --oneline -5
    Write-Host ""
}

function Invoke-Commit {
    if ([string]::IsNullOrWhiteSpace($Message)) {
        Write-Host "Помилка: Потрібно вказати повідомлення для commit!" -ForegroundColor Red
        Write-Host "Використання: .\git-workflow.ps1 -Commit -Message 'Ваш опис змін'" -ForegroundColor Yellow
        return
    }
    
    Write-Host "=== Додавання змін ===" -ForegroundColor Green
    git add .
    
    Write-Host "=== Створення commit ===" -ForegroundColor Green
    git commit -m $Message
    
    if ($LASTEXITCODE -eq 0) {
        Write-Host "✓ Commit успішно створено!" -ForegroundColor Green
    } else {
        Write-Host "✗ Помилка при створенні commit" -ForegroundColor Red
    }
}

function Invoke-Push {
    Write-Host "=== Підготовка до завантаження на сервер ===" -ForegroundColor Yellow
    Write-Host ""
    
    # Показати що буде завантажено
    Write-Host "Зміни, які будуть завантажені:" -ForegroundColor Cyan
    git log origin/main..HEAD --oneline 2>$null
    if ($LASTEXITCODE -ne 0) {
        Write-Host "(Перший push або гілка main ще не існує на сервері)" -ForegroundColor Gray
    }
    Write-Host ""
    
    # Підтвердження
    $confirmation = Read-Host "Завантажити зміни на сервер? (y/n)"
    if ($confirmation -ne 'y' -and $confirmation -ne 'Y') {
        Write-Host "Операцію скасовано" -ForegroundColor Yellow
        return
    }
    
    Write-Host ""
    Write-Host "=== Завантаження на сервер ===" -ForegroundColor Green
    git push -u origin main
    
    if ($LASTEXITCODE -eq 0) {
        Write-Host "✓ Зміни успішно завантажено на сервер!" -ForegroundColor Green
    } else {
        Write-Host "✗ Помилка при завантаженні на сервер" -ForegroundColor Red
        Write-Host "Можливо потрібно спочатку виконати: .\git-workflow.ps1 -Pull" -ForegroundColor Yellow
    }
}

function Invoke-Pull {
    Write-Host "=== Отримання змін з сервера ===" -ForegroundColor Green
    git pull origin main
    
    if ($LASTEXITCODE -eq 0) {
        Write-Host "✓ Зміни успішно отримано!" -ForegroundColor Green
    } else {
        Write-Host "✗ Помилка при отриманні змін" -ForegroundColor Red
    }
}

# Main execution
if ($Help) {
    Show-Help
    exit
}

if ($Status -or (-not $Commit -and -not $Push -and -not $Pull)) {
    Show-Status
}

if ($Commit) {
    Invoke-Commit
}

if ($Push) {
    Invoke-Push
}

if ($Pull) {
    Invoke-Pull
}
