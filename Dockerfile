FROM alpine:3.11
LABEL Maintainer="Artur Komaristych <artur@s0pex.me>" \
  Description="Lightweight container with Nginx 1.17 & PHP-FPM 7.4.1 based on Alpine Linux."

# Install packages
RUN apk --no-cache add php7 php7-fpm php7-mysqli php7-json php7-openssl php7-curl \
  php7-zlib php7-xml php7-phar php7-intl php7-dom php7-xmlreader php7-ctype php7-session \
  php7-iconv php7-simplexml php7-mbstring php7-gd \
  nginx supervisor curl

# Configure nginx
COPY templates/nginx.conf /etc/nginx/nginx.conf

# Remove default server definition
RUN rm /etc/nginx/conf.d/default.conf

# Configure PHP-FPM
COPY templates/fpm-pool.conf /etc/php7/php-fpm.d/www.conf
COPY templates/php.ini /etc/php7/conf.d/custom.ini

# Configure supervisord
COPY templates/supervisord.conf /etc/supervisor/conf.d/supervisord.conf

# Make sure files/folders needed by the processes are accessable when they run under the nobody user
RUN mkdir -p /var/tmp/nginx /var/log/nginx
RUN chown -R nobody.nobody /run && \
  chown -R nobody.nobody /var/lib/nginx && \
  chown -R nobody.nobody /var/tmp/nginx && \
  chown -R nobody.nobody /var/log/nginx

# Setup document root
RUN mkdir -p /var/www/html

# Make the document root a volume
VOLUME /var/www/html

# Switch to use a non-root user from here on
USER nobody

# Add xenforo requirements script
WORKDIR /var/www/html
COPY --chown=nobody templates/xenforo_requirements.php /var/www/html/index.php

# Expose the port nginx is reachable on
EXPOSE 8080

# Let supervisord start nginx & php-fpm
CMD ["/usr/bin/supervisord", "-c", "/etc/supervisor/conf.d/supervisord.conf"]

# Configure a healthcheck to validate that everything is up&running
HEALTHCHECK --timeout=10s CMD curl --silent --fail http://127.0.0.1:8080/fpm-ping
