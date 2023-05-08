<?php
class Conexion{

    private static $db = null;
     private function __construct(){
    }


    public static function getInstance(){
        if(is_null(self::$db)){
           
            self::$db = new PDO('mysql:host='.Configuracion::DB_HOST.';dbname='.Configuracion::DB_NAME.';charset=utf8', Configuracion::DB_USER, Configuracion::DB_PASSWORD);
           
        }
        return self::$db;
    }
    public static function close()
    {
        self::$db = null;
    }
}








?>