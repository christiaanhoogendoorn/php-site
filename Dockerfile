# Use official PHP Apache image
FROM php:8.2-apache

# Copy site files to Apache root
COPY . /var/www/html/

# Enable Apache mod_rewrite if needed
RUN a2enmod rewrite

# Expose port 80
EXPOSE 80
