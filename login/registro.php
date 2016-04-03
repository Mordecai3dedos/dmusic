<?php session_start(); ?>
<html>
<head>
<title> ALTA EN BASE DE DATOS </title>
</head>
<body>
<?php
$conexion=mysqli_connect("localhost:3306","xmoobsne","xuraqiri") or die ("no se puede conectar");
mysqli_select_db($conexion, "xmoobsne_dmusic") or die ("no se puede conectar");
echo $_POST['FNombre'];
echo $_POST['FApellido'];
echo $_POST['FApellido2'];
echo $_POST['FTipo'];
echo $_POST['FTelefono'];
echo $_POST['FDireccion'];
mysqli_query($conexion , "UPDATE  `xmoobsne_dmusic`.`dm_usuarios` SET 
`usuario_nombre` =  '".$_POST['FNombre']."',
`usuario_apellido1` =  '".$_POST['FApellido']."',
`usuario_apellido2` =  '".$_POST['FApellido2']."',
`usuario_direccion` =  '".$_POST['FDireccion']."',
`usuario_tipo` =  '".$_POST['FTipo']."',
`usuario_telefono` =  '".$_POST['FTelefono']."'
 WHERE `dm_usuarios`.`usuario_email` = '". $_SESSION['usuario_email'] ."'") or die("LA CONSULTA SQL NO VALE CACA");
echo "<h2>Datos introducidos </h2><br>";
mysqli_close($conexion);
?>
</body>
</html>