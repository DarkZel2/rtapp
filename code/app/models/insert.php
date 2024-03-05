<?php

include ('conection.php');

if ($conexion->connect_errno) {
    die('Lo siento hubo un problema con el servidor');
} else {
    $sql = "INSERT INTO registro(user_id, user_name, user_lastname, ) VALUES(null,)";
    $conexion->query($sql);
    if ($conexion->affected_rows >= 1) {
        echo 'Filas agregadas: ' . $conexion->affected_rows;
    }
}