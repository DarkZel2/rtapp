<?php

include ('conection.php');

if  ($conexion->connect_errno){ 
    die('Lo siento hubo un problema con el servidor');
} else {
    $sql = "SELECT * FROM registro";
    $resultado = $conexion->query($sql);// la conexion ejecute un SQL

    if ($resultado->num_rows) {// si hay resultados en la tabla
                    // arreglo convertido en cadena de texto
        while($fila = $resultado->fetch_assoc()){
            echo $fila['user_id'] . $fila['user_name'] . $fila['user_lastname'] . '<br />';
        }

    } else {
        echo 'No hay datos';
    }
}