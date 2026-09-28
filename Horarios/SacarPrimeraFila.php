<?php 
require 'configdb.php';
    $conexion = new mysqli($SERVIDOR, $USUARIO, $CONTRASEÑA, $BASEDEDATOS);
    $consulta = "select * from asignatura";
    $resultado = $conexion->query($consulta);
    $fila = $resultado ->fetch_array();
    echo $fila['idAsignatura'].'<br>';
    echo $fila['nombre'].'<br>';
    echo $fila['color'].'<br>';

    echo '<br><br>';

    $fila = $resultado ->fetch_array();
    echo $fila['idAsignatura'].'<br>';
    echo $fila['nombre'].'<br>';
    echo $fila['color'].'<br>';

    $conexion->close();
?>