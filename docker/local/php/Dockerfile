FROM php:7.2-fpm-alpine


RUN set -xe && apk update && apk add --no-cache \
    libzip \
    bash \
    curl \
    libmcrypt-dev \
    libxml2-dev \
    postgresql-dev \
    pcre-dev \
    icu-dev \
    git \
    autoconf \
    g++ \
    make \
    shadow \
    libintl \
    make \
    autoconf


RUN docker-php-ext-install intl opcache pdo_pgsql zip pcntl sockets exif soap \
    && docker-php-source extract \
    && pecl install xdebug \
    && docker-php-ext-enable xdebug \
    && pecl install rar \
    && docker-php-ext-enable rar \
    && docker-php-source delete


# composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer


# change uid for nginx user to avoid problems with host permissions
ARG HOST_USER_ID
ARG HOST_GROUP_ID
RUN if [ ! -z "$HOST_USER_ID" ] ; then usermod -u $HOST_USER_ID www-data ; fi \
    && if [ ! -z "$HOST_GROUP_ID" ] ; then groupmod -g $HOST_GROUP_ID www-data ; fi \
    && mkdir /var/session && chown www-data:www-data /var/session


# symfony pool config
COPY symfony.conf /usr/local/etc/php-fpm.d/symfony.conf


WORKDIR /var/www
