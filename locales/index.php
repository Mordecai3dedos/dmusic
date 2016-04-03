<?php session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>DMUSIC </title>
<link rel="stylesheet" type="text/css" media="screen" href="css/redsocial.css" />
</head>
<body style="color:white;">
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
<table align="center">
		<tr>
			<th>Nombre del local</th>
			<th>Direccion del local</th>
			<th>Email del local</th>
		</tr>
			<?php 
    			$conexion=mysqli_connect("localhost:3306","xmoobsne","xuraqiri") or die ("no se puede conectar");
    			mysqli_select_db($conexion, "xmoobsne_dmusic") or die ("no se puede conectar"); 
    			$mysqli_query = mysqli_query($conexion, "SELECT * FROM dm_usuarios WHERE usuario_tipo = 'local'");;
    			if ($mysqli_query) {
        			while($row = mysqli_fetch_array($mysqli_query)) {
        			echo "<tr>";
    	    			echo '<td>'.$row['usuario_nombre'].'</td>';
    	    			echo '<td>'.$row['usuario_direccion'].'</td>';
    	    			echo '<td>'.$row['usuario_email'].'</td>';
        			}
        			echo "</tr>";
    			}else{
        				echo "Error inesperado, vuelve a intentar lo más tarde";
    			}

			?>	
</table>
<h1 align="center">Con esto deberías tener sufuciente para hacer muchas cosas</h1>
</body>
</html>

