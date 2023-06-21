# Web Development

## Running

    docker run -ti \
    -p 8000:80 \
    --name php_server_ed \
    -v `pwd`/public_html/:/var/www/html \
    php:7.4-apache

Visit <http://localhost:8000/website/index.html>