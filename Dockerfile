# Imagem base: Usa PHP 8.2 com Apache para servir aplicações web PHP.
FROM php:8.2-apache

# Define o diretório de trabalho padrão do Apache dentro do container.
WORKDIR /var/www/html

ENV APACHE_DOCUMENT_ROOT=/var/www/html/public

# Copia todos os arquivos da aplicação local para o diretório de trabalho do container.
COPY . .

# Ajusta permissões dos arquivos para o usuário www-data (padrão do Apache) para evitar problemas de acesso.
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf && \
    sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf && \
    chown -R www-data:www-data /var/www/html

# Expõe a porta 80 para que o container possa receber tráfego web (padrão para HTTP).
EXPOSE 80