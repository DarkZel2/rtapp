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
        echo '<script>window.location.href = "http://localhost/rtapp/code/app/admin.php"</script>';
    } else {
        if ($results['user_mail'] == $mail && $results['user_pass'] == $pass) {
            $_SESSION['user_id'] = $results['user_id'];
            echo '<script>window.location.href = "http://localhost/rtapp/code/app/user.php"</script>';
        } else {
            echo '<script>alert("Error de usuario");</script>';
            echo '<script>window.location.href = "http://localhost/rtapp/code/app/login.php"</script>';
        }
    }
}