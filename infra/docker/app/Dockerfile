# docker build -f infra/docker/app/Dockerfile -t iartz/php:7.4-apache
# Run
# docker run --name php7.4-apache -p 80 -v $(pwd)

FROM php:7.4-apache

ENV APACHE_DOCUMENT_ROOT /var/www/html

RUN pecl install xdebug-3.1.5 && docker-php-ext-enable xdebug

COPY ./xdebug.ini $PHP_INI_DIR/conf.d/docker-php-ext-xdebug.ini

COPY ./ssl/*.pem /etc/ssl/certs

COPY ./default.conf /etc/apache2/sites-available/000-default.conf

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN a2enmod ssl rewrite
