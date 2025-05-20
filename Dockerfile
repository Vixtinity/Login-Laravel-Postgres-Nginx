FROM php:8.2-fpm

# Establecer shell en modo de depuración
RUN set -ex \
    && apt-get update && apt-get install -y libpq-dev nodejs yarn \
    && docker-php-ext-install pdo pdo_pgsql

# Instalar Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Establecer directorio de trabajo
WORKDIR /var/www/html

COPY . /var/www/html

# Dar permisos a storage y bootstrap/cache
RUN mkdir -p /var/www/html/Laravel-Login/storage/logs /var/www/html/Laravel-Login/bootstrap/cache \
    && chown -R www-data:www-data /var/www/html/Laravel-Login/storage /var/www/html/Laravel-Login/bootstrap/cache \
    && chmod -R 775 /var/www/html/Laravel-Login/storage /var/www/html/Laravel-Login/bootstrap/cache \
    && chmod -R 755 docker/postgres

CMD ["php", "artisan", "serve", "--host=0.0.0.0"]
