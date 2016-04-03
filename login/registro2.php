<?php session_start(); ?>
<html>
<head>
<title> ALTA EN BASE DE DATOS </title>
</head>
<body>
<?php
$conexion=mysqli_connect("localhost:3306","xmoobsne","xuraqiri") or die ("no se puede conectar");
mysqli_select_db($conexion, "xmoobsne_dmusic") or die ("no se puede conectar");

mysqli_query($conexion , "INSERT INTO  `xmoobsne_dmusic`.`dm_usuarios` (
`usuario_email` ,
`usuario_contrasena`,
`estilo_id` ,
`ciudad_id`
)
VALUES (
'".$_POST['Femail']."',  '".$_POST['Fcontrasena']."',  '1',  '1'
)") or die("LA CONSULTA SQL NO VALE CACA");
echo "Bienvenido";
echo "
		<!DOCTYPE html>
		<html>
		<head>
			<title>DMUSIC</title>
			<meta http-equiv='Refresh' content='0;url=http://beta.dmusic.es'>
		</head>
		<body>
		
		</body>
		</html>
	";
$_SESSION['usuario_email']=$_POST['Femail'];
mysqli_close($conexion);

?>

</body>
</html>