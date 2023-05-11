<?php
     require_once("../Models/Conexion.php");
     require_once("../Models/Consultas.php");


     // Creamos un objeto de tipo consulta
     $messaje = null;
     $consultas = new Consultas();
     $codigo = $_GET('codigo_tramite');

     $messaje = $consultas -> eliminarRegistro($codigo);

     echo $messaje;
?>