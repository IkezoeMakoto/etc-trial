FROM wordpress:5.4-php7.3-fpm-alpine

WORKDIR /var/www/html
COPY ./usr/local/etc/php /usr/local/etc/php

# timezone and make
RUN apk --update --no-cache add tzdata make && \
    cp /usr/share/zoneinfo/Asia/Tokyo /etc/localtime && \
    apk del tzdata

COPY ./Makefile ./

# wp-cli
RUN make /usr/local/bin/wp