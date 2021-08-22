FROM ubuntu:20.04

MAINTAINER jhyeon <stjhyeon@kakao.com>

ENV DEBIAN_FRONTEND=noninteractive

RUN apt-get clean
RUN apt-get update -y
RUN apt-get install apache2 -y
RUN apt-get install php php-mysqli php-gd php-mbstring -y
RUN apt-get install libapache2-mod-php -y

COPY ./apache2.conf /etc/apache2/apache2.conf
COPY ./flag /tmp

ENV APACHE_RUN_USER www-data
ENV APACHE_RUN_GROUP www-data

EXPOSE 80

CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]