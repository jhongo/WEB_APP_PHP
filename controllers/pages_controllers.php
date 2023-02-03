











<?php
    
    //? Clase para acceder a las vistas desde el controlador 
    class PagesControllers{

        //* Metodos para acceder a las paginas 
        public function home(){
        include_once('views/pages/inicio.php');
        }

        public function error(){
        include_once('views/pages/error.php');
        }


    }
 
 
 
 ?>

















