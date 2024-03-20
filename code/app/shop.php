<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="website icon" type="png" href="img/RicaTorta ACTUALIZADO.png">
    <link rel="stylesheet" href="css/shop.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="js/shop.js" async></script>
    <link href="https://fonts.googleapis.com/css2?family=Caveat+Brush&display=swap" rel="stylesheet">
    <title>Carrito de Compras</title>
 
</head>
<body>
    <header>
        <center>
            <div class="menu"> <!--Menu lateral-->
                <button id="abrir" class="abrir-menu"><i class="bi bi-list"></i></button>
                <nav class="nav" id="nav">
                    <button id="cerrar" class="cerrar-menu"><i class="bi bi-list"></i></button>
                    <ul class="nav-list">
                        <li><a href="index.html">Inicio</a></li>
                        <li><a href="">Notificaciones</a></li>
                        <li><a href="">Descuentos</a></li>
                        <li><a href="">Historial</a></li>
                        <li><a href="shops.html">Mis compras</a></li>
                    </ul>
                </nav>
            </div>
            <img src="img/RicaTorta ACTUALIZADO.png" class="logo">
            <div class="botones">
            <?php if (!empty($users)):?>
                <a href="user.php"><button class="inicio"><?=$users['user_name']?></button></a>
                <?php else: ?>
                    <a href="login.php"><button class="inicio">Inicia Sesión</button></a>
                <?php endif; ?>
            </div>
        </center>
    </header> 
    
    <div class="carrito" id="carrito">
        <div class="carrito-items">
            <div class="carrito-item">
                <img src="img/Croissant.png" alt="" width="200px">
                <div class="carrito-item-detalles">
                    <span class="carrito-item-titulo">pan</span>
                    <div class="selector-cantidad">
                        <i class="fa-solid fa-minus restar-cantidad"></i>
                        <input type="text" value="1" class="carrito-item-cantidad" disabled>
                        <i class="fa-solid fa-plus  sumar-cantidad"></i>
                    </div>
                    <span class="carrito-item-precio">$25.000</span>
                </div>
                <span class="btn-eliminar">
                    <i class="fa-solid fa-trash"></i>
                </span>
            </div>
            <div class="carrito-item">
                <img src="img/Croissant.png" alt="" width="200px">
                <div class="carrito-item-detalles">
                    <span class="carrito-item-titulo">pan</span>
                    <div class="selector-cantidad">
                        <i class="fa-solid fa-minus restar-cantidad"></i>
                        <input type="text" value="1" class="carrito-item-cantidad" disabled>
                        <i class="fa-solid fa-plus  sumar-cantidad"></i>
                    </div>
                    <span class="carrito-item-precio">$25.000</span>
                </div>
                <span class="btn-eliminar">
                    <i class="fa-solid fa-trash"></i>
                </span>
            </div>
            <div class="carrito-item">
                <img src="img/Croissant.png" alt="" width="200px">
                <div class="carrito-item-detalles">
                    <span class="carrito-item-titulo">pan</span>
                    <div class="selector-cantidad">
                        <i class="fa-solid fa-minus restar-cantidad"></i>
                        <input type="text" value="1" class="carrito-item-cantidad" disabled>
                        <i class="fa-solid fa-plus  sumar-cantidad"></i>
                    </div>
                    <span class="carrito-item-precio">$25.000</span>
                </div>
                <span class="btn-eliminar">
                    <i class="fa-solid fa-trash"></i>
                </span>
            </div>
            <div class="carrito-item">
                <img src="img/Croissant.png" alt="" width="200px">
                <div class="carrito-item-detalles">
                    <span class="carrito-item-titulo">pan</span>
                    <div class="selector-cantidad">
                        <i class="fa-solid fa-minus restar-cantidad"></i>
                        <input type="text" value="1" class="carrito-item-cantidad" disabled>
                        <i class="fa-solid fa-plus  sumar-cantidad"></i>
                    </div>
                    <span class="carrito-item-precio">$25.000</span>
                </div>
                <span class="btn-eliminar">
                    <i class="fa-solid fa-trash"></i>
                </span>
            </div>
        </div>
        <div class="carrito-total">
            <div class="fila">
                <strong>Tu Total</strong>
                <span class="carrito-precio-total">
                    $120.000,00
        </div>
    </div>
            <button class="btn-pagar">Pagar </button>
        </div>
    </div>
    </section>
</body>
    <footer>
        <a href="index.php" class="back-button"> 
            <i class="fa-solid fa-angle-left"></i> 
        </a>
    </footer>
</html> 
