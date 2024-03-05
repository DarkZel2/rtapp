<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link rel="website icon" type="png" href="img/RicaTorta ACTUALIZADO.png">
    <title>Inicia Sesión/Registro</title>
</head>
<body>
    <?php
    include ('./models/insert.php')
    ?>
    <header class="xi"> <!--Equis para salir del apartado de login-->
        <a href="index.html" class="salir">X</a>
        
    </header>
    <header class="xr">
        <a href="index.html" class="salir">X</a>
    </header>
    <main class="iniciar"> <!--Main para inicio de sesion-->
        <header>
            <h1>Inicia Sesión</h1>
        </header>
        <main>
            <form action="">
                <div>
                    <label for="">Email:</label><br>
                    <input type="email" name="correo" id="">
                </div>
                <div>
                    <label for="">Contraseña:</label><br>
                    <input type="password" name="pass" id="">
                </div>
                <div class="btn">
                    <button type="submit">Login</button>
                </div>
            </form>
        </main>
        <footer>
            <ul>
                <li class="R"><a href="reset_pass.html">Reestablecer contraseña</a></li>
                <li>¿No tienes cuenta? <br><a id="registro">Regístrate</a></li>
            </ul>
        </footer>
    </main>
    <main class="registro"> <!--Main para registro-->
        <header>
            <h1>Registro</h1>
        </header>
        <main>
            <form action="">
                <div>
                    <label for="">Nombre:</label><br>
                    <input type="text">
                </div>
                <div>
                    <label for="">Apellido:</label><br>
                    <input type="text">
                </div>
                <div>
                    <label for="">Telefono:</label><br>
                    <input type="tel">
                </div>
                <div>
                    <label for="">Correo:</label><br>
                    <input type="email">
                </div>
                <div>
                    <label for="">Contraseña:</label><br>
                    <input type="password">
                </div>
                <div class="btn">
                    <button type="submit">Inlog</button>
                </div>
            </form>
        </main>
        <footer>
            <p>¿Ya tienes cuenta?<br><a id="iniciar">Inicia Sesión</a></p>
        </footer>
    </main>
    <div class="info" id="info"> <!--Div donde se presenta la informacion lateral-->
        <div class="conten1" id="conten1">
            <h4>Misión</h4>
            <p>COMESTIBLES RICA TORTA es una empresa comprometida con la satisfacción de sus clientes intermediarios y consumidores finales, a través de la producción y comercialización de productos alimenticios en las líneas de la pastelería, galletería y panadería, cuenta con una amplia gama de productos de calidad que satisface el mercado de la región Tolimense y la ciudad de Ibagué.
                Nuestra empresa establece relaciones de cordialidad en las negociaciones con nuestros proveedores para garantizar procesos productivos eficientes. De igual manera la producción y comercialización está apoyada en personal responsable, calificado y dedicado para que los productos alimenticios cumplan con todas las normas técnicas exigidas y así ofrecer un excelente producto a nuestros clientes, enfrentando las condiciones de mercado cambiantes.</p>
        </div>
        <div class="conten2" id="conten2">
            <h4>Política de tratamiento de Datos Personales</h4>
            <p>La política de tratamiento de Datos Personales encamina su objetivo con base en la Ley 1581 de 2012, acatando las disposiciones relacionadas allí y en el Decreto 1074 de 2015. Adicionalmente normas referentes específicamente a bases de datos personales. Por tanto, esta política orientará a nuestros clientes, proveedores, colaboradores y comité orientador de nuestra compañía. Al cual se le denominara en adelante TITULAR / ACTOR. Acerca de la recolección, almacenaje, trato, uso, transferencia y circulación de información suministrada por los mismos actores mencionados, a través de diferentes canales de recolección. De la misma forma la finalidad con que se emplea la información otorgada. Se enfatiza en que nuestra compañía no vende, ni presta base de datos personales a terceros. 
            <br>
            Para mas información puede ir <a href="">aquí.</a></p>
        </div>
    </div>
    <script src="js/login.js"></script>
</body>
</html>