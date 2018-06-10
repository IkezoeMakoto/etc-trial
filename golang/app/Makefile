.PHONY: up go/*

up:
	go run main.go

.env:
	@cp .env.${ENV} .env

go/build:
	go build main.go

go/exec: go/build
	./main