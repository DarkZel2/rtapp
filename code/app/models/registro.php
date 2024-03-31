<?php

include ('./conection.php');

$id = null;
$name = $_POST['nombre'];
$lastname = $_POST['apellido'];
$phone = $_POST['telefono'];
$mail = $_POST['correo'];
$pass = $_POST['pass'];

if (!empty($name) && !empty($lastname) && !empty($mail) && !empty($pass)) {
    $insert = "INSERT INTO registro (user_id, user_name, user_lastname, user_phone, user_mail, user_pass) VALUES ('$id', '$name', '$lastname', '$phone', '$mail', '$pass')";
    $query = $con->prepare($insert);

    if($query->execute()){
        header('Location: http://localhost/rtapp/code/app/login.php');
        echo '<script language="javascript">alert("Usuario creado");</script>';
    } else {
        echo '<script language="javascript">alert("Hubo un problema, vuelve a intentar");</script>';
    }
}