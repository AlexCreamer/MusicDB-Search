FROM richarvey/nginx-php-fpm:latest

RUN rm -v /etc/nginx/sites-enabled/default.conf && cd /tmp \
    && git clone https://github.com/bcit-ci/CodeIgniter4.git \
    && rm -r CodeIgniter4/application  && rm -r /var/www \
    && mv CodeIgniter /var/www 
ADD ./application /var/www
ADD ./default.conf /etc/nginx/sites-enabled/
