<html>
    <head>
        <meta charset="UTF-8">
        <title>Edna Moda Ventas Online</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        
        <link href="css/estilo.css?v=<?= time()?>" rel="stylesheet" type="text/css"/>
        <div  id="cabecera"><h1> <center>Edna moda</center></h1> </div>
        <form method="POST">
        Ingrese ID del producto: <input type="text" name="id" ><br />
        Categoria: <input type="text" name="categoria" ><br />
        <input type="submit" value="Ingresar">
        </form>

<?php
    $precioTotal = 0;
    if(!empty($_POST['id']) && !empty($_POST['categoria'])) {
	    $id=$_POST['id'];
	    $cat=$_POST['categoria'];
    
        

        $mysqli = new mysqli('localhost', 'root', 'avaras08', 'bdd');
        $sql= ("SELECT * FROM productos WHERE idproducto='".$id."'");

        $result = $mysqli->query($sql);

	    $row = $result->fetch_array(MYSQLI_ASSOC);

        $productos[] = $row; 
        $precioTotal += $row['Precio'];

        var_dump($productos);

    }else{
        
       
    }        

?>
        <a href="agregarProducto.php"> Agregar Producto</a>
        </br>
        <a href="eliminarProducto.php"> Eliminar Producto</a>
        </br>
        <a href="modificarProducto.php"> Modificar Producto</a>

      
    </body>
    
</html>
