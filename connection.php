<?php
    
    class BD{

    private static $instance = null;

    public static function createInstance(){
        if ( !isset( self::$instance )) {
            $opcPDO[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            self::$instance = new PDO('mysql:host=localhost;dbname=employees', 'root', 'Cxu2013', $opcPDO);
            echo "Successful Connection";
        }
        return self::$instance;
    }

    

    }
 
 
 
 ?>