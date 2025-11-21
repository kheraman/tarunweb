FROM php:8.2-apache

# System deps for common PHP extensions used by the sites
RUN apt-get update \
    && apt-get install -y --no-install-recommends \
        libpng-dev \
        libjpeg-dev \
        libfreetype6-dev \
        libzip-dev \
        unzip \
    && rm -rf /var/lib/apt/lists/*

# Enable frequently required PHP extensions
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install \
        mysqli \
        pdo \
        pdo_mysql \
        gd \
        zip

# Useful Apache modules for clean URLs and caching headers
RUN a2enmod rewrite expires headers

WORKDIR /var/www/html

# Containers mount the specific site directory at runtime.
