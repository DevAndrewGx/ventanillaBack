<?php
    function seleccionar() {
        // Importamos nuestras dependecias
        require_once("../Models/Conexion.php");
        require_once("../Models/Consultas.php");
        
        // Creamos un objeto de tipo consulta
        $consultas = new Consultas();

        // gurdamos lo que retorna la consulta en filas para iterar con for
        $filas = $consultas -> cargarRegistros();
        $contador = 0;

        foreach($filas as $fila) {
            $contador++;
            if($contador == 1) {
                echo '
                <thead class="thead-ventanilla">
                    <tr>
                        <th scope="col">Código </th>
                        <th scope="col">Documento</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">Nombres</th>
                        <th scope="col">Trámite</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Eliminar</th>
                    </tr>
                </thead>';
            }
                
            echo '<tbody>
                    <tr>
                        <th scope="row" class="text-center">'.$fila['codigo_tramite'].'</th>
                        <td>'.$fila['numero_docum'].'</td>
                        <td>'.$fila['apellidos'].'</td>
                        <td>'.$fila['nombres'].'</td>
                        <td>'.$fila['tipo_tramite'].'</td>
                        <td>'.$fila['estado'].'.</td>
                        <td class="text-center"><a href="../Controllers/Actualizar.php?codigo_tramite='.$fila['codigo_tramite'].'"><i class="bi bi-pencil-square"></i></a></td>
                        <td class="text-center"><a href="../Controllers/eliminar.php?codigo_tramite='.$fila['codigo_tramite'].'"><i class="bi bi-trash-fill"></i></a></td>
                    </tr>
                </tbody>
            ';
        }
    }
?>