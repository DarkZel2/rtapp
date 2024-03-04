<?php

include ('conection.php');

if ($conexion->connect_errno) {
    die('Lo siento hubo un problema con el servidor');
} else {
    $sql = "INSERT INTO registro(ID, nombre, edad) VALUES(null, 'Kely', 29)";
    $conexion->query($sql);
    if ($conexion->affected_rows >= 1) {
        echo 'Filas agregadas: ' . $conexion->affected_rows;
    }
}