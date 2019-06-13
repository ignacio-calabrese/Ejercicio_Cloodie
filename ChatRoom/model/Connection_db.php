<?php 
    require ("config.php");
    
    class Connection_db {
        public static function  connect() {
            try {
                $connDB = new PDO("mysql:host=". DB_HOST . "; dbname=" . DB_NAME, DB_USER, DB_PASSWORD);            
                $connDB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $connDB->exec("SET CHARACTER SET " . DB_CHARSET);
                return $connDB;
            } catch (PDOException $e) {
                die('Falló la conexión: ' . $e->getMessage() . "<br> Archivo: " . $e->getFile() . "<br> Línea: " . $e->getLine());
            } 
        }
    }
?>