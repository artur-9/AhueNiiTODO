# 📝 TODO List (Laravel + Docker)

## 🚀 Быстрый запуск:

# 1. Скачать проект
git clone https://github.com/artur-9/TODO_list.git
cd TODO_list

# 2. Создать файл настроек
cp .env.example .env

#3.Замените эти строки:
DB_HOST=db                    
DB_PORT=3306
DB_DATABASE=notes_todo_       
DB_USERNAME=laravel           
DB_PASSWORD=laravelpassword

#4 Запустите базу данных:
docker compose up -d db
sleep 15  # ждем пока MySQL запустится

# 3. Запустить контейнеры
docker compose up -d 

# 4. ⏰ ПОДОЖДАТЬ 1-2 МИНУТЫ!

# 5. Установить зависимости (ВАЖНО!)
docker compose exec app bash
composer install
php artisan key:generate
php artisan migrate
exit

# 6. Очистить кэш
docker compose exec app php artisan optimize:clear

# 7. Открыть сайт (в режиме инкогнито!)
# http://localhost:8000

## 🗄️ База данных:
- Хост: `db`
- Порт: `3307` (для внешнего доступа)
- Данные загружаются автоматически из `docker/mysql/init/`
