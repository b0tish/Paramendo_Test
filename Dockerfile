# Use official PHP 8.2 with Apache
FROM php:8.2-apache

# Install dependencies and PostgreSQL driver
RUN apt-get update && apt-get install -y \
    git curl zip unzip libpq-dev && \
    docker-php-ext-install pdo pdo_pgsql

# Enable Apache mod_rewrite for Laravel
RUN a2enmod rewrite

# Set working directory
WORKDIR /var/www/html

# Copy project files
COPY . .

# Install Composer
COPY --from=composer:2.6 /usr/bin/composer /usr/bin/composer

# Install Laravel dependencies (optimized, no dev)
RUN composer install --no-dev --optimize-autoloader

# ✅ Configure Apache to serve from /public
RUN sed -i 's|/var/www/html|/var/www/html/public|g' /etc/apache2/sites-available/000-default.conf \
 && sed -i 's|/var/www/|/var/www/html/public/|g' /etc/apache2/apache2.conf

# ✅ Enable .htaccess rules
RUN echo "<Directory /var/www/html/public>\n\
    AllowOverride All\n\
    Require all granted\n\
</Directory>" > /etc/apache2/conf-available/laravel.conf && \
    a2enconf laravel

# ✅ Fix permissions for storage and cache
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Expose port 80
EXPOSE 80

# ✅ Startup Script: runs Laravel setup tasks, then launches Apache
CMD bash -c "\
  php artisan key:generate --force && \
  php artisan migrate --force && \
  php artisan storage:link && \
  apache2-foreground"
