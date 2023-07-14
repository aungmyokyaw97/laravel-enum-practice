FROM php:8.1-fpm-alpine

# Arguments defined in docker-compose.yml
ARG user
ARG uid

RUN apk update && apk add git \ 
    curl \ 
    zip \ 
    unzip

RUN apk add php-xml \
    php-gd \
    php-mbstring

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

USER $user