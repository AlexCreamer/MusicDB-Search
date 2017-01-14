FROM richarvey/nginx-php-fpm:latest

RUN rm -v /etc/nginx/sites-enabled/default.conf
ADD ./src /var/www
ADD ./default.conf /etc/nginx/sites-enabled/
