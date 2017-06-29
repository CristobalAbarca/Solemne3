<?php 
session_start();
if(!isset($_SESSION["sess_user"])){
	header("location:../inicioSesion.php");
} else {
?>
<!doctype html>
<html>
<head>
<title>Bienvenido!</title>
</head>
<body>
    <h2>Bienvenido!, <?=$_SESSION['sess_user'];?>! <a href="index.php">Salir</a></h2>
<p>
Usted ha accedio exitosamente!
</p>
</body>
</html>
<?php
}
?>