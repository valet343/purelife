#!/bin/bash
# Скрипт для деплою змін на сервер
# Використання: ./deploy.sh "Опис змін"

MESSAGE=${1:-"Оновлення проекту"}

echo "=== Перевірка статусу Git ==="
git status

echo ""
echo "=== Перевірка незакомічених змін ==="
if [ -n "$(git status --porcelain)" ]; then
    echo "Знайдено незакомічені зміни:"
    git status --short
    
    read -p "Додати всі зміни до коміту? (y/n) " -n 1 -r
    echo
    if [[ $REPLY =~ ^[Yy]$ ]]; then
        git add .
        echo "Зміни додані до staging area"
    else
        echo "Операцію скасовано"
        exit 1
    fi
else
    echo "Немає незакомічених змін"
fi

echo ""
echo "=== Перевірка staged змін ==="
if [ -n "$(git diff --cached --name-only)" ]; then
    echo "Файли готові до коміту:"
    git diff --cached --name-only
    
    read -p "Введіть повідомлення коміту (Enter для використання: '$MESSAGE'): " commit_msg
    if [ -z "$commit_msg" ]; then
        commit_msg="$MESSAGE"
    fi
    
    echo ""
    echo "=== Створення коміту ==="
    git commit -m "$commit_msg"
    
    if [ $? -eq 0 ]; then
        echo "Коміт успішно створено!"
        
        echo ""
        echo "=== Підтвердження відправки на сервер ==="
        read -p "Відправити зміни на сервер (origin/main)? (y/n) " -n 1 -r
        echo
        if [[ $REPLY =~ ^[Yy]$ ]]; then
            echo ""
            echo "=== Відправка на сервер ==="
            git push origin main
            
            if [ $? -eq 0 ]; then
                echo ""
                echo "✓ Зміни успішно відправлено на сервер!"
            else
                echo ""
                echo "✗ Помилка при відправці на сервер"
                exit 1
            fi
        else
            echo "Відправку скасовано. Зміни залишилися локально."
        fi
    else
        echo "Помилка при створенні коміту"
        exit 1
    fi
else
    echo "Немає змін для коміту"
fi
