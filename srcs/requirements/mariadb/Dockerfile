FROM debian:buster-slim

RUN apt-get update
RUN apt-get install -y mariadb-server

COPY ./config/config.conf /etc/mysql/mariadb.conf.d/
COPY ./tools /var/www/

RUN service mysql start && mysql < /var/www/db.sql

CMD ["mysqld"] 