<?php

session_start();

include ('conection.php');

if (!empty($mail = $_POST['correo']) && !empty($pass = $_POST['contraseña'])) {
    $records = $con->prepare("SELECT user_id, user_mail, user_pass FROM registro WHERE user_mail = $mail");
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if (count($results) > 0 && password_verify($pass, $results['user_pass'])) {
        $_SESSION['user_id'] = $results['user_id'];
        header('Location: http://localhost/rtapp/code/app/user.php');
    } else {
        $message = 'La informacion es incorrecta';
    }
}