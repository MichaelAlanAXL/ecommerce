# Usa a imagem oficial do PHP com Apache
FROM php:8.2-apache

# Copia todo o conteúdo do projeto para o Apache
COPY . /var/www/html/

# Ativa o mod_rewrite do Apache (para URLs amigáveis)
RUN a2enmod rewrite

# Define permissões caso precise (opcional)
# RUN chown -R www-data:www-data /var/www/html
