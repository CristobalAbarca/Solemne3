
<head>
<title>Inicio de Sesión</title>
</head>
<body>
    
        <link href="css/estilo.css?v=<?= time()?>" rel="stylesheet" type="text/css"/>
        <div  id="cabecera"><h1> <center>Edna moda  </center></h1> </div>

<h3>Iniciar Sesión</h3>
<form action="" method="POST">
Usuario: <input type="text" name="user"><br />
Contraseña : <input type="password" name="pass"><br />	
<input type="submit" value="Entrar" name="submit" />
</form>
<?php
if(isset($_POST["submit"])){

if(!empty($_POST['user']) && !empty($_POST['pass'])) {
	$user=$_POST['user'];
	$pass=$_POST['pass'];
	


	$mysqli = new mysqli('localhost', 'root', 'avaras08', 'bdd');
	$sql= ("SELECT * FROM usuario WHERE NombreUsuario='".$user."' AND Password='".$pass."'");
	
	$result = $mysqli->query($sql);

	
	$row = $result->fetch_array(MYSQLI_ASSOC);

	

	if ($result != NULL)
	{

	if($user == $row['NombreUsuario'] && $pass == $row['Password'])
	{

	session_start();
	$_SESSION['sess_user']=$user;


	header("Location: index.php");
	}
	} else {
	echo "La Clave o Usuario es invalida!";
	}

} else {
	echo "Todos los campos son requeridos!";
}
}
?>
<a href="../index.php">Salir</a>
</body>
</html>