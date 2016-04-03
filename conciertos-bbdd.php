<?php session_start(); ?>
<html>
<head>
<title> ALTA EN BASE DE DATOS </title>
</head>
<body>
<?php

$conexion=mysqli_connect("localhost:3306","xmoobsne","xuraqiri") or die ("no se puede conectar");
mysqli_select_db($conexion, "xmoobsne_dmusic") or die ("no se puede conectar");
if($_SESSION['login']==true && !$_SESSION['usuario_email']==""){
	
	
	$e_mail 		= $_SESSION['usuario_email'];
	$nombre 		= $_POST['Fnombre'];
	$fecha 			= $_POST['Ffecha'];
	$precio		 	= $_POST['Fprecio'];
	$ciudad 		= $_POST['Fciudad'];
	$estilo 		= $_POST['Festilo'];
	$duracion 	    = $_POST['Fduracion'];
	$asistentes     = $_POST['Fasistentes'];
	$local 	 	    = $_POST['Flocal'];
	$grupo	    	= $_POST['Fgrupo'];
	mysqli_query($conexion , "INSERT INTO  `xmoobsne_dmusic`.`dm_concierto` (
`concierto_id` ,
`concierto_fecha` ,
`concierto_precio` ,
`concierto_asistentes` ,
`concierto_duracion` ,
`concierto_nombre` ,
`estilo_id` ,
`local_id` ,
`grupo_id` ,
`ciudad_id`
)
VALUES (
NULL ,  '".$fecha."',  '".$precio."',  '".$asistentes."',  '".$duracion."',  '".$nombre."',  '".$estilo."',  '".$local."',  '".$grupo."',  '".$ciudad."'
);") or die("LA CONSULTA SQL NO VALE CACA");
	
}else{
	echo "Tines que iniciar sessión antes para ser un grupo";
}
mysqli_close($conexion);

?>
</body>
</html>