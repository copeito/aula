LARAPATH=`/bin/readlink -f ../laravel`
docker run -v $LARAPATH/:/var/www/html -p 80:80 -p 3306:3306 -it aula
