<?php 
    function conexion() {
        $servidor = "localhost";
        $usuario = "root";
        $password = "";
        $db = "sistemasweb";
        $conexion = mysqli_connect($servidor, $usuario, $password, $db);
        return $conexion;
    }

    // tareas
    $conexion = conexion();

    $sql = "SELECT id_tarea, id_fecha, tarea FROM t_tareas";
    $respuesta = mysqli_query($conexion, $sql);
    $idFecha = $_GET['idFecha'];

    $cadenaTabla1 ="";
    $cadenaTabla1 = $cadenaTabla1 . '<table border ="1" class="table">
                                            <thead>
                                            <th>Id</th>
                                            <th>tarea</th>
                                            <th>Estado</th>
                                                </thead>
                                                <tbody>';
    $contador = 1; 
    while($mostrar = mysqli_fetch_array($respuesta)) {  
    $cadenaTabla1 = $cadenaTabla1 .'<tr>
                                            <td>'. $contador ++ .'</td>
                                            <td>'. $mostrar['tarea'].'</td>
                                            <td>'.  $link = "cambiarEstado.php?idTarea=" . $mostrar['id_tarea'] . "&&idFecha=" . $idFecha . "&&estado=". '</td>
                                            </tr>';
    }
    $cadenaTabla1 =  $cadenaTabla1 . '</tbody></table>';

    $tituloDePagina1 = "<h2>Agregar listado de tareas</h2>";
    $descripcion1 = '<p>
                        Esta es una pagina de muestra para ver como obtener html dede php
                        para asi poder imprimir
                    </p> ';
    echo $tituloDePagina1 . $descripcion1 . $cadenaTabla1;
?>