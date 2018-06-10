FROM golang:1-alpine

RUN apk update && \
    apk add make git && \
    rm -rf /var/cache/apk/*

RUN apk update && \
    apk add tzdata && \
    cp /usr/share/zoneinfo/Asia/Tokyo /etc/localtime && \
    apk del tzdata && \
    rm -rf /var/cache/apk/*

COPY ./ /go/src/github.com/IkezoeMakoto/etc-trial/golang/app

WORKDIR /go/src/github.com/IkezoeMakoto/etc-trial/golang/app

ARG ENV=local
RUN make .env

CMD make up

#RUN make setup

#RUN make build