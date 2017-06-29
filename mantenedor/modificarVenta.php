<html>
    <head>
        <meta charset="UTF-8">
        <link href="../../css/estilos.css" rel="stylesheet" type="text/css"/>
        <title>Edna Moda Ventas Online</title>
    </head>
    <body>
        <div id="Cabecera">
            <img src="../fotos/niños/niño1.jpg" alt=""/>
        </div>
        <div align="right">
            <button><a id="cancelar" href="../index.php">Cancelar</a></button>
            <button><a id="agregar" href="agregarVenta.php">agregar venta</a></button>
            <button><a id="eliminar" href="eliminarVenta.php">modificar</a></button>
        </div>     
        <div id="Cuerpo">
                <h1>Edna Moda Ventas Online</h1>
           
            <div id="ModificarVenta">
                <form action="../controladores/modfventa.php" method="POST">
                        <div><label>Folio Venta</label>
                        <select name="folioVenta">
                            <?php 
                                while($idVenta = mysqli_fetch_array($miqueryVenta)) { 
                                ?> 
                                <option value =  <?php echo $idVenta['idVenta'];?> >
                                <?php echo "ID Compra: ".$idVenta['idVenta'];?>

                                </option> 
                                <?php 
                                }
                                ?> 
                        </select>
                        </div>
                        <div><label>Nombre Producto</label>
                            <select name="nombreProducto">
                                    <?php 
                                        while($idProducto = mysqli_fetch_array($miqueryProducto)) { 
                                        ?> 
                                        <option value =  <?php echo $idProducto['idProducto'];?> >
                                        <?php echo $idProducto['nombreProducto']; ?>

                                        </option> 
                                        <?php 
                                        }
                                        ?> 
                            </select>
                        </div>                        
                        <input type="submit" value="Modificar">
                    </form>
                </div>
        </div>   
        </form>
        
    </body>
</html>
