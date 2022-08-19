FROM php:7.4-fpm-alpine

WORKDIR /var/www/html

RUN apk add --no-cache \
    openssl-dev