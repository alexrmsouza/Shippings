FROM php:fpm-alpine

LABEL maintainer="Alex Souza <alexmscontato@gmail.com>"

RUN apk --update --no-cache add git \
    && docker-php-ext-install pdo_mysql \
    && apk --update --no-cache add bash \
    && apk --update --no-cache add nano \
    && wget https://get.symfony.com/cli/installer -O - | bash \
    && mv /root/.symfony/bin/symfony /usr/local/bin/symfony \
    && symfony server:ca:install

COPY --from=composer /usr/bin/composer /usr/bin/composer

COPY xdebug.ini  /etc/php7/conf.d/

COPY symfony.pool.conf /etc/php7/php-fpm.d/

CMD ["php-fpm", "-F"]

WORKDIR /var/www/app

EXPOSE 9000