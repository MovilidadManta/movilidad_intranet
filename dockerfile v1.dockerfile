# Definir la imagen base mínima de PHP
FROM php:8.0-cli-alpine

# Instalar dependencias necesarias
RUN apk --no-cache add \
    bash \
    git \
    openssh-client \
    openssl \
    supervisor \
    libzip-dev \
    zip \
    unzip \
    postgresql-dev \
    curl

# Instalar PHP extensions requeridos para Laravel
RUN docker-php-ext-install pdo_pgsql bcmath zip

# Instalar Composer (administrador de dependencias de PHP)
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Crear un directorio para la aplicación
WORKDIR /var/www

# Copiar archivos de la aplicación
COPY . /var/www

# Instalar dependencias de Composer (si es necesario)
# RUN composer install --no-interaction --no-scripts --no-progress --prefer-dist

# Generar la clave de aplicación de Laravel
# RUN php artisan key:generate

# Establecer permisos adecuados en el directorio de trabajo
# RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

# Exponer el puerto 80 para el servidor web
EXPOSE 8080

# Comando por defecto para ejecutar el servidor web (php artisan serve)
CMD ["php", "artisan", "serve", "--host", "0.0.0.0", "--port", "8080"]