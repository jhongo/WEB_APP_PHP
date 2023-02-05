<?php

// echo 'Controller'. $controller . '<br>';
// echo 'Action'. $action;
    
//! El archivo de rutas nos da acceso a los controladores de la vista y ciertas acciones
include_once("controllers/".$controller."_controllers.php");

$objController = ucfirst($controller)."Controllers";

$controller = new $objController();
$controller->$action();
 
 
 ?>
