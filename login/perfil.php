<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Dmusic · Perfil</title>
</head>
<body>
<?php
$e_mail = $_SESSION['mail'];
echo $e_mail;
$conexion=mysqli_connect("localhost:3306","xmoobsne","xuraqiri") or die ("no se puede conectar");
mysqli_select_db($conexion, "xmoobsne_dmusic") or die ("no se puede conectar");

$sql = mysqli_query($conexion , "SELECT * from `xmoobsne_dmusic`.`dm_usuarios` WHERE usuario_email = '".$e_mail."'" ) or die("caca");
	while($row=mysqli_fetch_array($sql)){
		echo "<br>";
		echo $row['usuario_email'];	
		echo "<br>";
		echo $row['usuario_contrasena'];				
		echo "<br>";
		echo $row['usuario_nombre'];
	}
?>
<a href="http://beta.dmusic.es/login/cerrar.php">cerrar sesion</a>
</body>
</html>