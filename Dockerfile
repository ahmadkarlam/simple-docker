FROM php:7.3-fpm-alpine3.11
COPY . /var/www/simple
WORKDIR /var/www/simple
EXPOSE 8080
CMD [ "php", "-S", "0.0.0.0:8080", "-t", "public/" ]