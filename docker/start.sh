#Establece "/var/www/html/public" como directorio público de apache
/usr/bin/find /etc/apache2/ -type f -exec grep -l "/var/www/html" {} \; | xargs -i sed -i "s/\/var\/www\/html/\/var\/www\/html\/public/g" {}

#Inicia servicios
/etc/init.d/apache2 start;
/etc/init.d/mysql start;

#Lanza una shell bash
/bin/bash;

#Evita la parada del contenedor
sleep infinity;