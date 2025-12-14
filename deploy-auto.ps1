# Автоматичний скрипт деплою на сервер через Git + SSH
# Використання: .\deploy-auto.ps1 "Опис змін"

param(
    [Parameter(Mandatory=$false)]
    [string]$Message = "Оновлення проекту",
    [Parameter(Mandatory=$false)]
    [switch]$SkipCommit = $false
)

# Кольори для виводу
function Write-ColorOutput($ForegroundColor) {
    $fc = $host.UI.RawUI.ForegroundColor
    $host.UI.RawUI.ForegroundColor = $ForegroundColor
    if ($args) {
        Write-Output $args
    }
    $host.UI.RawUI.ForegroundColor = $fc
}

Write-ColorOutput Cyan "=== Автоматичний деплой на сервер ==="
Write-Host ""

# Перевірка чи є конфігурація SSH
$sshConfigPath = Join-Path $PSScriptRoot "deploy-config.json"
$hasSSHConfig = Test-Path $sshConfigPath

if ($hasSSHConfig) {
    Write-ColorOutput Green "✓ Знайдено конфігурацію SSH"
    $sshConfig = Get-Content $sshConfigPath | ConvertFrom-Json
    $useSSH = $true
} else {
    Write-ColorOutput Yellow "⚠ Конфігурація SSH не знайдена. Буде використано тільки Git push."
    $useSSH = $false
}

# 1. Перевірка статусу Git
Write-ColorOutput Cyan "`n=== Перевірка статусу Git ==="
$status = git status --porcelain
$hasChanges = $status -ne $null -and $status.Count -gt 0

if ($hasChanges -and -not $SkipCommit) {
    Write-ColorOutput Yellow "Знайдено незакомічені зміни:"
    git status --short | Select-Object -First 20
    if ((git status --short).Count -gt 20) {
        Write-ColorOutput Gray "... (показано перші 20 файлів)"
    }
    
    Write-Host ""
    $response = Read-Host "Додати всі зміни до коміту? (y/n)"
    if ($response -eq "y" -or $response -eq "Y") {
        Write-ColorOutput Cyan "Додавання змін до staging area..."
        git add .
        Write-ColorOutput Green "✓ Зміни додані"
        
        Write-Host ""
        $customMessage = Read-Host "Введіть повідомлення коміту (Enter для використання: '$Message')"
        if ([string]::IsNullOrWhiteSpace($customMessage)) {
            $customMessage = $Message
        }
        
        Write-ColorOutput Cyan "Створення коміту..."
        git commit -m $customMessage
        if ($LASTEXITCODE -eq 0) {
            Write-ColorOutput Green "✓ Коміт успішно створено!"
        } else {
            Write-ColorOutput Red "✗ Помилка при створенні коміту!"
            exit 1
        }
    } else {
        Write-ColorOutput Yellow "Пропущено додавання змін"
    }
} elseif ($hasChanges -and $SkipCommit) {
    Write-ColorOutput Yellow "⚠ Є незакомічені зміни, але режим SkipCommit активний"
} else {
    Write-ColorOutput Green "✓ Немає незакомічених змін"
}

# 2. Отримання останніх змін з сервера
Write-ColorOutput Cyan "`n=== Отримання останніх змін з сервера ==="
git fetch origin
if ($LASTEXITCODE -ne 0) {
    Write-ColorOutput Yellow "⚠ Помилка при отриманні змін (можливо, це перший push)"
}

$currentBranch = git rev-parse --abbrev-ref HEAD
$remoteBranch = "origin/$currentBranch"

# Перевірка чи є віддалена гілка
$remoteExists = git ls-remote --heads origin $currentBranch 2>$null

if ($remoteExists) {
    $ahead = git rev-list --count "$remoteBranch..HEAD" 2>$null
    $behind = git rev-list --count "HEAD..$remoteBranch" 2>$null
    
    if ($behind -gt 0) {
        Write-ColorOutput Yellow "⚠ На сервері є новіші зміни ($behind комітів)."
        $response = Read-Host "Отримати зміни з сервера перед відправкою? (y/n)"
        if ($response -eq "y" -or $response -eq "Y") {
            Write-ColorOutput Cyan "Отримання змін з сервера..."
            git pull origin $currentBranch --no-edit
            if ($LASTEXITCODE -ne 0) {
                Write-ColorOutput Red "✗ Помилка при отриманні змін!"
                exit 1
            }
            Write-ColorOutput Green "✓ Зміни отримано"
        }
    }
    
    if ($ahead -gt 0) {
        Write-ColorOutput Green "✓ Локально є $ahead нових комітів для завантаження"
    } else {
        Write-ColorOutput Yellow "⚠ Немає нових комітів для завантаження"
    }
}

# 3. Відправка на GitHub
Write-ColorOutput Cyan "`n=== Відправка змін на GitHub ==="
Write-Host "Гілка: $currentBranch" -ForegroundColor Gray

$response = Read-Host "Відправити зміни на GitHub? (y/n)"
if ($response -eq "y" -or $response -eq "Y") {
    git push origin $currentBranch
    if ($LASTEXITCODE -eq 0) {
        Write-ColorOutput Green "✓ Зміни успішно відправлено на GitHub!"
    } else {
        Write-ColorOutput Red "✗ Помилка при відправці на GitHub!"
        exit 1
    }
} else {
    Write-ColorOutput Yellow "Відправку на GitHub скасовано"
    exit 0
}

# 4. Автоматичний деплой на сервер через SSH (якщо налаштовано)
if ($useSSH) {
    Write-ColorOutput Cyan "`n=== Деплой на сервер через SSH ==="
    Write-Host "Сервер: $($sshConfig.host)" -ForegroundColor Gray
    Write-Host "Користувач: $($sshConfig.user)" -ForegroundColor Gray
    Write-Host "Шлях на сервері: $($sshConfig.path)" -ForegroundColor Gray
    
    $response = Read-Host "`nВиконати деплой на сервер? (y/n)"
    if ($response -eq "y" -or $response -eq "Y") {
        Write-ColorOutput Cyan "Підключення до сервера..."
        
        # Формування SSH команди
        $sshCommand = "cd $($sshConfig.path) && git pull origin $currentBranch"
        
        if ($sshConfig.password) {
            # Використання sshpass або plink для пароля
            Write-ColorOutput Yellow "⚠ Використання пароля через SSH (рекомендується використовувати SSH ключі)"
            
            # Перевірка чи є plink (PuTTY)
            $plinkPath = Get-Command plink -ErrorAction SilentlyContinue
            if ($plinkPath) {
                $fullCommand = "echo y | plink -ssh -pw `"$($sshConfig.password)`" $($sshConfig.user)@$($sshConfig.host) `"$sshCommand`""
                Invoke-Expression $fullCommand
            } else {
                Write-ColorOutput Red "✗ plink не знайдено. Встановіть PuTTY або налаштуйте SSH ключі"
                Write-ColorOutput Yellow "Альтернатива: виконайте вручну на сервері:"
                Write-Host "  ssh $($sshConfig.user)@$($sshConfig.host)" -ForegroundColor White
                Write-Host "  cd $($sshConfig.path)" -ForegroundColor White
                Write-Host "  git pull origin $currentBranch" -ForegroundColor White
            }
        } elseif ($sshConfig.keyPath) {
            # Використання SSH ключа
            $keyPath = $sshConfig.keyPath
            if (-not (Test-Path $keyPath)) {
                Write-ColorOutput Red "✗ SSH ключ не знайдено: $keyPath"
                exit 1
            }
            
            $fullCommand = "ssh -i `"$keyPath`" $($sshConfig.user)@$($sshConfig.host) `"$sshCommand`""
            Invoke-Expression $fullCommand
        } else {
            # Стандартне SSH підключення (використовує SSH ключі з ~/.ssh)
            $fullCommand = "ssh $($sshConfig.user)@$($sshConfig.host) `"$sshCommand`""
            Invoke-Expression $fullCommand
        }
        
        if ($LASTEXITCODE -eq 0) {
            Write-ColorOutput Green "✓ Деплой на сервер виконано успішно!"
        } else {
            Write-ColorOutput Red "✗ Помилка при деплої на сервер!"
            Write-ColorOutput Yellow "Виконайте вручну на сервері:"
            Write-Host "  ssh $($sshConfig.user)@$($sshConfig.host)" -ForegroundColor White
            Write-Host "  cd $($sshConfig.path)" -ForegroundColor White
            Write-Host "  git pull origin $currentBranch" -ForegroundColor White
        }
    } else {
        Write-ColorOutput Yellow "Деплой на сервер пропущено"
    }
} else {
    Write-ColorOutput Yellow "`n⚠ SSH деплой не налаштовано"
    Write-ColorOutput Cyan "Для налаштування створіть файл deploy-config.json:"
    Write-Host "  .\setup-deploy-config.ps1" -ForegroundColor White
}

Write-ColorOutput Green "`n=== Деплой завершено ==="
