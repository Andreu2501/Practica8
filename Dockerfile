# imagen base
FROM php:7.3-apache
#comandos a correr en el dockerfile
RUN docker-php-ext-install -j$(nproc) pdo
RUN docker-php-ext-install -j$(nproc) pdo_mysql
