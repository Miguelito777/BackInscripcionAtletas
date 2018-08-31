<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>


## Instalacion de proyecto Laravel

ejecutar todos los comandos sobre el directorio raiz de el proyecto

- <i><b>sudo chmod -R 755 storage  </b></i> Asignar permisos de escritura.
- <i><b>composer install           </b></i> Instalacion de dependencias ya asignadas en el archivo composer.json.
- <i><b>cp .env.example .env       </b></i> Creacion de archivo de configuracion para el proyecto.
- <i><b>php artisan key:generate   </b></i> Creacion de API KEY (si no se le proporciona una) caso contrario escribirla en el archivo <i>.env</i>.
- <i><b>php artisan migrate        </b></i> Ejecucion de la migracion.
- <i><b>php artisan migrate --seed </b></i> Si el proyecto utiliza seeders.
- <i><b>php artisan serve          </b></i> Compilar proyecto.


## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of any modern web application framework, making it a breeze to get started learning the framework.

If you're not in the mood to read, [Laracasts](https://laracasts.com) contains over 1100 video tutorials on a range of topics including Laravel, modern PHP, unit testing, JavaScript, and more. Boost the skill level of yourself and your entire team by digging into our comprehensive video library.
