FROM php:8.2-apache

# Define o diretório de trabalho padrão do Apache
WORKDIR /var/www/html

# Copia os arquivos da aplicação para o container
COPY . .

# Ajusta permissões básicas para o servidor web
RUN chown -R www-data:www-data /var/www/html

# O Render geralmente espera tráfego na porta 80 por padrão para serviços web
EXPOSE 80