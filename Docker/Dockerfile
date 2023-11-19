FROM php:8.2-fpm

RUN apt-get update && apt-get install -y zip unzip p7zip-full

COPY --from=composer/composer:latest-bin /composer /usr/bin/composer

COPY . /var/www/html

WORKDIR /var/www/html

EXPOSE 9000

VOLUME ["/var/www/html"]
