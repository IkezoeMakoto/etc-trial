.PHONY: server-run

vendor:
    composer install

server-run: vendor
    bin/cake server -H 0.0.0.0 -p 80
