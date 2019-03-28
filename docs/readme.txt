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

# Añadidos ficheros de traducción al Castellano de mensajes propios de Laravel
	composer require laraveles/spanish
	php artisan vendor:publish --tag=lang

	Cambiado fichero config/app.php para que cargue el idioma Español por defecto 
		'locale' => 'es',

# Paquetes instalables desde Composer y autoinstalables con el proyecto Aula:
	trait getInstance, class PropertyManager, class Grid

	Creadas rutas correspondientes siguientes:
		aula/laravel/vendor/copeito/getinstance
		aula/laravel/vendor/copeito/grid
		aula/laravel/vendor/copeito/propertymanager

	Estas rutas tienen el mismo contenido que los paquetes correspondientes en Github, así:
		El contenido de aula/laravel/vendor/copeito/grid es el mismo que https://github.com/copeito/grid

	En aula/laravel/composer.json, ha sido necesario añadir en el "require" una referencia al paquete Grid. Así mismo, 
	debido a que Grid depende de propertyManager y éste, a su vez, depende de getInstance no ha sido necesario añadir 
	referencias a estos paquetes en aula/laravel/composer.json, sinó que en su lugar se refiere propertyManager desde 
	aula/laravel/vendor/copeito/grid/composer.json y, a su vez, a getInstance desde aula/laravel/vendor/copeito/propertymanager/composer.json

	Para que composer cargue los paquetes getInstance, PropertyManager y Grid, ha sido necesario cargar referencias a 
	sus repositorios GitHub correspondientes en https://packagist.org

	Así, Packagist hace de intermediario entre composer y GitHub
	
	
