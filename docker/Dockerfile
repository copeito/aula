FROM debian:9
MAINTAINER copeito@gmail.com
LABEL Description="Aula"

RUN apt-get update
RUN apt-get upgrade -y

#Instalación de php7.2
RUN apt-get install -y apt-transport-https lsb-release ca-certificates wget
RUN wget -O /etc/apt/trusted.gpg.d/php.gpg https://packages.sury.org/php/apt.gpg
RUN sh -c 'echo "deb https://packages.sury.org/php/ $(lsb_release -sc) main" > /etc/apt/sources.list.d/php.list'
RUN apt update
RUN apt-get install -y php

#Apache2
RUN apt-get install -y apache2 libapache2-mod-php

#Mysql
RUN apt-get install -y mariadb-common mariadb-server mariadb-client 

ADD start.sh /start.sh

ENV APACHE_RUN_USER www-data
ENV APACHE_RUN_GROUP www-data
ENV APACHE_LOG_DIR /var/log/apache2
ENV APACHE_LOCK_DIR /var/lock/apache2
ENV APACHE_PID_FILE /var/run/apache2.pid

EXPOSE 80

CMD "/start.sh"
