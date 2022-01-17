# Configuración del examen practico.

La aplicación es un sitio web con las siguientes características

- Permite crear cuentas de usuario y hacer login
- Los usuarios logueados pueden agregar, editar y eliminar sus propiedades ingresadas
- Las propiedades además de su información básica, permite subir imágenes y configurar amenidades.
- Todos los usuarios pueden ver el listado de todas las propiedades ingresadas por todos los usuarios.
- Todos los usuarios pueden ver una ficha detallada de cada una de las propiedades.

## Características técnicas

- El proyecto fue construido con PHP y Laravel en su versión 8.79.0
- Se utilizó un servidor de mysql, el proyecto proportciona un archivo docker-compose.yml en la raíz del proyecto para levantar una instancia para el desarrollo

## Instancia de MySql

Asegúrese de tener instalado Docker y Docker-compose

- https://www.docker.com/get-started

Colóquese dentro de la carpeta raíz del proyecto e inicie una instancia de mysql

    docker-compose up -d

Automáticamente se crea una instancia con una base de datos y el usuario que requiere para configurar el proyecto web
configure los siguientes valores en el archivo de variables de ambiente para el proyecto de laravel

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=Testing_fullstack
    DB_USERNAME=propiedades_user
    DB_PASSWORD=r210U8Zv

## Respaldo de la estructura de la base de datos

En la raiz del proyecto en la carpera 'bd' puede encontrar un archivo con la estructura de la base de datos.

    bd/query.sql

## Aplicación web

Para iniciar el proyecto asegúrese de tener instalado PHP >= 7.2.5 y composer

Instalar PHP

https://www.php.net/manual/es/install.php

Instalar php en macos

https://formulae.brew.sh/formula/php

Instalar composer

https://getcomposer.org/doc/00-intro.md#installation-linux-unix-macos

## Configuración de la aplicación web

Colóquese dentro de la carpeta 'web' e instale las dependencias

    php composer.phar install
    
    npm install

    npm run dev

    php artisan migrate

Configure la conexión a la base de datos en el archivo .env

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=Testing_fullstack
    DB_USERNAME=propiedades_user
    DB_PASSWORD=r210U8Zv

Configure un valor para la api key de google maps

    GOOGLE_API_KEY=#############

Inicie el servidor de pruebas

    php artisan serve

Acceda a la aplicación en la siguiente url

    http://localhost:8000/

## Características que quedaron pendientes de desarrollo

- Quedó pendiente la opción para descargar fotos de instagram
- Quedo pendiente el mapa con las ubicaciones de las propiedades registradas