#!/bin/bash

if [ ! -f /var/www/html/wp-config.php ]; then
	sed -i "s/listen = \/run\/php\/php7.3-fpm.sock/listen = 9000/" "/etc/php/7.3/fpm/pool.d/www.conf";
	chown -R www-data:www-data /var/www/*;
	chown -R 755 /var/www/*;
	mkdir -p /run/php/;
	touch /run/php/php7.3-fpm.pid;

	echo "Wordpress: setting up..."
	mkdir -p /var/www/html
	wget https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar;
	chmod +x wp-cli.phar; 
	mv wp-cli.phar /usr/local/bin/wp;
	cd /var/www/html;
	wp core download --allow-root;
#	mv /var/www/wp-config.php /var/www/html/
	cp wp-config-sample.php wp-config.php

	sed -i "s/database_name_here/$WP_TITLE/" wp-config.php
	sed -i "s/username_here/$WP_USER_LOGIN/" wp-config.php
	sed -i "s/password_here/$WP_USER_PASSWORD/" wp-config.php
	sed -i "s/localhost/mariadb/" wp-config.php
	echo "Wordpress: creating users..."
	wp core install --allow-root --url=${WP_URL} --title=${WP_TITLE} --admin_user=${WP_ADMIN_LOGIN} --admin_password=${WP_ADMIN_PASSWORD} --admin_email=${WP_ADMIN_EMAIL}
	wp user create --allow-root ${WP_USER_LOGIN} ${WP_USER_EMAIL} --user_pass=${WP_USER_PASSWORD};
	chown -R www-data:www-data /var/www/html/
	chmod -R 755 /var/www/html/
	echo "Wordpress: set up!"
fi

exec "$@"
