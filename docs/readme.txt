Iniciar el contenedor "aula" para el proyecto:
docker run -v /home/copeito/Projects/aula/laravel/:/var/www/html -p 80:80 -it aula

docker run -v /home/copeito/Projects/aula/laravel/public/:/var/www/html -p 80:80 -it aula /bin/bash
