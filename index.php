
<html>
    <head>
        <meta charset="UTF-8">
        <title>Edna Moda Ventas Online
        </title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Pacifico">
        
        </head>
    <body>

<body>


    <link href="css/estilo.css?v=<?= time()?>" rel="stylesheet" type="text/css"/>
        <div  id="cabecera"><h1> <center> Edna moda  </center></h1> </div>
        
        
        <div id="titulo"><?php include ('menu.php');?>  </div>
        <?php 
            if ($_SESSION)
            echo $_SESSION["sess_user"];
        ?>
        
        
       
  
        
        <img class="mySlides"src="fotos/slider/slider1.jpg" alt="" style="margin: auto;" />
        <img class="mySlides"src="fotos/slider/slider2.jpg" alt=""style="margin: auto;"/>
  
<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 5000); // Change image every 2 seconds
}
</script>
      
            
            
      
        <div id="pie">Antonio Varas #666, Fono de contacto: 00000000 </div>
        
        
        
        
        
      
    </body>
</html>
