FROM	alpine:3.14

RUN		apk update

RUN		apk add --no-cache --quiet --update mariadb mariadb-client vim

RUN 	mkdir -p /var/lib/mysqld /run/mysqld

COPY	./conf/create_db.sql /tmp/create_db.sql

COPY	./tools/entrypoint.sh ./

COPY 	./conf/mariadb-server.cnf /etc/my.cnf.d/

RUN 	chmod +x ./entrypoint.sh

RUN		mariadb-install-db --datadir=/var/lib/mysql \
			--auth-root-authentication-method=normal

RUN		chown -R mysql:mysql /var/lib/mysql 

RUN 	chown -R mysql:mysql /run/mysqld

ENTRYPOINT [ "sh", "entrypoint.sh" ]