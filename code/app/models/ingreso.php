<?php
include ('./conection.php');
$con = connection();

$mail = $_POST['correo'];
$pass = $_POST['contraseña'];

$mysql = ""

$query = ($con, $mysql);

if ($query) {
    Header("Location: http://localhost/rtapp/code/app/user.php");
} else {
    Header("Location: http://localhost/rtapp/code/app/login.php");
}