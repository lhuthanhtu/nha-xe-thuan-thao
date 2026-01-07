FROM php:8.2-apache

# ===============================
# 1. System dependencies
# ===============================
RUN apt-get update && apt-get install -y \
    git curl unzip zip nodejs npm \
    && docker-php-ext-install pdo pdo_mysql

# ===============================
# 2. Enable Apache rewrite
# ===============================
RUN a2enmod rewrite

# ===============================
# 3. Set working directory
# ===============================
WORKDIR /var/www/html

# ===============================
# 4. Copy source code
# ===============================
COPY . .

# ===============================
# 5. Install Composer
# ===============================
RUN curl -sS https://getcomposer.org/installer | php \
    && mv composer.phar /usr/local/bin/composer

# ===============================
# 6. Install PHP dependencies
# ===============================
RUN composer install --no-dev --optimize-autoloader --no-interaction

# ===============================
# 7. Install Node deps & build Vite
# ===============================
RUN npm install
RUN npm run build

# ===============================
# 8. Create Laravel required dirs
# ===============================
RUN mkdir -p \
    storage/framework/cache \
    storage/framework/sessions \
    storage/framework/views \
    bootstrap/cache

# ===============================
# 9. Fix permissions (CỰC KỲ QUAN TRỌNG)
# ===============================
RUN chown -R www-data:www-data storage bootstrap/cache \
    && chmod -R 775 storage bootstrap/cache

# ===============================
# 10. Apache document root -> public
# ===============================
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public
RUN sed -ri 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/*.conf \
    && sed -ri 's!/var/www/!/var/www/html/public!g' /etc/apache2/apache2.conf

# ===============================
# 11. Expose port & start Apache
# ===============================
EXPOSE 80
CMD ["apache2-foreground"]
