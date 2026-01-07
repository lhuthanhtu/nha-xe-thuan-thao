FROM php:8.2-apache

# System dependencies
RUN apt-get update && apt-get install -y \
    git curl unzip zip nodejs npm \
    && docker-php-ext-install pdo pdo_mysql

# Enable Apache rewrite
RUN a2enmod rewrite

WORKDIR /var/www/html

# Copy source code
COPY . .

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php \
    && mv composer.phar /usr/local/bin/composer

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Install Node deps & build Vite
RUN npm install
RUN npm run build

# Permissions
RUN chown -R www-data:www-data storage bootstrap/cache

# Apache document root
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public
RUN sed -ri 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/*.conf

EXPOSE 80

# ⭐ QUAN TRỌNG NHẤT
CMD ["apache2-foreground"]
