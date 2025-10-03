FROM php:8.2-apache

# Instala dependencias necesarias
RUN docker-php-ext-install pdo pdo_mysql

# Copia el código fuente
COPY . /var/www/html/

# Establece el directorio de trabajo
WORKDIR /var/www/html

# Exponer el puerto
EXPOSE 8080
