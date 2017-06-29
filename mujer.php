<html>
    <head>
        <meta charset="UTF-8">
        <title>Edna Moda Ventas Online</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
    </head>
    <body>
        
        <link href="css/estilo.css?v=<?= time()?>" rel="stylesheet" type="text/css"/>
        <div  id="cabecera"><h1> <center>Edna moda</center></h1> </div>
        
        <div id="titulo"><?php include ('menu.php');?>  </div>

            <?php
            	$mysqli = new mysqli('localhost', 'root', 'avaras08', 'bdd');
                $sql= ("SELECT * FROM productos WHERE categoria='Mujer'");
                
                $result = $mysqli->query($sql);

                while($row = $result->fetch_array())
                {
                    $rows[] = $row;
                }

            

                foreach ($rows as $row){
                    
            ?>                    
                    
                    <p><?php echo $row['IdProducto']; ?></p>
                    <p><?php echo $row['Nombre'];?></p>
                    <p><?php echo $row['Precio'];?></p>
                    
                    
                
            <?php
                }
            ?>
            
      
            <div id="pie">Antonio Varas #666, Fono de contacto: 00000000</div>
        
        <?php 
       
        ?>
        
        
        
        
      
    </body>
    
</html>
