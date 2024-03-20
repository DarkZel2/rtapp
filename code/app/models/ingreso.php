<?php

session_start();

include ('conection.php');
$mail = $_POST['correo'];
$pass = $_POST['pass'];

if (!empty($mail) && !empty($pass)) {
    $records = $con->prepare("SELECT user_id, user_mail, user_pass FROM registro WHERE user_mail = '$mail' AND user_pass = '$pass'");
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if ($results) {
        $_SESSION['user_id'] = $results['user_id'];
        header('Location: ../user.php');
    } else {
        header('Location: ../login.php');
    }
}