<?php

include ('./conection.php');

$id = null;
$name = $_POST['nombre'];
$lastname = $_POST['apellido'];
$phone = $_POST['telefono'];
$mail = $_POST['correo'];
$pass = $_POST['contraseña'];

if (!empty($name) && !empty($lastname) && !empty($mail) && !empty($pass)) {
    $insert = "INSERT INTO registro (user_id, user_name, user_lastname, user_phone, user_mail, user_pass) VALUES ('$id', '$name', '$lastname', '$phone', '$mail', '$pass')";
    $query = $con->prepare($insert);

    if($query->execute()){
    $message = 'Usuario corretamente creado.';
    } else {
        $message = 'Hubo un problema con la creacion de tu usuario, vuelve a intentar'
    }

}






