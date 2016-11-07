<?php

class Connection {

    private static $connection;

    public static function OpenConnection() {
        if (!isset(self::$connection)) {
            try {
                include_once 'config.inc.php';
                self::$connection = new PDO("mysql:host=$NombreServidor;dbname=$BaseDeDatos",$NombreUsuario,$Password);
                self::$connection -> setAttribute(PDO::ATT_ERRMODE,PDO::ERRMODE_EXCEPTION);
                self::$connection -> exec("SET CHARACTER SET utf8");
                        
            } catch (Exception $ex) {
                print "ERROR:" . $ex -> getMessage(). "<br>";
                die();
            }
        }
    }

    public static function CloseConnection() {
        if (isset(self::$connection)) {
            self::$connection = null;
        }
    }

    public static function GetConnection()
    {
        return self::$connection;
    }
}
