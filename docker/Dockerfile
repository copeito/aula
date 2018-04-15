FROM debian:9
MAINTAINER copeito@gmail.com
LABEL Description="Aula"

RUN apt-get update --fix-missing
RUN apt-get upgrade -y

#Instalación de php7.2
RUN apt-get install -y apt-transport-https lsb-release ca-certificates wget
RUN wget -O /etc/apt/trusted.gpg.d/php.gpg https://packages.sury.org/php/apt.gpg
RUN sh -c 'echo "deb https://packages.sury.org/php/ $(lsb_release -sc) main" > /etc/apt/sources.list.d/php.list'
RUN apt update -y --fix-missing
RUN apt-get install -y php php-mysql php-mbstring php-zip php-gd php-imagick

#Instalación de herramientas auxiliares
RUN apt-get install -y nano

#Apache2
#instalación
RUN apt-get install -y apache2 libapache2-mod-php
#carga el módulo rewrite que permite el uso de friendly urls (y los routes de Laravel)
RUN a2enmod rewrite
#activa la lectura de los .htaccess por Apache2
RUN sed -i '/<Directory \/var\/www\/>/,/<\/Directory>/ s/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf
#establece "/var/www/html/public" como directorio público de apache
#RUN /usr/bin/find /etc/apache2/ -type f -exec grep -l "/var/www/html" {} \; | xargs -i sed -i "s/\/var\/www\/html/\/var\/www\/html\/public/g" {}

#Mysql
RUN apt-get install -y mariadb-common mariadb-server mariadb-client
#permite el acceso a mysql desde equipos remotos
RUN find /etc/mysql -type f -exec grep -El "^bind-address" {} \; | xargs -i sed -i "s/^bind-address/#bind-address/g" {} 

#Instala composer
RUN apt-get install -y composer

#Crea el usuario copeito (útil para ejecutar composer, puesto que no se permite el uso de root)
RUN useradd copeito -m -G www-data

ADD start.sh /start.sh

ENV APACHE_RUN_USER www-data
ENV APACHE_RUN_GROUP www-data
ENV APACHE_LOG_DIR /var/log/apache2
ENV APACHE_LOCK_DIR /var/lock/apache2
ENV APACHE_PID_FILE /var/run/apache2.pid

EXPOSE 80
EXPOSE 3306

CMD "/start.sh"
