FROM php:8.4-cli

WORKDIR /app

COPY . .

RUN apt-get update && apt-get install -y \
    git unzip zip libsqlite3-dev

RUN docker-php-ext-install pdo pdo_sqlite

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN composer install --no-dev --optimize-autoloader

EXPOSE 8080

CMD php artisan serve --host=0.0.0.0 --port=${PORT}