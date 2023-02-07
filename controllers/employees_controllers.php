<?php

include_once("connection.php");
BD::createInstance();
    
    class EmployeesControllers{

        public function read(){
        include_once("views/employees/read.php");
        }
        public function create(){
        
        if ($_POST) {
            print_r($_POST);
        }

        include_once("views/employees/create.php");

        }
        public function edit(){
        include_once("views/employees/edit.php");

        }




    }
 
 
 
 ?>