WP=/usr/local/bin/wp
WP_SRC=https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
$(WP):
	curl $(WP_SRC) -o $(WP)
	chmod +x $(WP)

setup:
	sh plugin.sh