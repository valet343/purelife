# Скрипт для завантаження змін на сервер
# Використання: .\deploy.ps1 "Опис змін"

param(
    [Parameter(Mandatory=$false)]
    [string]$Message = "Оновлення проекту"
)

Write-Host "=== Перевірка статусу Git ===" -ForegroundColor Cyan
git status

Write-Host "`n=== Перевірка незакомічених змін ===" -ForegroundColor Cyan
$uncommitted = git diff --name-only
$unstaged = git diff --cached --name-only

if ($uncommitted -or $unstaged) {
    Write-Host "Увага! Є незакомічені зміни:" -ForegroundColor Yellow
    if ($unstaged) {
        Write-Host "  В staging area:" -ForegroundColor Yellow
        $unstaged | ForEach-Object { Write-Host "    $_" }
    }
    if ($uncommitted) {
        Write-Host "  Не в staging area:" -ForegroundColor Yellow
        $uncommitted | ForEach-Object { Write-Host "    $_" }
    }
    
    $response = Read-Host "`nПродовжити завантаження? (y/n)"
    if ($response -ne "y" -and $response -ne "Y") {
        Write-Host "Операцію скасовано." -ForegroundColor Red
        exit
    }
}

Write-Host "`n=== Отримання останніх змін з сервера ===" -ForegroundColor Cyan
git fetch origin

$currentBranch = git rev-parse --abbrev-ref HEAD
$remoteBranch = "origin/$currentBranch"

# Перевірка чи є віддалена гілка
$remoteExists = git ls-remote --heads origin $currentBranch

if ($remoteExists) {
    Write-Host "`n=== Перевірка відмінностей з сервером ===" -ForegroundColor Cyan
    $ahead = git rev-list --count "$remoteBranch..HEAD" 2>$null
    $behind = git rev-list --count "HEAD..$remoteBranch" 2>$null
    
    if ($behind -gt 0) {
        Write-Host "Увага! На сервері є новіші зміни ($behind комітів)." -ForegroundColor Yellow
        $response = Read-Host "Ви хочете спочатку отримати зміни з сервера? (y/n)"
        if ($response -eq "y" -or $response -eq "Y") {
            Write-Host "Отримання змін з сервера..." -ForegroundColor Cyan
            git pull origin $currentBranch
            if ($LASTEXITCODE -ne 0) {
                Write-Host "Помилка при отриманні змін!" -ForegroundColor Red
                exit 1
            }
        }
    }
    
    if ($ahead -gt 0) {
        Write-Host "Локально є $ahead нових комітів для завантаження." -ForegroundColor Green
    } else {
        Write-Host "Немає нових комітів для завантаження." -ForegroundColor Yellow
    }
}

Write-Host "`n=== Завантаження змін на сервер ===" -ForegroundColor Cyan
Write-Host "Гілка: $currentBranch" -ForegroundColor Gray
Write-Host "Повідомлення: $Message" -ForegroundColor Gray

$response = Read-Host "`nПідтвердити завантаження на сервер? (y/n)"
if ($response -eq "y" -or $response -eq "Y") {
    git push origin $currentBranch
    if ($LASTEXITCODE -eq 0) {
        Write-Host "`n✓ Зміни успішно завантажено на сервер!" -ForegroundColor Green
    } else {
        Write-Host "`n✗ Помилка при завантаженні змін!" -ForegroundColor Red
        exit 1
    }
} else {
    Write-Host "Операцію скасовано." -ForegroundColor Yellow
}
