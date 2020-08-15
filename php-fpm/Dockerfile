FROM php:fpm-alpine

LABEL maintainer="Alex Souze <alexmscontato@gmail.com>"

RUN apk --update --no-cache add git \
    && docker-php-ext-install pdo_mysql \
    && apk --update --no-cache add bash \
    && apk --update --no-cache add nano \
    && wget https://get.symfony.com/cli/installer -O - | bash \
    && mv /root/.symfony/bin/symfony /usr/local/bin/symfony \
    && symfony server:ca:install

COPY --from=composer /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/shippings

EXPOSE 9000