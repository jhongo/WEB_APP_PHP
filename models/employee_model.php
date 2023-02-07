<?php
 
    
 class EmployeeModel{

    public static function createEmployee($name,$lastname,$phone,$email){

        $connection = BD::createInstance();

        $sql = $connection->prepare("INSERT INTO employees(name_employee,lastname_employee,phone,email) VALUES(?,?,?,?)");
        $sql->execute(array($name, $lastname, $phone, $email));

    }

 }
    
 
 
 ?>