<?php
    
    //! El archivo de rutas nos da acceso a los controladores de la vista

include_once("controllers/pages_controllers.php");

$controller = new PagesControllers();
$controller->home();
 
 
 ?>
