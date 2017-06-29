<html>
    <head>
        <meta charset="UTF-8">
        <link href="../css/estilos.css" rel="stylesheet" type="text/css"/>
        <title>Edna Moda Ventas Online</title>
    </head>
    <body>
        
        <div id="Cabecera">    
            <img src="../fotos/hombres/hombre4.jpg" alt=""/>
        </div>
        <div align="right">
            <button><a id="cancelar" href="../index.php">Cancelar</a></button>
            <button><a id="eliminar" href="mantenedor/eliminarVenta.php">eliminar venta</a></button>
            <button><a id="modificar" href="mantenedor/modificarVenta.php">modificar</a></button>
        </div>    
        <div id="contenido">
                <h1>Crear Venta</h1>
                <div id="AgregarVenta">
                    <form action="../controladores/agregventa.php" method="POST">
                        <div><label>Nombre Producto</label>
                            <select name="NombreProducto">
                                <?php 
                                    while($nombreProducto = mysqli_fetch_array($miqueryProducto)) { 
                                    ?> 
                                    <option value =  <?php echo $nombreProductolst['nombreProducto'];?> >
                                    <?php echo $idProducto['idProducto']; ?>

                                    </option> 
                                    <?php 
                                    }
                                    ?> 
                            </select>
                            </br>
                            <form action="" method="POST">
                            Cantidad Productos <input type="text" name="cproducto"><br />                             
                            </form>
                            </div>                            
                        </div>                        
                        <input type="submit" value="Agregar">
                    </form>
                </div>
            
        </div> 
        </form>
        
        
    </body>
</html>

