<?php  
function controllers_autoload($classname){
	include '../app/Controllers/' . $classname . '.php';
}
spl_autoload_register('controllers_autoload');