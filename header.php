<?php session_start();

if(isset($_SESSION["user_id"])){ //Si no ha iniciado sesión redirecciona a index.php
  include 'clases/BaseDeDatos.php';
  include 'clases/Usuario.php';
  
  $bd = new BaseDeDatos();
  $usuario = $bd->traerUsuario($_SESSION["user_id"]);
}


?>



<header class="header" style="z-index: auto;">
                <div class="logo">
                    <a class="hvr-wobble-to-bottom-right" href="index.php"><h1>MeXus</h1></a>
                </div>
<div class="buscador">
  <form class="form-inline my-2 my-lg-0">
   <input class="form-control mr-sm-2" type="search" placeholder="Buscar..." aria-label="Search">
    <button id="boton-buscador" class="btn btn-outline my-2 my-sm-0 hvr-grow-shadow" type="submit"><i class="fas fa-search"></i></button>
    </form>
</div>
                <div class="redes">
                  <a href="#"><i class="fab fa-facebook hvr-float"></i></a>
                  <a href="#"><i class="fab fa-twitter hvr-float"></i></a>
                  <a href="#"><i class="fab fa-instagram hvr-float"></i></a>
                  <div style="color:white;font-size: 28px;">|</div>
                  <a href="#"><i class="fa fa-shopping-cart hvr-float data-toggle="tooltip" data-placement="left" title="Debe iniciar sesion"></i></a>
                </div>
</header>

<nav id="nav-cel" class="navbar navbar-expand-lg navbar sticky-top p-0">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#categorias" aria-controls="categorias" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-bars" style="color: white;"></i>
    </button>

    <div class="collapse navbar-collapse" id="categorias" style="background: black;">

      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
            <a href="index.php" class="hvr-float nav-link"><i class="fa fa-home hvr-icon"></i> Home</a>
        </li>
        <li class="nav-item active">
            <a class="hvr-float nav-link" href="productos.php#Computadoras"><i class="fas fa-desktop"></i> Computadoras</a>
        </li>
        <li class="nav-item active">
            <a class="hvr-float nav-link" href="productos.php#Consolas"><i class="fas fa-gamepad"></i> Consolas</a>
        </li>
        <li class="nav-item active">
            <a class="hvr-float nav-link" href="productos.php#Televisores"><i class="fas fa-tv"></i> Televisores</a>
        </li>
        <li class="nav-item active">
            <a class="hvr-float nav-link" href="productos.php#Celulares"><i class="fas fa-mobile-alt"></i> Celulares</a>
        </li>
        <li class="nav-item active">
            <a href="nosotros.php" class="hvr-float nav-link"><i class="fa fa-smile-o hvr-icon"></i> Sobre Nosotros</a>
        </li>

      </ul>
   
      <?php if(isset($_SESSION["user_id"])): ?>
  <div class="dropdown">
          <button class="dropdown-toggle ingresar hvr-bounce-in boton"  type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <h5><i class="fas fa-user"></i> <?= $usuario["nombre_completo"]?> </h5>
          </button>
          <div class="dropdown-menu" style="background: black;z-index: auto;" aria-labelledby="dropdownMenuButton" >
            <a class="dropdown-item" style="color: white;background: transparent;" href="miPerfil.php">Mi cuenta</a>
            <a class="dropdown-item" style="color:white; background: transparent;" href="cerrarSesion.php">Salir</a>
          </div>
      </div>
     </div>


<?php else: ?>
  <div class="dropdown">
          <button class="dropdown-toggle ingresar hvr-bounce-in boton"  type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <h5><i class="fas fa-user"></i> Acceder</h5>
          </button>
          <div class="dropdown-menu" style="background: black;z-index: auto;" aria-labelledby="dropdownMenuButton" >
            <a class="dropdown-item" style="color: white;background: transparent;" href="register.php">Iniciar Sesión</a>
            <a class="dropdown-item" style="color:white; background: transparent;" href="register.php">Registrarse</a>
          </div>
      </div>
     </div>

<?php endif; ?>


</nav>







