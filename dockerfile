# PHP runtime container used by nginx + php-fpm

FROM php:8.1-fpm-alpine

# Install PDO extension for MariaDB/MySQL access
RUN docker-php-ext-install pdo pdo_mysql

# Copy application (optional for production builds)
WORKDIR /var/www/html