<?php
class Resgistrar {
    $name = $_POST["nombre"];
    $lastname = $_POST["apellido"];
    $phone = $_POST["telefono"];
    $mail = $_POST["correo"];
    $pass = $_POST["contraseña"];

    $ingreso = "INSERT TABLE registro (id=null, user_name, user_lastname, user_phone, user_email, user_pass) VALUES ($name, $lastname, $phone, $mail, $pass)"

    $resultado = mysql_query($connect, $ingreso);
    $filas = mysql_num_rows($resultado);

if ($filas) {
    include('../login.php')
    echo '<script>alert("Registro exitoso");</script>';
} else {
    include('../login.php');
    echo '<script>alert("Error al ingresar, intente nuevamente");</script>';
}
} 

?>