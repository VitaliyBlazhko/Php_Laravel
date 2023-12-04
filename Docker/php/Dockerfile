FROM php:8.2-fpm

RUN apt-get update && apt-get install -y zip unzip p7zip-full





COPY .. /var/www/html
WORKDIR /var/www/html
CMD ["php-fpm"]

