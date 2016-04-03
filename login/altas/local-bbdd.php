<?php session_start(); ?>
<html>
<head>
<title> ALTA EN BASE DE DATOS </title>
</head>
<body>
<?php
//Todo esto de la conexión tendrías que hacer lo en otro archivo igual que las sessiones ej:
//require_once(/inc/conexion_BBDD.php) Te ahorras código y fallos
$conexion=mysqli_connect("localhost:3306","xmoobsne","xuraqiri") or die ("no se puede conectar");
mysqli_select_db($conexion, "xmoobsne_dmusic") or die ("no se puede conectar");
if($_SESSION['login']==true && !$_SESSION['usuario_email']==""){
	echo $_SESSION['usuario_email'];
	echo $_POST['Fnombre'];
	echo $_POST['Fdireccion'];
	echo $_POST['Fciudad'];
	echo $_POST['Festilo'];
	echo $_POST['Fdescripcion'];
	/*Animal, las variables no van así, así le asignas valores vacíos XD
	$_SESSION['mail'] 		= $e_mail;
	$_POST['Fnombre'] 		= $nombre;
	$_POST['Fintegrantes'] 	= $integrantes;
	$_POST['Fciudad'] 		= $ciudad;
	$_POST['Festilo'] 		= $estilo;
	$_POST['Fdescripcion']	= $descripcion;*/
	$e_mail 		= $_SESSION['usuario_email'];
	$nombre 		= $_POST['Fnombre'];
	$direccion 		= $_POST['Fdireccion'];
	$ciudad 		= $_POST['Fciudad'];
	$estilo 		= $_POST['Festilo'];
	$descripcion    = $_POST['Fdescripcion'];
	mysqli_query($conexion , "UPDATE  `xmoobsne_dmusic`.`dm_usuarios` SET  `usuario_nombre` =  '".$nombre."',
	`usuario_tipo` =  'local',
	`usuario_direccion` =  '".$direccion."',
	`usuario_descripcion` =  '".$descripcion."',
	`estilo_id` =  '".$estilo."',
	`ciudad_id` =  '".$ciudad."' WHERE  `dm_usuarios`.`usuario_email` ='".$e_mail."';") or die("LA CONSULTA SQL NO VALE CACA");
	echo "<h2>Datos introducidos </h2><br>";
	echo $e_mail;
	echo "<br>";
	echo $nombre;
	echo "<br>";
	echo $direccion;
	echo "<br>";
	echo $ciudad;
	echo "<br>";
	echo $estilo;
	echo "<br>";
	echo $descripcion;
	echo "<br>";
}else{
	echo "Tines que iniciar sessión antes para ser un grupo";
}
mysqli_close($conexion);

?>
</body>
</html>