WWW=$(readlink -f `dirname $0` | sed "s/\/bin$/\/laravel/")
docker run -v $WWW:/var/www/html -p 80:80 -p 3306:3306 -it aula

