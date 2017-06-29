<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<i class="fa fa-cloud"></i><a href="index.php">Todas  </a>
<i class="fa fa-venus" aria-hidden="true"></i><a href="mujer.php"> Mujer  </a>
<i class="fa fa-mars" aria-hidden="true"></i><a href="hombre.php"> Hombre  </a>
<i class="fa fa-rocket" aria-hidden="true"></i><a href="nino.php">Niños  </a>



<?php 
    session_start();        
    if(!$_SESSION) {
?>
<i class="fa fa-sign-in" aria-hidden="true"></i><a href="lib/inicioSesion.php">Iniciar Sesion</a>
<i class="fa fa-sign-in" aria-hidden="true"></i><a href="lib/registroUsuario.php">Registro</a>

<?php
    }else
    {
?>
<i class="fa fa-sign-in" aria-hidden="true"></i><a href="lib/logout.php">Cerrar Sesion</a>
    <i class="fa fa-sign-in" aria-hidden="true"></i><a href="mantenedor/agregarVenta.php">Agregar Venta</a>
<?php
    }
?>



    <i class="fa fa-shopping-cart" aria-hidden="true"></i><a href="mantenedor/CarroDeCompras.php">Carro de compras  </a>