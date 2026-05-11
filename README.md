# 📝 TODO List (Laravel + Docker)

## 🚀 Быстрый запуск:

# 1. Скачать проект
git clone https://github.com/artur-9/TODO_list.git
cd TODO_list

# 2. Создать файл настроек
cp .env.example .env

# 3.Замените эти строки:
DB_HOST=db                    
DB_PORT=3306
DB_DATABASE=notes_todo_       
DB_USERNAME=laravel           
DB_PASSWORD=laravelpassword

# 4 Создай необходимые папки (Windows PowerShell):
New-Item -ItemType Directory -Force -Path ".\storage\framework\views"
New-Item -ItemType Directory -Force -Path ".\storage\framework\cache"
New-Item -ItemType Directory -Force -Path ".\storage\framework\sessions"
New-Item -ItemType Directory -Force -Path ".\storage\logs"
New-Item -ItemType Directory -Force -Path ".\bootstrap\cache"

# 5. Запустить контейнеры
docker compose up -d 

# 6.Установи зависимости и сгенерируй ключ:
docker-compose exec app composer install
docker-compose exec app php artisan key:generate

# 7.Установи npm зависимости и собери ассеты:
docker-compose exec app npm install
docker-compose exec app npm run build

# 8. Запусти миграции:
docker-compose exec app php artisan migrate



# 15. Открыть сайт (в режиме инкогнито!)
# http://localhost:8000

## 🗄️ База данных:
- Хост: `db`
- Порт: `3306` (для внешнего доступа)
- Данные загружаются автоматически из `docker/mysql/init/`
