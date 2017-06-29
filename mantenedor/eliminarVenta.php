<html>
    <head>
        <meta charset="UTF-8">
        <link href="../../css/estilos.css" rel="stylesheet" type="text/css"/>
        <title>Edna Moda Ventas Online</title>
    </head>
    <body>
        <div id="Cabecera"> 
            <img src="../fotos/mujeres/mujer3.jpg" alt=""/>
        </div>
        <div align="right">
            <button><a id="cancelar" href="../index.php">Cancelar</a></button>
            <button><a id="agregar" href="mantenedor/agregarVenta.php">agregar venta</a></button>
            <button><a id="modificar" href="mantenedor/modificarVenta.php">modificar</a></button>
        </div>    
        </div>     
        <div id="contenido">
            
                <h1>Eliminar venta</h1>
           
                <form action="../controladores/elimventa.php" method="POST">
                <div id="eliminarVenta">
                    <div id="linea">
                        <label>Folio Venta</label>
                        <select name="idVenta">
                            <?php 
                                while($idVenta = mysqli_fetch_array($miqueryVenta)) { 
                                ?> 
                                <option value =  <?php echo $idVenta['idVenta'];?> >
                                <?php echo "ID Compra: ".$idVenta['idVenta']." - "."DNI Cliente: ".$idVentalst['dniCliente']; ?>

                                </option> 
                                <?php 
                                }
                                ?> 
                        </select>
                    </div>
                    <div id="boton"><input type="submit" value="Eliminar"></div>
                </div>
                    
                
            </form>
        </div>      
        </form>
    
    </body>
</html>
