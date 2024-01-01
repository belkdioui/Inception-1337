#!/bin/bash



service mysql start 

sleep 5

echo "CREATE DATABASE IF NOT EXISTS $WP_TITLE ;" > db1.sql
echo "CREATE USER IF NOT EXISTS '$WP_USER_LOGIN'@'%' IDENTIFIED BY '$WP_USER_PASSWORD' ;" >> db1.sql
echo "GRANT ALL PRIVILEGES ON $WP_TITLE.* TO '$WP_USER_LOGIN'@'%' ;" >> db1.sql
echo "FLUSH PRIVILEGES;" >> db1.sql

mysql -u root < db1.sql

service mysql stop

mysqld
