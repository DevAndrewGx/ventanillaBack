<?php
    // Importamos nuestras dependecias
    require_once("../Models/Conexion.php");
    require_once("../Models/Consultas.php");
    
    // Creamos un objeto de tipo consulta
    $consultas = new Consultas();

    // Recuperamos la data del formulario

    $messaje = $consultas -> modificarCampos();
    $messaje = $consultas -> modificarCampos();
    $messaje = $consultas -> modificarCampos();
    $messaje = $consultas -> modificarCampos();
    $messaje = $consultas -> modificarCampos();

    // Llamamos la consulta con los parametros necesarios

    $result = $consultas -> registrarConsulta($codigo_tramite, $tipo, $documento, $apellidos, $nombres, $correo, $telefono, $EPS, $direccion, $estado);
