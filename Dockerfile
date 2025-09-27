FROM php:8.2-apache

# Instala la extensión pgsql para PostgreSQL
RUN apt-get update && apt-get install -y libpq-dev \
    && docker-php-ext-install pgsql

# Copia el código fuente
COPY . /var/www/html/

# Permisos y configuración
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html \
    && a2enmod rewrite

EXPOSE 80
