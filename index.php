<?php session_start(); ?>
  <html>
  <head>
    <meta charset="utf-8">
    <title>DMUSIC </title>
    <link rel="stylesheet" type="text/css" media="screen" href="css/redsocial.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/animate.css" />
  </head>
  <body>
    <div id="contenido">
      <header> 

        <img class="animated fadeIn" src="img/grupo.jpg" alt="Red Social - Música">

        <nav>
          <ul>
            <li class="menu"><a href="http://beta.dmusic.es/"><font face="Daft Font"> Inicio</font></a></li>
            <li class="menu"><a href="#"><font face="Daft Font">Conciertos</font></a></li>
            <li class="menu"><a href="http://beta.dmusic.es/locales/"><font face="Daft Font">Locales</font></a></li>
            <li class="menu"><a href="http://beta.dmusic.es/login/perfil.php"><font face="Daft Font">Perfil</font></a></li>
            <?php if ($_SESSION['login']==true) {
              echo '<div class="contDesplegable">
              <li class="derecha"><a href="login/perfil.php"><font face="Daft Font">'.$_SESSION['mail'].'</font></a>

              </li>
              </div>';
            } else {
              echo '<div class="contDesplegable">
              <li class="derecha"><a href="login/logeate.php"><font face="Daft Font">Login</font></a></li>
              <li class="derecha"><a href="login/inicio.php"><font face="Daft Font">Registro</font></a></li>
              </div>';
            }
            ?>
          </ul>
        </nav>
      </header>
    </div>
    <div class="central animated zoomIn"><div class="titulo"><font face="Daft Font">Grupos</font><img class="img"src="img/daft.jpg"><div class="descripcion">
      ¿Tu y tus colegas formais parte de un grupo? ¿Os gustaria poder poneros en contacto con locales en los que dejar alucinados a los oyentes?
    </div><a href="http://beta.dmusic.es/login/altas/alta-grupo.php"><button>Registra tu grupo</button></a></div></div>
    <div class="central animated zoomIn"><div class="titulo"><font face="Daft Font">Conciertos</font><img class="img"src="img/concierto.jpg"><div class="descripcion">
      Puedes organizar un concierto haciendo clic aquí. Guarda energia para los fabulosos conciertos que estan por llegar.
    </div><a href=""><button>Crea conciertos</button></a></div></div>
    <div class="central animated zoomIn"><div class="titulo"><font face="Daft Font">Locales</font><img class="img"src="img/local.jpg"><div class="descripcion">
      ¿Quieres revolucionar a los espectadores? ¿Te gustaria que el nombre de tu local diese la vuelta al mundo? Puedes hacer que todos conozcan tu local desde aquí.
    </div><a href="http://beta.dmusic.es/login/altas/alta-local.php"><button href="www.google.es">Publica tu local</button></a></div></div>

    <p class="lista"><font face="Daft Font">Locales y músicos</font></p>

    <div class="conciertos">
      <div class="doble">
        <div class="listado">
          <table>

            <tr>
              <th>Nombre</th>
              <th>Direccion</th>
              <th>Email</th>
            </tr>

            <?php 
            $conexion=mysqli_connect("localhost:3306","xmoobsne","xuraqiri") or die ("no se puede conectar");
            mysqli_select_db($conexion, "xmoobsne_dmusic") or die ("no se puede conectar"); 
            $mysqli_query = mysqli_query($conexion, "SELECT * FROM dm_usuarios WHERE usuario_tipo = 'local'");;
            if ($mysqli_query) {
              while($row = mysqli_fetch_array($mysqli_query)) {
                echo "<div style='backgroud-color:red;'><tr>";
                echo '<td>'.$row['usuario_nombre'].'</td>';
                echo '<td>'.$row['usuario_direccion'].'</td>';
                echo '<td>'.$row['usuario_email'].'</td>';

                echo "</tr></div>";
              }

            }else{
              echo "Error inesperado, vuelve a intentar lo más tarde";
            }

            ?>  
          </table>
        </div>

        <div class="listadoabajo"> <button>Ver más</button></div>

      </div>

      <div class="doble">
        <div class="listado">
          <table>

            <tr>
              <th>Nombre</th>
              <th>Estilo</th>
              <th>Email</th>
            </tr>

            <?php 
            $conexion=mysqli_connect("localhost:3306","xmoobsne","xuraqiri") or die ("no se puede conectar");
            mysqli_select_db($conexion, "xmoobsne_dmusic") or die ("no se puede conectar"); 
            $mysqli_query = mysqli_query($conexion, "SELECT * FROM dm_usuarios WHERE usuario_tipo = 'musico'");;
            if ($mysqli_query) {
              while($row = mysqli_fetch_array($mysqli_query)) {
                echo "<div style='backgroud-color:red;'><tr>";
                echo '<td>'.$row['usuario_nombre'].'</td>';


                if ($row['estilo_id'] == '1') {
                   echo '<td>Rock</td>';}
               
               if ($row['estilo_id'] == '2') {
                   echo '<td>Pop</td>';}
               
               if ($row['estilo_id'] == '3') {
                   echo '<td>metal</td>';}
                   echo '<td>'.$row['usuario_email'].'</td>';
                   echo "</tr></div>";
             }

           }else{
            echo "Error inesperado, vuelve a intentar lo más tarde";
          }

          ?>  
        </table>
      </div>

      <div class="listadoabajo"> <button>Ver más</button></div>

    </div>
  </div>
  <p class="lista1"><font face="Daft Font">Conciertos</font></p>
  <div class="putoamo"></div>
</body>
</html>