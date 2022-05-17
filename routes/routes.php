<?php

/*$router->add('/', function ()
{
	return '<h1>Home</h1>';
});*/
$router->add('/',array(new MainController(),'index'));