<?php
$idFecha = $_GET['idFecha'];
$estado = $_GET['estado'];
$idTarea = $_GET['idTarea'];

include "servidor.php";
$conexion = conexion();

$sql = "UPDATE t_tareas SET estado = '$estado' WHERE id_tarea ='$idTarea'";
$respuesta = mysqli_query($conexion, $sql);

if ($respuesta) {
    $link = "servidor.php?idFecha=" . $idFecha;
    header("location:" . $link);
} else {
    echo "No pudo actualisar, por tu culpa!!!";
}

?>