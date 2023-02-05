<?php

$controller = "pages";
$action = "home";

    //* Validacion para redireccion de las rutas 
    if( isset($_GET['controller']) && isset($_GET['action'])  ){
        
        if( ($_GET['controller'] != "") && ($_GET['action'] != "") ){
            $controller = $_GET['controller'];
            $action = $_GET['action'];
        }



    // print_r($_GET);

    // print_r($controller);
    // print_r($action);

    }

    include_once("views/template.php")
 
 
 ?>