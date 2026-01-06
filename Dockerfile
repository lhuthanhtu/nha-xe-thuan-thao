# Base image có PHP + Apache
FROM php:8.2-apache

# Cài các extension Laravel cần
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    git \
    curl \
    && docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath gd

# Bật rewrite cho Laravel
RUN a2enmod rewrite

# Set thư mục làm việc
WORKDIR /var/www/html

# Copy source code vào container
COPY . .

# Cài Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Cài thư viện PHP
RUN composer install --no-dev --optimize-autoloader

# Set quyền cho storage & cache
RUN chown -R www-data:www-data \
    /var/www/html/storage \
    /var/www/html/bootstrap/cache

# Set Apache document root trỏ vào public
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public

RUN sed -ri 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' \
    /etc/apache2/sites-available/*.conf \
    /etc/apache2/apache2.conf \
    /etc/apache2/conf-available/*.conf

# Mở cổng 80
EXPOSE 80
