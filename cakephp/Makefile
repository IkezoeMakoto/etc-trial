.PHONY: up down clean

.env:
	@cp .env.example .env

up: .env
	docker-compose up --force-recreate -d

down:
	docker-compose down

rerun:
    docker-compose restart php

clean:
	docker-compose system prune