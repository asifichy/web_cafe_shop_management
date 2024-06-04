# Dockerfile.php

# Use the official PHP image as a base
FROM php:8.1-apache

# Copy source code to the container
COPY . /var/www/html/

# Set permissions (optional)
RUN chown -R www-data:www-data /var/www/html

# Expose port 80
EXPOSE 80
