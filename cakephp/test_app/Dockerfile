FROM php:7.2-alpine

MAINTAINER "Ikezoe Makoto" <150283t@gmail.com>

# 必要そうなやつ
RUN apk update && \
    apk add make git && \
    rm -rf /var/cache/apk/*

# php拡張
RUN docker-php-ext-install pdo_mysql mysqli mbstring

# php-intl
RUN apk add --update --no-cache icu-dev && \
    rm -rf /var/cache/apk/* && \
    docker-php-ext-install intl

# zip
RUN apk add --update --no-cache zlib-dev && \
    docker-php-ext-install zip

# xdebug
RUN apk add --update --no-cache $PHPIZE_DEPS \
	&& pecl install xdebug \
	&& docker-php-ext-enable xdebug

# composer
RUN curl -sS https://getcomposer.org/installer | php && \
    mv composer.phar /usr/local/bin/composer

WORKDIR /app

CMD ["bin/cake", "server", "-H", "0.0.0.0", "-p", "80"]
