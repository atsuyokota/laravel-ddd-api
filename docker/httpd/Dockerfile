FROM amazonlinux:2

RUN yum update -y \
    && amazon-linux-extras install php7.3 \
    && yum install -y php php-cli php-common php-devel php-fpm php-gd php-json php-mbstring php-pear php-opcache phpunit yum install php-zip \
    && yum install -y curl libxml2 libxml2-devel zlib-devel \
    && yum install -y httpd \
    && yum install -y gcc \
    && yum install -y gcc-c++ \
    && yum install -y make \
    && yum install -y vim \
    && yum install -y zip unzip \
    && yum install -y git

# composer
RUN curl -sS https://getcomposer.org/installer | php
RUN mv composer.phar /usr/local/bin/composer
RUN composer self-update

# Laravel
RUN composer global require laravel/installer

WORKDIR /var/www/html

EXPOSE 80

ENTRYPOINT ["/usr/sbin/httpd", "-D", "FOREGROUND"]
