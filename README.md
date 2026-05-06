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

# 4 Запустите базу данных:
docker compose up -d db
sleep 15  # ждем пока MySQL запустится

# 5. Запустить контейнеры
docker compose up -d 

# 6.Проверяем содержимое контейнера:
docker compose exec app ls -la /var/www/

# 7.Устанавливаем PHP зависимости (Composer):
docker compose run --rm app composer install

# 8. Устанавливаем JavaScript зависимости (npm):
docker compose run --rm app npm install

# 9.Собираем frontend (CSS/JS):
docker compose run --rm app npm run build

# 10.Исправляем права доступа:
docker compose run --rm app chown -R www-data storage bootstrap/cache
docker compose run --rm app chmod -R 775 storage bootstrap/cache

# 11.Исправляем права доступа:
docker compose run --rm app chown -R www-data storage bootstrap/cache
docker compose run --rm app chmod -R 775 storage bootstrap/cache

# 12.Генерируем APP_KEY:
docker compose run --rm app php artisan key:generate

# 13.Запускаем миграции БД:
docker compose run --rm app php artisan migrate

# 14.Проверяем что контейнеры работают:
docker compose ps

# 15. Открыть сайт (в режиме инкогнито!)
# http://localhost:8000

## 🗄️ База данных:
- Хост: `db`
- Порт: `3307` (для внешнего доступа)
- Данные загружаются автоматически из `docker/mysql/init/`
