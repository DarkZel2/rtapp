<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="website icon" type="png" href="img/RicaTorta ACTUALIZADO.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat+Brush&display=swap" rel="stylesheet">
    <title>Inicio</title>
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
                <a href="shopping_cart.html"><button class="carrito"><i class="bi bi-cart4"></i></button></a>
                <a href="login.html"><button class="inicio">Inicia Sesión</button></a>
            </div>
        </center>
    </header>        
    <nav class="categ"> <!--Barra de categorias y buscador-->
        <select name="categ" id="categ">
            <option value="todos">Todas las categorías </option>
            <option value="Tostados">Tostados</option>
            <option value="Pastelería">Pastelería</option>
            <option value="Panadería">Panadería</option>
            <option value="Galletería">Galletería</option>
        </select>
        <input type="search" name="buscador" id="buscador" placeholder="Buscar">         
    </nav>
    <main> <!--Main principal donde estan los productos-->
        <article class="panaderia">
            <img src="img/Croissant.png" class="img-panaderia">
            <section>
                <header class="head-art">
                    <h2>Nombre</h2>
                    <i class="bi bi-cart4"></i>
                </header>
                <main class="body-art">
                    <p>Descripcion</p>
                </main>
                <footer class="foot-art">
                    <h4>Precio</h4>
                <button>COMPRAR</button> 
                </footer>
            </section>
        </article>
        <article class="pasteleria">
            <img src="" class="img-pasteleria">
            <section>
                <header class="head-art">
                    <h2>Nombre</h2>
                    <i class="bi bi-cart4"></i>
                </header>
                <main class="body-art">
                    <p>Descripcion</p>
                </main>
                <footer class="foot-art">
                    <h4>Precio</h4>
                <button>COMPRAR</button> 
                </footer>
            </section>
        </article>
        <article class="tostados">
            <img src="" class="img-tostados">
            <section>
                <header class="head-art">
                    <h2>Nombre</h2>
                    <i class="bi bi-cart4"></i>
                </header>
                <main class="body-art">
                    <p>Descripcion</p>
                </main>
                <footer class="foot-art">
                    <h4>Precio</h4>
                <button>COMPRAR</button> 
                </footer>
            </section>
        </article>
        <article class="galleteria">
            <img src="" class="img-galleteria">
            <section>
                <header class="head-art">
                    <h2>Nombre</h2>
                    <i class="bi bi-cart4"></i>
                </header>
                <main class="body-art">
                    <p>Descripcion</p>
                </main>
                <footer class="foot-art">
                    <h4>Precio</h4>
                <button>COMPRAR</button> 
                </footer>
            </section>
        </article>
    </main>
    <a href="#" class="btn-flotante"><i class="bi bi-cart4"></i></a>
    <footer>
        <div class="direccion">
            <a href="https://comestiblesricatorta.co/">Visita nuestra pagina principal</a><br>
            <p>Carrera 14 Nº 97 – 01 <br>
            Avenida Ambala Barrio la Gaviota <br>
            Ibagué, Tolima</p><br>
            <p>Encuéntranos <a href="https://comestiblesricatorta.co/contacto">Aquí</a></p>
        </div>
        <div class="horario">
            <h4>Horario:</h4>
            <p>Lunes a Viernes <br>
            7:00 am a 9:00 pm <br>
            Domingo <br>
            8:00 am a 6:00 pm</p>
        </div>
        <div class="contacto">
            <p>(608) 2718960 - 313 424-1291</p> <br>
            <div class="redes">
                <a href=""><i class="bi bi-whatsapp"></i></a>
                <a href="https://www.instagram.com/comestiblesricatorta?igshid=MTNiYzNiMzkwZA=="><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
            </div>
        </div>
    </footer>
    <script src="js/main.js"></script>
</body>
</html>