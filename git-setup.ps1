# Git Setup Script
# Encoding: UTF-8

Write-Host "=== Git Setup ===" -ForegroundColor Green

# Add Git to PATH for current session
$env:Path = $env:Path + ";C:\Program Files\Git\bin"

Write-Host ""
Write-Host "Git added to PATH for current session" -ForegroundColor Yellow
Write-Host "Git version: " -NoNewline
git --version

Write-Host ""
Write-Host "=== Repository Status ===" -ForegroundColor Green
git status --short | Select-Object -First 10
Write-Host "... (showing first 10 files)" -ForegroundColor Gray

Write-Host ""
Write-Host "=== Git Configuration ===" -ForegroundColor Green
Write-Host "Username: " -NoNewline
git config user.name
Write-Host "Email: " -NoNewline
git config user.email

Write-Host ""
Write-Host "=== Remote Repositories ===" -ForegroundColor Green
$remotes = git remote -v
if ($remotes) {
    $remotes
} else {
    Write-Host "No remote repositories configured" -ForegroundColor Yellow
    Write-Host ""
    Write-Host "To add remote repository, run:" -ForegroundColor Cyan
    Write-Host "  git remote add origin https://github.com/USERNAME/REPOSITORY.git" -ForegroundColor White
}

Write-Host ""
Write-Host "=== Next Steps ===" -ForegroundColor Green
Write-Host "1. Add remote repository (if not added yet):" -ForegroundColor Cyan
Write-Host "   git remote add origin <YOUR_REPO_URL>" -ForegroundColor White
Write-Host ""
Write-Host "2. Make commit:" -ForegroundColor Cyan
Write-Host "   git commit -m 'Description of changes'" -ForegroundColor White
Write-Host ""
Write-Host "3. Push to server:" -ForegroundColor Cyan
Write-Host "   git push -u origin main" -ForegroundColor White

Write-Host ""
Write-Host "See GIT_INSTRUKCIYA.md for detailed instructions" -ForegroundColor Yellow





