# Simple script to update files on server
# Usage: .\update-server-simple.ps1

$configPath = Join-Path $PSScriptRoot "deploy-config.json"
if (-not (Test-Path $configPath)) {
    Write-Host "Error: deploy-config.json not found!" -ForegroundColor Red
    exit 1
}

$config = Get-Content $configPath | ConvertFrom-Json

Write-Host "=== Server Update ===" -ForegroundColor Cyan
Write-Host ""
Write-Host "Server: $($config.host)" -ForegroundColor Gray
Write-Host "User: $($config.user)" -ForegroundColor Gray
Write-Host "Path: $($config.path)" -ForegroundColor Gray
Write-Host ""

Write-Host "Since plink is not installed, please run manually:" -ForegroundColor Yellow
Write-Host ""
Write-Host "1. Connect to server:" -ForegroundColor Cyan
Write-Host "   ssh $($config.user)@$($config.host)" -ForegroundColor White
Write-Host "   Password: $($config.password)" -ForegroundColor Gray
Write-Host ""
Write-Host "2. Go to project folder:" -ForegroundColor Cyan
Write-Host "   cd $($config.path)" -ForegroundColor White
Write-Host ""
Write-Host "3. If repository exists, update:" -ForegroundColor Cyan
Write-Host "   git pull origin main" -ForegroundColor White
Write-Host ""
Write-Host "4. If repository does not exist, clone:" -ForegroundColor Cyan
Write-Host "   git clone https://github.com/valet343/purelife.git ." -ForegroundColor White
Write-Host ""
Write-Host "Or install PuTTY for automatic deployment:" -ForegroundColor Yellow
Write-Host "   https://www.putty.org/" -ForegroundColor White
Write-Host ""
