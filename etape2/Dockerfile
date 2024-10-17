FROM php:7.4-fpm

# Installation des extensions requises pour PDO et MySQL
RUN apt-get update && apt-get install -y libzip-dev \
    && docker-php-ext-install pdo pdo_mysql
