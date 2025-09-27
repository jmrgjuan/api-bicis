# Usa una imagen oficial de PHP con Apache
FROM php:8.2-apache

# Copia el contenido del repositorio al directorio raíz del servidor web
COPY . /var/www/html/

# Da permisos adecuados
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Habilita el módulo de reescritura de Apache (útil para frameworks como Laravel)
RUN a2enmod rewrite

# Expone el puerto 80 (Apache)
EXPOSE 80