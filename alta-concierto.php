<?php session_start(); ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Alta de un concierto</title>
        <link rel="stylesheet" type="text/css" href="../../css/login.css">
    </head>
    <body>
         <div class="vid-container">
            <div class="box">
                <h1>Crea un concierto </h1>
        <form action="conciertos-bbdd.php" method="POST">

                    <div class="dividir" id="izquierda">

                <input id="Fnombre"
                 type="text"
                 name="Fnombre"
                 placeholder="¡Ponle nombre!"><br>

                <input id="Ffecha"
                type="date"
                name="Ffecha"
                placeholder="¿Cuando?"><br>
               
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
                <br>

                <input id="Fprecio"
                type="number"
                name="Fprecio"
                placeholder="Precio del concierto">

                </div>


                    <div class="dividir" id="derecha">

                <input id="Fduracion"
                type="number"
                name="Fduracion"
                placeholder="Duracion (minutos)"><br>

                <input id="Fasistentes"
                type="number"
                name="Fasistentes"
                placeholder="¿Cuantos seran?"><br>

                <select name="Flocal" class="selector">
                <?php 
                $mysqli_query = mysqli_query($conexion, "SELECT * FROM dm_usuarios WHERE usuario_tipo = 'local'");
                if ($mysqli_query) {
                    while($row = mysqli_fetch_array($mysqli_query)) {
                        echo '<option value="'.$row['usuario_id'].'">'.$row['usuario_nombre'].'</option>';
                    }
                }else{
                    echo "Error inesperado, vuelve a intentar lo más tarde";
                }
                ?>
                </select>
                <br>
                 <select name="Fgrupo" class="selector">
                <?php 
                $mysqli_query = mysqli_query($conexion, "SELECT * FROM dm_usuarios WHERE usuario_tipo = 'musico'");
                if ($mysqli_query) {
                    while($row = mysqli_fetch_array($mysqli_query)) {
                        echo '<option value="'.$row['usuario_id'].'">'.$row['usuario_nombre'].'</option>';
                    }
                }else{
                    echo "Error inesperado, vuelve a intentar lo más tarde";
                }
                ?>
                </select>
                <br>




            <button>Registrarse</button>

            </div>
        </form>
        </div>
        </div>
    </body>
</html>
