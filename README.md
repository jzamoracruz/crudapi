LENGUAJES QUE SE USARON: PHP, Laravel 8, HTML, Un poco de css, extenciones de vuetify y un poco de javascript.

Programas recomendados para abrir el proyecto: Visual Studio Code, Postman, xammp.

1. Se debe descargar el proyecto.
2. Se debe descargar el framework de Laravel (composer global require "laravel/installer)
3. Se debe ubicar el proyecto en un lugar visible para luego entrar desde consola o en su defecto terminal de visual estudio.
4. Para este programa se uso xammp para la creacion de base de datos, se debe crear una base de datos llamada laravel.
5. Se debe migrar la base de datos desde la terminal o consola (php artisan migrate)
6. Se inicia el server con php artisan serve, luego se copia el link que aparezca de servidor y se debe pegar en el postman, que es en donde se visualizara el JSON. (http://127.0.0.1:8000/api/products/)
7.Una vez dentro del postman y con el debido link del API pegado, debemos hacer un GET para que cargue el API, luego de eso, podemos cargar datos bien sea desde postman seleccionando la opcion POST y suguiendo la estructura del JSON o desde el index que estare anexando.
8. Se debe abrir el HTML, el cual es un tipo CRUD en donde pedira ciertos datos los cuales cargaran automaticamente al API, esto se podrá visualizar desde postman o en su defecto desde la base de datos.