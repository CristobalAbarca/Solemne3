<html>
<head>
<title>Registrar</title>
</head>
<body>
    
        <link href="css/estilo.css?v=<?= time()?>" rel="stylesheet" type="text/css"/>
        <div  id="cabecera"><h1> <center>Edna moda  </center></h1> </div>

<h3>Registrando</h3>
<form action="" method="POST">
Usuario: <input type="text" name="user"><br />
Contraseña: <input type="password" name="pass"><br />	
<input type="submit" value="Registrar" name="submit" />
</form>
<?php
if(isset($_POST["submit"])){

if(!empty($_POST['user']) && !empty($_POST['pass'])) {
	$user=$_POST['user'];
	$pass=$_POST['pass'];

	$mysqli = new mysqli('localhost', 'root', 'avaras08', 'bdd');
	if ($mysqli->connect_errno) {
		echo "Error: Fallo al conectarse a MySQL debido a: \n";
    	echo "Errno: " . $mysqli->connect_errno . "\n";
    	echo "Error: " . $mysqli->connect_error . "\n";
	}

	
	$query=("SELECT * FROM usuario WHERE NombreUsuario='".$user."'");
	$numrows = $mysqli->query($query);

	
	$row = $numrows->fetch_array(MYSQLI_ASSOC);

	

	if($row['NombreUsuario'] == null)
	{
		
		$sql="INSERT INTO usuario(NombreUsuario,password) VALUES('$user','$pass')";
		$result = $mysqli->query($sql);

		if($result){
		echo "La cuenta ha sido creada exitosamente";
		} else {
		echo "Error!";
		}

	} else {
	echo "El nombre de Usuario YA EXISTE, intente nuevamente";
	}

} else {
	echo "Todos los campos son requeridos!";
}
}
?>
<a href="../index.php">Salir</a>
</body>
</html>