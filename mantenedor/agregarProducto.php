<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
          <link href="../../css/estilos.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
             <div id="Cabecera">
               
            
               
            </div>
        <div align="right"><button><a id="cancelar" href="mantenedor/CarroDeCompras.php">Cancelar</a></button></div>    
        <div id="Cuerpo">
              <h1>Agregar Producto!</h1>    
            <div id="AgregarProd">
              
                <form action="controladores/agrproducto.php" method="post">     
                <div>Nombre Producto :<input type="text" name="nameprod" ></div>        
                <div>Categoria : </div> 
                <div>
                <select name="tipoCategoria">
                    <option value="seleccione">Seleccione</option>
                    <option value="seleccione">Hombres</option>
                    <option value="seleccione">Mujeres</option>
                    <option value="seleccione">Niños   </option>
                    <option value="seleccione">Slinder   </option>
                    
                </select>
                </div>
                <div>Diseño :</div>
                <div>
                    <select name="tipoDiseño">
                    <option value="seleccione">Seleccione</option>
                    <option value="seleccione">Zapatiilla</option>
                    <option value="seleccione">Pantalones</option>
                    <option value="seleccione">Zapatos  </option>
                    <option value="seleccione">Poleras  </option>
                    <option value="seleccione">Pijamas  </option>
                    </select>
                </div>
                <div>Stock :</div><div> <input type="number" name="stock"></div>
                <div>Precio del Producto : <input type="number" name="precprod"></div>
                <div>Informacion del producto : <input type="text" name="infprod"></div>
                <input type="submit" value="Ingresa Producto">
                
         </div>  
        </div>
         
            </form>
    </body>
    
</html>