<?php session_start(); ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Alta de un grupo</title>
        <link rel="stylesheet" type="text/css" href="../../css/login.css">
    </head>
    <body>
         <div class="vid-container">
            <div class="box">
                <h1>Registra tu grupo </h1>
        <form action="grupo-bbdd.php" method="POST">
                <input id="Fnombre"
                 type="text"
                 name="Fnombre"
                 placeholder="Nombre grupo"><br>

                <input id="Fintegrantes"
                type="number"
                name="Fintegrantes"
                placeholder="Numero de integrantes"><br>
               
                <!-- Pon esto bonito como tu sabes... por qué yo no sé XD-->
                <select name="Festilo" required class="selector">
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
                </select >
                <br>
                
                <select name="Fciudad" class="selector">
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
                placeholder="Describe el grupo"><br>
            <button>Registrarse</button>
        </form>
        </div>
        </div>
    </body>
</html>
