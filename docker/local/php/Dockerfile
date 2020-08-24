FROM php:7.4-fpm-alpine


RUN set -xe && apk update && apk add --no-cache \
    libzip \
    bash \
    curl \
    libmcrypt-dev \
    libxml2-dev \
    libzip-dev \
    postgresql-dev \
    pcre-dev \
    git \
    autoconf \
    g++ \
    make \
    shadow


RUN docker-php-ext-install pdo_pgsql zip pcntl sockets soap \
    && docker-php-source extract \
    && pecl install xdebug \
    && docker-php-ext-enable xdebug \
    && docker-php-source delete \
    && echo 'date.timezone=Europe/London' >> /usr/local/etc/php/conf.d/php-date.ini


# composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
    && mkdir -p /.composer \
    && chmod -Rf 777 /.composer


# change uid for php-fpm user to avoid problems with host permissions
ARG HOST_USER_ID
ARG HOST_GROUP_ID
RUN if [ ! -z "$HOST_USER_ID" ] ; then usermod -u $HOST_USER_ID www-data ; fi
RUN if [ ! -z "$HOST_GROUP_ID" ] ; then groupmod -g $HOST_GROUP_ID www-data ; fi
RUN mkdir /var/session && chown www-data:www-data /var/session


# symfony pool config
COPY symfony.conf /usr/local/etc/php-fpm.d/symfony.conf


WORKDIR /var/app
