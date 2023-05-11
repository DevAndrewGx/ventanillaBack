<?php
    // Creamos la clase conexion para conectar con la base de datos
    class Conexion {
        function get_conexion() {
            // Creamos las variales necesarias para hacer la conexion
            $user = "root";
            $password = "";
            $host = "localhost";
            $db = "ventanilla";

            // Creamos una instancia de PDO para hacer conexion

            $conexion = new PDO("mysql:host=$host;dbname=$db;",$user,$password);

            // Retornamos la conexion
            return $conexion;
        }
    }
?>

