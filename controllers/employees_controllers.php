<?php

include_once("models/employee_model.php");

include_once("connection.php");
BD::createInstance();
    
    class EmployeesControllers{

        public function read(){
        include_once("views/employees/read.php");
        }
        public function create(){
        
        if ($_POST) {
            print_r($_POST);
            $name = $_POST['inp-name'];
            $lastname = $_POST['inp-lastname'];
            $phone = $_POST['inp-phone'];
            $email = $_POST['inp-email'];

            EmployeeModel::createEmployee($name, $lastname, $phone, $email);

        }

        include_once("views/employees/create.php");

        }
        public function edit(){
        include_once("views/employees/edit.php");

        }




    }
 
 
 
 ?>