target="/etc/php7/php-fpm.d/www.conf"

grep -E "listen = 127.0.0.1" $target > dev/null 2>$1
if [$? -eq 0]; then
    sed -i "s|.*listen = 127.0.0.1.*|listen = 9000|g" $target
    echo "env[MYSQL_HOSTNAME] = \$MYSQL_HOSTNAME" >> $target
    echo "env[MYSQL_USER] = \$MYSQL_USER" >> $target
    echo "env[MYSQL_PASSWORD] = \$MYSQL_PASSWORD" >> $target
    echo "env[MYSQL_DATABASE] = \$MYSQL_DATABASE" >> $target
fi
if [! -f "wp-config.php"]; then
    cp /config/wp-config ./wp-config.php
    sleep 5
    wp core install --url="$WP_URL" --title="$WP_TITLE" \
        --admin_user="$WP_ADMIN_USER" --admin_password="$WP_ADMIN_PWD" \
        --admin_email="$WP_ADMIN_EMAIL" --skip-email
    wp plugin update --all
    wp theme install oceanlynewsdark --activate
    wp user create $WP_USER $WP_USER_EMAIL --role=editor --user_pass=$WP_USER_PASSWORD
    wp post generate --count=5 --post_title="Ceci est un test"
fi

php-fpm7 --nodaemonize