FROM php:8.2

RUN apt-get update && apt-get install -y zip unzip p7zip-full


COPY --from=composer/composer:latest-bin /composer /usr/bin/composer


COPY . /var/www/html

WORKDIR /var/www/html

