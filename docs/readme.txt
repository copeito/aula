# Iniciar el contenedor "aula" para el proyecto:
docker run -v /home/copeito/Projects/aula/laravel/:/var/www/html -p 80:80 -it aula

docker run -v /home/copeito/Projects/aula/laravel/public/:/var/www/html -p 80:80 -it aula /bin/bash

# Permisos a ficheros y directorios
	sudo chgrp www-data -R laravel/
	sudo chmod g+wx -R laravel/
