# Iniciar el contenedor "aula" para el proyecto:
	docker run -v /home/copeito/Projects/aula/laravel/:/var/www/html -p 80:80 -it aula

	docker run -v /home/copeito/Projects/aula/laravel/public/:/var/www/html -p 80:80 -it aula /bin/bash

# Permisos a ficheros y directorios 
	# Todo el actual contenido del directorio laravel tiene a www-data como grupo
	sudo chgrp www-data -R laravel/
	# Todo el futuro contenido del directorio laravel tiene a www-data como grupo (hereda el grupo del directorio laravel, que es www-data)
	chmod g+s laravel/
	# Al grupo asociado se le añaden permisos de escritura y ejecución
	sudo chmod g+wx -R laravel/

# Instalado módulo de autenticación de Laravel
	php artisan make:auth
	php artisan migrate

# Instalación de spatie/laravel-permission, que complementa al módulo de autenticación de Laravel añadiéndole roles.
	composer require spatie/laravel-permission
	php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider" --tag="migrations"
	php artisan migrate
	php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider" --tag="config"
