FROM php:apache

COPY . /var/www/html/

WORKDIR /var/www/html

EXPOSE 80

CMD ["apache2-foreground"]


