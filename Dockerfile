# Use the official PHP Apache image
FROM php:8.2-apache

# Enable Apache mod_rewrite if needed (for frameworks)
RUN a2enmod rewrite

# Copy project files into the container
COPY . /var/www/html/

# Set working directory
WORKDIR /var/www/html/

# Expose Render’s dynamic port
EXPOSE 8080

# Update Apache to listen on port 8080 (Render requires this)
RUN sed -i 's/80/8080/g' /etc/apache2/ports.conf /etc/apache2/sites-available/000-default.conf

# Optional: install Composer dependencies if composer.json exists
RUN if [ -f composer.json ]; then \
    apt-get update && apt-get install -y unzip git && \
    curl -sS https://getcomposer.org/installer | php && \
    php composer.phar install; \
    fi

# Start Apache
CMD ["apache2-foreground"]
