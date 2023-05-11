<?php
    class Consultas { 
        // Creamos una funcion para hacer las consultas
        function registrarConsulta($codigo_tramite, $tipo_tramite, $numero_docum, $apellidos, $nombres, $correo, $telefono, $EPS, $direccion, $estado) {
            // creamos el objeto conexino con la base de datos
            $objConexion = new Conexion();
            $conexion = $objConexion -> get_conexion();

            // Creamos la consulta que se quiere realizar
            $registrar = "INSERT INTO tramites (codigo_tramite, tipo_tramite, numero_docum, apellidos, nombres, correo, telefono, EPS, direccion, estado) VALUES (:codigo_tramite, :tipo_tramite, :numero_docum, :apellidos, :nombres, :correo, :telefono, :EPS, :direccion, :estado)";

            // Creamos la variable statement para prepara y ejecutar la consulta

            $statement = $conexion -> prepare($registrar);

            // Pasamos los parametros para la consulta para evitar SQL INJECTION

            $statement -> bindParam(":codigo_tramite",$codigo_tramite);
            $statement -> bindParam(":tipo_tramite",$tipo_tramite);
            $statement -> bindParam(":numero_docum",$numero_docum);
            $statement -> bindParam(":apellidos",$apellidos);
            $statement -> bindParam(":nombres",$nombres);
            $statement -> bindParam(":correo",$correo);
            $statement -> bindParam(":telefono",$telefono);
            $statement -> bindParam(":EPS",$EPS);
            $statement -> bindParam(":direccion",$direccion);
            $statement -> bindParam(":estado",$estado);

            $statement -> execute();

            echo '<script>alert("Registro exitoso")</script>';
            echo "<script>href.location=../Views/index.php</script>";
        }

        // Creamos una funcion para traer los datos

        function cargarRegistros() {
            // creamos el objeto conexino con la base de datos
            $rows = null;
            $objConexion = new Conexion();
            $conexion = $objConexion -> get_conexion();

            $cargar = "SELECT * FROM tramites";

            $statement = $conexion -> prepare($cargar);
            
            // Ejecutamos statement
            $statement->execute();

            // traemos la data de la base de datos con fetch en un array

            while($response = $statement->fetch()) {
               $rows[] = $response; 
            }

            // retornamos los datos en el arreglo
            return $rows;
        }

        // Creamos una funcion para eliminar datos

        function eliminarRegistro($codigo_tramite) {
            $objConexion = new Conexion();
            $conexion = $objConexion -> get_conexion();

            // creamos la consulta sql
            $eliminar = "DELETE FROM tramites WHERE codigo_tramite = :codigo_tramite";
            
            // Ejecutamos, y pasamos parametros a statement
            $statement = $conexino -> get_conexion($eliminar);

            $statement ->bindParam(":codigo_tramite",$codigo_tramite);

            // ejecutamos la consulta

            $statement -> execute();

            echo '<script>alert("Registro Eliminado Exitosamente")</script>';
            echo "<script>href.location(../Views/index.php)</script>";
        }

        function modificarCampos($campo, $valor, $codigo) {
            $objConexion = new Conexion();
            $conexion = $objConexion -> get_conexion();

            // creamos la consulta sql
            $actualiza = "UPDATE tramites SET :campo = $valor  WHERE codigo_tramite = :codigo";
            
            $statement = $conexino -> get_conexion($actualiza);

            $statement ->bindParam(":campo",$campo);
            $statement ->bindParam(":codigo",$codigo);
            
            $statement -> execute();

            echo '<script>alert("Actualizado Correctamente")</script>';

        }
    }
?>