FROM php:7.2-alpine

MAINTAINER "Ikezoe Makoto" <150283t@gmail.com>

# 必要そうなやつ
RUN apk update && \
    apk add make git shadow && \
    rm -rf /var/cache/apk/*

ARG USER_ID
ARG GROUP_ID

RUN groupadd -g $GROUP_ID -o developer &&\
    useradd -m developer -u $USER_ID -g $GROUP_ID

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

USER developer
WORKDIR /home/developer/app

COPY ./ /home/developer/app

CMD make server-run
