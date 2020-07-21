#!/bin/bash -eu

alias wp='wp --allow-root'

wp plugin install akismet --version=4.1.5 --activate
wp plugin install all-in-one-wp-migration --version=7.25 --activate
wp plugin install taxonomy-terms-order --version=1.5.7.2 --activate
wp plugin install duplicate-post --version=3.2.1 --activate
wp plugin install duplicate-post-and-replace-text --version=1.1.1 --activate
wp plugin install html-editor-syntax-highlighter --version=2.4.2 --activate
wp plugin install limit-login-attempts-reloaded --version=2.15.0 --activate
wp plugin install yummi-auto-check-parent-category-category-tree-checklist --version=1.1.8 --activate
wp plugin install query-monitor --version=3.6.0 --activate
wp plugin install smart-custom-fields --version=4.1.3 --activate
wp plugin install wordpress-importer --version=0.7 --activate
wp plugin install wp-multibyte-patch --version=2.8.5 --activate