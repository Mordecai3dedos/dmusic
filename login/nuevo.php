<?php session_start();
$e_mail = $_POST['Femail'];
$pwd = $_POST['Fcontrasena'];
//Te pongo la variable URL, para cuando cambies de beta a dmusic.es 
$url = "http://beta.dmusic.es";
$conexion=mysqli_connect("localhost:3306","xmoobsne","xuraqiri") or die ("no se puede conectar");
mysqli_select_db($conexion, "xmoobsne_dmusic") or die ("no se puede conectar");

$consulta=mysqli_query($conexion , "SELECT * from dm_usuarios where usuario_email='".$e_mail."' and usuario_contrasena='".$pwd."'");
$Result1= mysqli_fetch_row($consulta);
if(!$Result1)
{
echo "usuario incorrecto";
echo "
		<!DOCTYPE html>
		<html>
		<head>
			<title>DMUSIC</title>
			<meta http-equiv='Refresh' content='0;url=".$url."'>
		</head>
		<body>
		
		</body>
		</html>
	";
}
else
{
echo "Genial!";
$_SESSION['login']=true;
$_SESSION['usuario_email']=$e_mail;
echo $e_mail;
echo "
		<!DOCTYPE html>
		<html>
		<head>
			<title>DMUSIC</title>
			<meta http-equiv='Refresh' content='0;url=".$url."'>
		</head>
		<body>
		
		</body>
		</html>
	";
}
?>