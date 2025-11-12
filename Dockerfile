FROM richarvey/nginx-php-fpm:3.1.6

# Copy your entire application into the webroot
COPY . /var/www/html

# Exclude installing composer dependencies during the initial build
# We will handle it with a deploy script instead
ENV SKIP_COMPOSER 1 
ENV WEBROOT /var/www/html/public
ENV PHP_ERRORS_STDERR 1
ENV RUN_SCRIPTS 1

CMD ["/start.sh"]
