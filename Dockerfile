FROM php:8.1-fpm

# Instalar dependências do sistema
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    default-mysql-client

# Limpar cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Instalar extensões PHP
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Obter Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Definir diretório de trabalho
WORKDIR /var/www

# Copiar arquivos do projeto
COPY . .

# Instalar dependências do PHP
RUN composer install --no-dev --optimize-autoloader

# Dar permissões para pastas de armazenamento
RUN chmod -R 777 storage bootstrap/cache

# Expor porta (será substituída pelo Railway)
EXPOSE 8080

# Comando de inicialização
CMD php artisan migrate --force && php artisan serve --host=0.0.0.0 --port=$PORT