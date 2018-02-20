.PHONY: up down clean

env:
	cp .env.example .env

up:
	docker-compose up --force-recreate -d

down:
	docker-compose down


clean:
	docker-compose system prune