.PHONY: dev/server

.env:
	cp .env.local .env

vendor:
	composer install --prefer-dist --optimize-autoloader --no-interaction

dev/server: .env vendor
	php artisan serve --host 0.0.0.0 --port 80
