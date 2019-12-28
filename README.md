# Docker / Podman PHP-FPM 7.4 & Nginx 1.17 on Alpine Linux

PHP-FPM 7.4 & Nginx 1.17 setup for Docker, build on [Alpine Linux](http://www.alpinelinux.org/).
The image is only +/- 35MB large.

- Why is port 8080 used in the container ?
  - Due to the reservation of ports < 1024 for root users we have no other option than using ports > 1023 for services running as nobody
- Built on the lightweight and secure Alpine Linux distribution
- Very small Docker image size (+/-35MB)
- Uses PHP 7.4 for better performance, lower cpu usage & memory footprint
- Optimized for 100 concurrent users
- Optimized to only use resources when there's traffic (by using PHP-FPM's ondemand PM)
- The servers Nginx, PHP-FPM and supervisord run under a non-privileged user (nobody) to make it more secure
- The logs of all the services are redirected to the output of the Docker container (visible with `docker logs -f <container name>`)
- Follows the KISS principle (Keep It Simple, Stupid) to make it easy to understand and adjust the image to your needs

## Usage

Start the Docker container:

    docker run -p 80:8080 s0pex/alpine-nginx-php7

See the PHP info on http://localhost

Or mount your own code to be served by PHP-FPM & Nginx

    docker run -p 80:8080 -v ~/www:/var/www/html s0pex/alpine-nginx-php7

## Configuration

In [templates/](templates/) you'll find the default configuration files for Nginx, PHP and PHP-FPM.
If you want to extend or customize that you can do so by mounting a configuration file in the correct folder;

Nginx configuration:

    docker run -v "`pwd`/nginx-server.conf:/etc/nginx/conf.d/server.conf" s0pex/alpine-nginx-php7

PHP configuration:

    docker run -v "`pwd`/php-setting.ini:/etc/php7/conf.d/settings.ini" s0pex/alpine-nginx-php7

PHP-FPM configuration:

    docker run -v "`pwd`/php-fpm-settings.conf:/etc/php7/php-fpm.d/server.conf" s0pex/alpine-nginx-php7

_Note; Because `-v` requires an absolute path I've added `pwd` in the example to return the absolute path to the current directory_
