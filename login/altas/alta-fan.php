<?php session_start(); ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Alta de un fan</title>
        <link rel="stylesheet" type="text/css" href="../../css/login.css">
    </head>
    <body background="../../img/fondo.jpg">
         <div class="vid-container">
            <div class="box">
                <h1>Fan! </h1>
        <form action="grupo-bbdd.php" method="POST">
                <input id="Fnombre"
                 type="text"
                 name="Fnombre"
                 placeholder="Nombre"><br>

                <input id="Fapellido1"
                 type="text"
                 name="Fapellido1"
                 placeholder="Apellido1"><br>

                <input id="Fapellido2"
                 type="text"
                 name="Fnombre"
                 placeholder="Apellido2"><br>
                <br>
            <button>Registrarse</button>
        </form>
        </div>
        </div>
    </body>
</html>
