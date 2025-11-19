FROM php:8.2-apache

# Enable .htaccess overrides (optional)
RUN a2enmod rewrite

# Set document root permissions to be accessible by Apache
RUN chown -R www-data:www-data /var/www/html

# Expose port 80
EXPOSE 80
