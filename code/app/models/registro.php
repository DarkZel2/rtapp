<?php
include ('./conection.php');
$con = connection();

$id = null;
$name = $_POST['nombre'];
$lastname = $_POST['apellido'];
$phone = $_POST['telefono'];
$mail = $_POST['correo'];
$pass = $_POST['contraseña'];

$insert = "INSERT INTO registro (user_id, user_name, user_lastname, user_phone, user_mail, user_pass) VALUES ('$id', '$name', '$lastname', '$phone', '$mail', '$pass')";

$query = mysqli_query($con, $insert);

if($query){
    Header("Location: http://localhost/rtapp/code/app/login.php");
};

