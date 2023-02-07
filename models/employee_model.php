<?php
 
    
 class EmployeeModel{


    public $id;
    public $name;
    public $lastname;
    public $phone;
    public $email;

    public function __construct($id,$name,$lastname,$phone,$email){

        $this->id = $id;
        $this->name = $name;
        $this->lastname = $lastname; 
        $this->phone = $phone;
        $this->email = $email;

    }

    public static function readEmployees(){

        $listEmployees = [];
        $connection = BD::createInstance();
        $sql = $connection->query("SELECT * FROM employees");

        foreach($sql->fetchAll() as $employee ){
            $listEmployees[] = new EmployeeModel($employee['id'], $employee['name_employee'], $employee['lastname_employee'], $employee['phone'], $employee['email']);
        }

        return $listEmployees;
        


    }


    public static function createEmployee($name,$lastname,$phone,$email){

        $connection = BD::createInstance();

        $sql = $connection->prepare("INSERT INTO employees(name_employee,lastname_employee,phone,email) VALUES(?,?,?,?)");
        $sql->execute(array($name, $lastname, $phone, $email));

    }

    public static function deleteEmployee($id){
        $connection = BD::createInstance();
        $sql = $connection->prepare("DELETE FROM employees WHERE id=?");
        $sql->execute(array($id));

    }
    public static function searchEmployee($id){
        $connection = BD::createInstance();
        $sql = $connection->prepare("SELECT * FROM employees WHERE id=?");
        $sql->execute(array($id));
        $employee = $sql->fetch();

        return new EmployeeModel($employee['id'], $employee['name_employee'], $employee['lastname_employee'], $employee['phone'], $employee['email']);
    }


    public static function updateEmployee($id, $name,$lastname,$phone,$email){

        $connection = BD::createInstance();

        $sql = $connection->prepare("UPDATE employees SET name_employee=?,lastname_employee=?,phone=?,email=? WHERE id=?");
        $sql->execute(array($name, $lastname, $phone, $email, $id));

    }


 }
    
 
 
 ?>