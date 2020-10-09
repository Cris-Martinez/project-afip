
# Backend API
Esta proyecto esta basado en la version 5.7 de Laravel Framework. Tambien posee soporte para Modulos, lo cual nos permite dividir el codigo fuente en unidades reutilizables en otros proyectos.

## Features

- Autenticacion via JWT [[Ver plugin en github](https://github.com/tymondesigns/jwt-auth "Ver plugin en github")]
- Manejo de permisos por usuario
- Migrations [heredado de laravel]
- Seeders [heredado de laravel]
- Modules [[Ver pagina del plugin](https://nwidart.com/laravel-modules/v4/introduction "ver autor del plugin")]
- Busqueda generica de Entidades ( ver ejemplos de Postman )

## Instalacion

Para instalar y dejar funcionando este proyecto se deberan cumplir los siguientes requerimientos basicos :
   - PHP >= 7.1.3
   - Mysql
   - Driver de Mysql para PHP
   - Composer [[Pagina de Download](https://getcomposer.org/download/ "Pagina de Download")]

**Nota**: Para los usuarios de *vagrant*  existe un container con todas las dependencias instaladas listo para usar, se lo puede chequear [aqui](https://laravel.com/docs/5.7/homestead "aqui")
## Clonar el proyecto
Para clonar el proyecto basta con hacer un git clone como el siguiente:

`git clone  git@gitlab.com:b12/semillas/react-backend-starter.git`

Recuerde que este proyecto es una semilla, por lo cual deberia luego de clonar, **borrar la carpeta .git de la raiz del proyecto** y versionar el mismo en el proyecto que corresponda.

## Instalar dependencias

Luego de la instalacion hay que instalar las dependencias del proyecto, para ello corremos la siguiente linea en la raiz del proyecto:

`composer install`


Una vez instaladas las dependencias, renombramos el archivo **.env.example** a **.env** y lo modificamos con los siguientes datos:

`DB_CONNECTION=mysql`

`DB_HOST=127.0.0.1` <-- **servidor** donde corre mysql

`DB_PORT=3306` <-- **puerto** que usa mysql

`DB_DATABASE=react_backend_starter_db` <-- **nombre de la base de datos**

`DB_USERNAME=root` <-- **usuario** de mysql

`DB_PASSWORD=` <-- **password** de usuario de mysql


## Correr Migrations
Para la creacion de tablas en la base de datos corremos los migrations correspondientes, para ello usamos los migrations de cada modulo:

`php artisan module:migrate`

Para llenar las tablas con datos iniciales corremos los seeds de la siguiente manera:

`php artisan module:seed`


## Levantar servidor local para desarrollo

Laravel posee un servidor interno de prueba el cual usamos para desarrollo, en ambientes de produccion se reemplazara por un servidor "production ready" como Nginx o Apache.

Para correr el servidor local corremos el siguiente comando:

`php artisan serve`

Con estos pasos ya se estaria en condicion de empezar una nueva API. 

A trabajar!!