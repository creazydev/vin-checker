FROM php:7.4.3-fpm-alpine3.11

COPY . /app

VOLUME ["/app"]
CMD ["/usr/local/bin/entrypoint.sh","php-fpm","-F"]