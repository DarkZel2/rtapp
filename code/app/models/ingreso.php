<?php

session_start();

include ('./conection.php');
$con = connection();

$mail = $_POST['correo'];
$pass = $_POST['contraseña'];


if (!empty($mail) && !empty($pass)) {
    $records = $con-> prepare('SELECT user_id, user_mail, user_pass FROM registro WHERE user_mail =:email');
    $records->bindParam(':email', $mail);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if (count($results) > 0 && password_verify($pass, $results['user_pass'])) {
        $_SESSION['user_id'] = $results['user_id'];
        header('Location: ');
    } else {
        $message = 'La informacion es incorrecta';
    }
}