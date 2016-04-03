<?php session_start(); ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Alta de un local</title>
        <link rel="stylesheet" type="text/css" href="../../css/login.css">
    </head>
    <body background="../../img/fondo.jpg">
         <div class="vid-container">
            <div class="box">
                <h1>Registra tu local </h1>
        <form action="local-bbdd.php" method="POST">
                <input id="Fnombre"
                 type="text"
                 name="Fnombre"
                 placeholder="Nombre local"><br>

                <input id="Fdireccion"
                 type="text"
                 name="Fdireccion"
                 placeholder="Direccion local"><br>

                <label>Estilo del local</label>
                <!-- Pon esto bonito como tu sabes... por qué yo no sé XD-->
                <select name="Festilo" required>
                <?php 
                $conexion=mysqli_connect("localhost:3306","xmoobsne","xuraqiri") or die ("no se puede conectar");
                mysqli_select_db($conexion, "xmoobsne_dmusic") or die ("no se puede conectar"); 
                $mysqli_query = mysqli_query($conexion, "SELECT * FROM dm_estilo");
                if ($mysqli_query) {
                    while($row = mysqli_fetch_array($mysqli_query)) {
                        echo '<option value="'.$row['estilo_id'].'">'.$row['estilo_nombre'].'</option>';
                    }
                }else{
                    echo "Error inesperado, vuelve a intentar lo más tarde";
                }
                ?>
                </select>
                <br>
                <label>Ciudad del local</label>
                <select name="Fciudad">
                <?php 
                $mysqli_query = mysqli_query($conexion, "SELECT * FROM dm_ciudad");
                if ($mysqli_query) {
                    while($row = mysqli_fetch_array($mysqli_query)) {
                        echo '<option value="'.$row['ciudad_id'].'">'.$row['ciudad_nombre'].'</option>';
                    }
                }else{
                    echo "Error inesperado, vuelve a intentar lo más tarde";
                }
                ?>
                </select>

                <input id="Fdescripcion"
                type="text"
                name="Fdescripcion"
                placeholder="Describe el local"><br>
            <button>Registrarse</button>
        </form>
        </div>
        </div>
    </body>
</html>
