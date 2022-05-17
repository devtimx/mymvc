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

```
project
| README.m
|
|__app
|  |__Controllers
|     | MainController.php
|  |__Models
|  |__views
|     |__layout
|        | header.php
|        | footer.php
|     |__main
|        | index.php
|
|__core
|  | app.php
|  | autoload.php
|  | Response.php
|  | Route.php
|  | Router.php
|
|__database
|  | db.sql
|
|__public
|  |__assets
|     |__css
|     | style.css
|     |__js
|     | scritps.js
|  | .htaccess
|  | index.php
|
|__router
|  | routes.php
|
|__storage