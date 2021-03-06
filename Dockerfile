FROM php:7.2-apache
RUN mkdir -p /usr/share/man/man1
RUN apt-get update && DEBIAN_FRONTEND=noninteractive apt-get install -y tshark apt-utils
COPY webapp/ /var/www/html/
RUN chown -R www-data.www-data /var/www/html/data /var/www/html/img
#ENV PORT 8080

ENTRYPOINT []
CMD sed -i "s/80/$PORT/g" /etc/apache2/sites-available/000-default.conf /etc/apache2/ports.conf && docker-php-entrypoint apache2-foreground
