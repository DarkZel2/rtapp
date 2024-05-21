<?php

session_start();
include ('./models/conection.php');

if (isset($_SESSION['user_id'])) {
    $records = $con->prepare('SELECT user_id, user_name, user_lastname, user_phone, user_mail, user_pass FROM registro WHERE user_id = :id');
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
            <a href="user.php"><li>General</li></a>
            <a href="user_dates.php"><li>Datos Personales</li></a>
            <a href="user_address.php"><li>Domicilio</li></a>
            <a href="user_pass.php"><li>Contraseña</li></a>
            <a href="user_priv.php"><li>Privacidad</li></a>
        </ul>
        <footer>
            <a href="index.php"><i><</i></a>
            <a href="./models/cerrar_sesion.php"><button>Cerrar Sesión</button></a>
        </footer>
    </nav>

    <main class="datos">
        <h2>Datos Personales</h2>
        <form action="user_dates.php" method="POST">
            <label for="">Ingrese su contraseña:</label>
            <input type="password" name="verificar" class="ipt-pass">
            <input type="submit" value="Verificar" class="btn-sub">
        </form>
        <?php if (!empty($_POST['verificar']) && $users['user_pass'] == $_POST['verificar']): ?>
        <table>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Telefono</th>
                <th>Correo Electrónico</th>
                <th></th>
            </tr>
            <tr>
                <td><?=$users['user_name']?></td>
                <td><?=$users['user_lastname']?></td>
                <td><?=$users['user_phone']?></td>
                <td><?=$users['user_mail']?></td>
                <td class="btn-edit"><a href="user_update.php">Editar</a></td>
            </tr>
        </table>
        <?php else: ?>
        <?php endif; ?>
    </main>
</body>
</html>