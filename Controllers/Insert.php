<?php
    // Importamos nuestras dependecias
    require_once("../Models/Conexion.php");
    require_once("../Models/Consultas.php");
    
    // Creamos un objeto de tipo consulta
    $consultas = new Consultas();

    // Recuperamos la data del formulario

    $codigo_tramite = $_POST['codigo'];
    $tipo = $_POST['tipo'];
    $documento = $_POST['documento'];
    $apellidos = $_POST['apellidos'];
    $nombres = $_POST['nombres'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $EPS = $_POST['eps'];
    $direccion = $_POST['direccion'];
    $estado = "EN PROCESO";

    // Llamamos la consulta con los parametros necesarios

    $result = $consultas -> registrarConsulta($codigo_tramite, $tipo, $documento, $apellidos, $nombres, $correo, $telefono, $EPS, $direccion, $estado);



?>