FROM php:8.2-apache

# Instala as extensões de banco de dados necessárias
RUN apt-get update && apt-get install -y libsqlite3-dev \
    && docker-php-ext-install pdo pdo_sqlite

# Copia os arquivos do seu repositório para o servidor
COPY . /var/www/html/

# Ajusta as permissões: o usuário www-data (Apache) precisa ser dono da pasta do banco
RUN chown -R www-data:www-data /var/www/html/database

# Garante que o Apache consiga escrever na pasta e no arquivo .sqlite
RUN chmod -R 775 /var/www/html/database

EXPOSE 80