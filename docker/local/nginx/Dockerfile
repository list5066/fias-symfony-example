FROM nginx:alpine


# change uid for nginx user to avoid problems with host permissions
ARG HOST_USER_ID
ARG HOST_GROUP_ID
RUN echo "upstream php-upstream { server php:9000; }" > /etc/nginx/conf.d/upstream.conf \
    && if [ ! -z "$HOST_GROUP_ID" ] ; then addgroup -S -g $HOST_GROUP_ID www-data ; else addgroup -S www-data ; fi \
    && if [ ! -z "$HOST_USER_ID" ] ; then adduser -S -u $HOST_USER_ID -G www-data www-data ; else adduser -S -G www-data www-data ; fi


# copy configuration files
COPY nginx.conf /etc/nginx/nginx.conf
COPY symfony.conf /etc/nginx/conf.d/default.conf


CMD ["nginx"]
