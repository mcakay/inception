FROM debian:buster-slim

RUN apt-get update && apt-get install -y nginx openssl

COPY ./config/default.conf /etc/nginx/conf.d/default.conf
COPY ./tools/nginx_start /var/www

RUN chmod +x /var/www/nginx_start.sh
ENTRYPOINT [ "var/www/nginx_start.sh"]

CMD ["nginx", "-g", "daemon off;"]