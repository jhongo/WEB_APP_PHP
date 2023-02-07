<?php

include_once("models/employee_model.php");

include_once("connection.php");
BD::createInstance();
    
    class EmployeesControllers{

        public function read(){

        $employees =  EmployeeModel::readEmployees();
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
            header("location:?controller=employees&&action=read");

        }

        include_once("views/employees/create.php");

        }
        public function edit(){
            
        if($_POST){
            $id = $_POST['inp-id'];
            $name = $_POST['inp-name'];
            $lastname = $_POST['inp-lastname'];
            $phone = $_POST['inp-phone'];
            $email = $_POST['inp-email'];
            
            EmployeeModel::updateEmployee($id, $name, $lastname, $phone, $email);
            header("location:?controller=employees&&action=read");
        }


        
        $id = $_GET['id'];
        $employee = EmployeeModel::searchEmployee($id);

        include_once("views/employees/edit.php");

        }

        public function delete(){

        print_r($_GET);
        $id = $_GET['id'];

        EmployeeModel::deleteEmployee($id);
        header("location:?controller=employees&&action=read");
        }




    }
 
 
 
 ?>