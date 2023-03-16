FROM php:7.0-apache
COPY . /var/www/html/
RUN docker-php-ext-install mysqli
RUN   sed -i "s|;   extension=/path/to/extension/msql.so|extension=/usr/local/lib/php/extensions/no-debug-non-zts-20151012/msqli.os |g" /usr/local/etc/php/php.ini-development
RUN   sed -i "s|;   extension=/path/to/extension/msql.so|extension=/usr/local/lib/php/extensions/no-debug-non-zts-20151012/msqli.os |g" /usr/local/etc/php/php.ini-production
RUN apt-get update
