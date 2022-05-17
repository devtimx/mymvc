<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
require '../core/app.php';
require '../core/Router.php';
require '../core/Route.php';

session_start();

$router = new Router($_SERVER['REQUEST_URI']);
require '../core/autoload.php';
require '../app/views/layout/header.php';
require '../routes/routes.php';


$router->run();
require '../app/views/layout/footer.php';