<?php session_start(); ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="../css/login.css">
    </head>
    <body background="../img/fondo.jpg">
        <div class="vid-container">
            <div class="box">
                <h1>Iniciar sesión</h1>
        <form action="nuevo.php" method="POST">

            <label for="Femail"></label>

                <input id="Femail"
                 type="email"
                 name="Femail"
                 placeholder="Email">


            <label for="Fcontraseña"></label>

                <input id="Fcontraseña"
                type="password"
                name="Fcontrasena"
                pattern='{3,12}'
                placeholder="Contraseña">
        

            <button>Iniciar</button>
            
         
        </form>
        </div>
        </div>
    </body>
</html>
