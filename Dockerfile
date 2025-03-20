FROM php:8.2-apache as final
RUN docker-php-ext-install pdo pdo_mysql && a2enmod rewrite
USER www-data