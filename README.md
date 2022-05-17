# Modelo base MVC php nativo con rutas amigables

### Para el correcto funcionamiento es necesario crear un host virtual en el servidor web de su preferencia

- Editar el archivo de configuración app.php ubicado en el directorio core
 ```php
 define("URL_BASE", "http://poner_dirección_de_host_virtual");
 ```

### Para agregar nuevas rutas editaremos el archivo routes.php ubicado en el directorio routes

- Formas de declarar las rutas
``` php
$router->add('/', function ()
{
	return '<h1>Home</h1>';
});

$router->add('/',array(new MainController(),'index'));
```
- Es posible recibir rutas con parámetros
```php
$router->add('/home/:name',array(new MainController(),'index'));
```
### Árbol de directorios sugeridos

``` tree
Project
├── app
│   ├── Controllers
│   │   └── MainController.php
│   ├── Models
│   └── views
│       ├── layout
│       │   ├── footer.php
│       │   └── header.php
│       └── main
│           └── index.php
├── core
│   ├── app.php
│   ├── autoload.php
│   ├── Response.php
│   ├── Route.php
│   └── Router.php
├── database
│   └── db.sql
├── public
│   ├── assets
│   │   ├── css
│   │   │   └── styles.css
│   │   └── js
│   │       └── scripts.css
│   ├── .htaccess
│   └── index.php
├── README.md
├── routes
│   └── routes.php
└── storage
```