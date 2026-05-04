📦 Инструкция по запуску TODO List (Laravel + Docker)
Требования:
✅ Установленный Docker Desktop (скачать)
✅ Установленный Git (опционально, можно скачать ZIP)
🚀 Быстрый старт:
1️⃣ Скачай проект
Способ A: Через Git (рекомендуется)
bash
-git clone https://github.com/ТВОЙ_НИК/ТВОЙ_РЕПОЗИТОРИЙ.git
-cd ИМЯ_ПАПКИ

Способ B: Скачать ZIP
Открой репозиторий на GitHub
Нажми зелёную кнопку Code → Download ZIP
Распакуй архив
Открой PowerShell в папке проекта


2️⃣ Создай файл настроек
powershell

 cp .env.example .env

💡 Важно: Если файла .env.example нет, создай файл .env с таким содержимым:
env
APP_NAME=Laravel
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=notes_todo
DB_USERNAME=laravel
DB_PASSWORD=laravelpassword


3️⃣ Запусти Docker контейнеры
powershell
# Собери и запусти все контейнеры
docker compose up -d --build
⏳ Подожди 1-2 минуты (первый запуск может занять время)
4️⃣ Настрой Laravel
powershell
# Войди в контейнер с PHP
docker compose exec app bash

# Внутри контейнера выполни по очереди:
composer install
php artisan key:generate
php artisan migrate
exit
5️⃣ Открой сайт
🌐 В браузере открой: http://localhost:8000
