FROM php:7.1-alpine

MAINTAINER "Ikezoe Makoto" <150283t@gmail.com>

RUN addgroup -g 2000 -S webcontentsowners
#RUN adduser -s /sbin/nologin -G webcontentsowners -D -H nginx

# 必要そうなやつ
RUN apk update && \
    apk add make git && \
    rm -rf /var/cache/apk/*

# php拡張
RUN docker-php-ext-install pdo_mysql mysqli mbstring

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

CMD make dev/server