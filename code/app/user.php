<?php

session_start();
include ('./models/conection.php');

if (isset($_SESSION['user_id'])) {
    $records = $con->prepare('SELECT user_id, user_name, user_phone, user_mail, user_pass FROM registro WHERE user_id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $users = null;

    if (count($results) > 0) {
        $users = $results;
    }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat+Brush&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/user.css">
    <link rel="website icon" type="png" href="img/RicaTorta ACTUALIZADO.png">
    <title>Mi cuenta</title>
</head>
<body>
    <nav class="menu">
        <section class="usuario">
            <i class="bi bi-person-circle"></i>
            <h1><?=$users['user_name']?></h1>
        </section>
        <ul class="nav-items">
            <a href="" id="1"><li>General</li></a>
            <a href="" id="2"><li>Datos Personales</li></a>
            <a href="" id="3"><li>Domicilio</li></a>
            <a href="" id="4"><li>Contraseña</li></a>
            <a href="" id="5"><li>Privacidad</li></a>
        </ul>
        <footer>
            <a href="index.php"><i><</i></a>
            <a href="./models/cerrar_sesion.php"><button>Cerrar Sesión</button></a>
        </footer>
    </nav>

    <article class="general" id="general">
        <h2>General</h2>
    </article>
    <article class="datos invisible" id="datos">
        <h2>Datos Personales</h2>
    </article>
    <article class="domicilio invisible" id="home">
        <h2>Domicilio</h2>
    </article>
    <article class="pass invisible" id="pass">
        <h2>Contraseña</h2>
    </article>
    <article class="priv invisible" id="priv">
        <h2>Privacidad</h2>
    </article>
    <script src="js/user.js"></script>
</body>
</html>