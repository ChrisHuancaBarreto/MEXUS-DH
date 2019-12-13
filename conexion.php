<?php 

class Conexion {
    public static function conectar(){

         $dsn = 'mysql:host=localhost;dbname=mexus;port=3306';
         $db_user='root';
         $db_pass='';

        try {
            $conexion = new PDO ($dsn,$db_user,$db_pass);
            return $conexion;
        } catch (PDOException $prueba_error) {
            echo "Error: " . $prueba_error->getMessage();

        }
    }
}
