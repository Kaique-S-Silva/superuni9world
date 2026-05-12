# Imagem base: Usa PHP 8.2 com Apache para servir aplicações web PHP.
FROM php:8.2-apache

# Define o diretório de trabalho padrão do Apache dentro do container.
WORKDIR /var/www/html

# Copia todos os arquivos da aplicação local para o diretório de trabalho do container.
COPY . .

# Ajusta permissões dos arquivos para o usuário www-data (padrão do Apache) para evitar problemas de acesso.
RUN chown -R www-data:www-data /var/www/html

# Expõe a porta 80 para que o container possa receber tráfego web (padrão para HTTP).
EXPOSE 80