FROM php:7.3-fpm-alpine3.11
RUN docker-php-ext-install pdo pdo_mysql mysqli mbstring
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
COPY . /var/www
WORKDIR /var/www
RUN composer install
EXPOSE 8080
CMD [ "php", "-S", "0.0.0.0:8080", "-t", "public/" ]
