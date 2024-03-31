<?php

session_start();

include ('conection.php');
$mail = $_POST['correo'];
$pass = $_POST['pass'];

if (!empty($mail) && !empty($pass)) {
    $records = $con->prepare("SELECT user_id, user_mail, user_pass FROM registro WHERE user_mail = '$mail'");
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    if ($mail == 'admin@boss' && $pass == 'admin123') {
        header('Location: ../admin.php');
    } else {
        if ($results) {
            $_SESSION['user_id'] = $results['user_id'];
            header('Location: ../user.php');
        } else {
            $message = 'La informacion es incorrecta';
        }
    }
}