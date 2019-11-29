<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mexus</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link href="css/hover.css" rel="stylesheet" media="all">
    <script src="https://kit.fontawesome.com/23412c6a8d.js"></script>
    <link rel="stylesheet" href="css/estilos.css">

</head>
<body>

<header class="header" style="z-index: auto;">
                <div class="logo">
                    <a class="hvr-wobble-to-bottom-right" href="index.php"><h1>MeXus</h1></a>
                </div>    
<div class="buscador">
  <form class="form-inline my-2 my-lg-0">
   <input class="form-control mr-sm-2" type="search" placeholder="Buscar..." aria-label="Search">
    <button id="boton-buscador" class="btn btn-outline my-2 my-sm-0 hvr-grow-shadow" type="submit"><i class="fas fa-search"></i></button>
    </form>
    <!--- buscar tablet-celular -->
<button id="buscador_mobil" class="btn btn-outline my-2 my-sm-0 hvr-grow-shadow" data-toggle="modal" data-target="#buscador" type="submit"><i class="fas fa-search" style="color:white;font-size=20px"></i></button>

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
        
      <div class="dropdown">
          <button class="dropdown-toggle ingresar hvr-bounce-in boton"  type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <h5><i class="fas fa-user"></i> Acceder</h5>
          </button>
          <div class="dropdown-menu" style="background: black;z-index: auto;" aria-labelledby="dropdownMenuButton" >
            <a class="dropdown-item" style="color: white;background: transparent;" href="login.php">Iniciar Sesión</a>
            <a class="dropdown-item" style="color:white; background: transparent;" href="register.php">Registrarse</a>
          </div>
      </div>  
    </div>
</nav>


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="z-index:auto">
        <ol class="carousel-indicators" style="z-index:auto;">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div><img src="img/banner-productos/b1.png" class="d-block w-100" alt="banner_2"></div>
          </div>
          <div class="carousel-item">
            <div><img src="img/banner-productos/b2.jpg" class="d-block w-100" alt="banner_3"></div>
          </div>
          <div class="carousel-item">
            <div><img src="img/banner-productos/b3.jpg" class="d-block w-100" alt="banner_4"></div>
          </div>
          <div class="carousel-item">
            <div><img src="img/banner-productos/b4.png" class="d-block w-100" alt="banner_5"></div>
          </div>
          <div><img src="img/banner-productos/b5.jpg" class="d-block w-100" alt="banner_2"></div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <button id="boton-carrusel" class="slick-prev slick-arrow" aria-label="Previous" type="button">
                <i class="fas fa-chevron-left"></i>
            </button>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <button id="boton-carrusel" class="slick-next slick-arrow" aria-label="Next" type="button">
                <i class="fas fa-chevron-right"></i>
            </button>
            <span class="sr-only">Next</span>
        </a>
</div>
    

<section>
 <!-- PRODUCTOS ---------------------------------------------------------------->
 <h2>COMPUTADORAS </h2>
<!-- Computadoras-->
<div class="container-fluid listaProductos">
    <a name="Computadoras"></a>    
    <div class="row">
      <div class="col-sm-6 col-md-3 producto">
            <div class="card" style="width: auto;">
                    <img src="img/productos/pc1.jpg" class="card-img-top hvr-bounce-in" alt="foto-producto">
                    <div class="card-body">
                      <h5 class="card-title">Computadora</h5>
                      <h3 style="background: transparent;color: blue;">$45.000</h3>
                      <p class="card-text">Pc Armada Intel I7 8700 Ddr4 8g 1tb Gtx 1650 4gb Gamer Win10</p>
                      <a href="#" class="btn btn-primary">Comprar</a>
                      <a href="#" class="btn btn-primary">Ver</a>
                    </div>
             </div>
      </div>
      <div class="col-sm-6 col-md-3 producto">
            <div class="card" style="width: auto;">
                    <img src="img/productos/pc1.jpg" class="card-img-top hvr-bounce-in" alt="foto-producto">
                    <div class="card-body">
                      <h5 class="card-title">Computadora</h5>
                      <h3 style="background: transparent;color: blue;">$45.000</h3>
                      <p class="card-text">Pc Armada Intel I7 8700 Ddr4 8g 1tb Gtx 1650 4gb Gamer Win10</p>
                      <a href="#" class="btn btn-primary">Comprar</a>
                      <a href="#" class="btn btn-primary">Ver</a>
                    </div>
             </div>
      </div>
      <div class="col-sm-6 col-md-3 producto">
            <div class="card" style="width: auto;">
                    <img src="img/productos/pc1.jpg" class="card-img-top hvr-bounce-in" alt="foto-producto">
                    <div class="card-body">
                      <h5 class="card-title">Computadora</h5>
                      <h3 style="background: transparent;color: blue;">$45.000</h3>
                      <p class="card-text">Pc Armada Intel I7 8700 Ddr4 8g 1tb Gtx 1650 4gb Gamer Win10</p>
                      <a href="#" class="btn btn-primary">Comprar</a>
                      <a href="#" class="btn btn-primary">Ver</a>
                    </div>
             </div>
      </div>
      <div class="col-sm-6 col-md-3 producto">
            <div class="card" style="width: auto;">
                    <img src="img/productos/pc1.jpg" class="card-img-top hvr-bounce-in" alt="foto-producto">
                    <div class="card-body">
                      <h5 class="card-title">Computadora</h5>
                      <h3 style="background: transparent;color: blue;">$45.000</h3>
                      <p class="card-text">Pc Armada Intel I7 8700 Ddr4 8g 1tb Gtx 1650 4gb Gamer Win10</p>
                      <a href="#" class="btn btn-primary">Comprar</a>
                      <a href="#" class="btn btn-primary">Ver</a>
                    </div>
             </div>
      </div>
    </div>

</div>
<!-- /Computadoras-->

<!-- Consolas -->
<h2>CONSOLAS </h2>
<div class="container-fluid listaProductos">
    <a name="Consolas"></a>    
        <div class="row">
          <div class="col-sm-6 col-md-3 producto">
                <div class="card" style="width: auto;">
                        <img src="img/productos/consola.png" class="card-img-top hvr-bounce-in" alt="foto-producto">
                        <div class="card-body">
                          <h5 class="card-title">Computadora</h5>
                          <h3 style="background: transparent;color: blue;">$45.000</h3>
                          <p class="card-text">Pc Armada Intel I7 8700 Ddr4 8g 1tb Gtx 1650 4gb Gamer Win10</p>
                          <a href="#" class="btn btn-primary">Comprar</a>
                          <a href="#" class="btn btn-primary">Ver</a>
                        </div>
                 </div>
          </div>
          <div class="col-sm-6 col-md-3 producto">
                <div class="card" style="width: auto;">
                        <img src="img/productos/consola.png" class="card-img-top hvr-bounce-in" alt="foto-producto">
                        <div class="card-body">
                          <h5 class="card-title">Computadora</h5>
                          <h3 style="background: transparent;color: blue;">$45.000</h3>
                          <p class="card-text">Pc Armada Intel I7 8700 Ddr4 8g 1tb Gtx 1650 4gb Gamer Win10</p>
                          <a href="#" class="btn btn-primary">Comprar</a>
                          <a href="#" class="btn btn-primary">Ver</a>
                        </div>
                 </div>
          </div>
          <div class="col-sm-6 col-md-3 producto">
                <div class="card" style="width: auto;">
                        <img src="img/productos/consola.png" class="card-img-top hvr-bounce-in" alt="foto-producto">
                        <div class="card-body">
                          <h5 class="card-title">Computadora</h5>
                          <h3 style="background: transparent;color: blue;">$45.000</h3>
                          <p class="card-text">Pc Armada Intel I7 8700 Ddr4 8g 1tb Gtx 1650 4gb Gamer Win10</p>
                          <a href="#" class="btn btn-primary">Comprar</a>
                          <a href="#" class="btn btn-primary">Ver</a>
                        </div>
                 </div>
          </div>
          <div class="col-sm-6 col-md-3 producto">
                <div class="card" style="width: auto;">
                        <img src="img/productos/consola.png" class="card-img-top hvr-bounce-in" alt="foto-producto">
                        <div class="card-body">
                          <h5 class="card-title">Computadora</h5>
                          <h3 style="background: transparent;color: blue;">$45.000</h3>
                          <p class="card-text">Pc Armada Intel I7 8700 Ddr4 8g 1tb Gtx 1650 4gb Gamer Win10</p>
                          <a href="#" class="btn btn-primary">Comprar</a>
                          <a href="#" class="btn btn-primary">Ver</a>
                        </div>
                 </div>
          </div>
        </div>
    
</div>
<!-- /Consolas -->

<!-- Televisores -->
<h2>TELEVISORES </h2>
<div class="container-fluid listaProductos">
       <a name="Televisores"></a>    
        <div class="row">
          <div class="col-sm-6 col-md-3 producto">
                <div class="card" style="width: auto;">
                        <img src="img/tv.png" class="card-img-top hvr-bounce-in" alt="foto-producto">
                        <div class="card-body">
                          <h5 class="card-title">Computadora</h5>
                          <h3 style="background: transparent;color: blue;">$45.000</h3>
                          <p class="card-text">Pc Armada Intel I7 8700 Ddr4 8g 1tb Gtx 1650 4gb Gamer Win10</p>
                          <a href="#" class="btn btn-primary">Comprar</a>
                          <a href="#" class="btn btn-primary">Ver</a>
                        </div>
                 </div>
          </div>
          <div class="col-sm-6 col-md-3 producto">
                <div class="card" style="width: auto;">
                        <img src="img/tv.png" class="card-img-top hvr-bounce-in" alt="foto-producto">
                        <div class="card-body">
                          <h5 class="card-title">Computadora</h5>
                          <h3 style="background: transparent;color: blue;">$45.000</h3>
                          <p class="card-text">Pc Armada Intel I7 8700 Ddr4 8g 1tb Gtx 1650 4gb Gamer Win10</p>
                          <a href="#" class="btn btn-primary">Comprar</a>
                          <a href="#" class="btn btn-primary">Ver</a>
                        </div>
                 </div>
          </div>
          <div class="col-sm-6 col-md-3 producto">
                <div class="card" style="width: auto;">
                        <img src="img/tv.png" class="card-img-top hvr-bounce-in" alt="foto-producto">
                        <div class="card-body">
                          <h5 class="card-title">Computadora</h5>
                          <h3 style="background: transparent;color: blue;">$45.000</h3>
                          <p class="card-text">Pc Armada Intel I7 8700 Ddr4 8g 1tb Gtx 1650 4gb Gamer Win10</p>
                          <a href="#" class="btn btn-primary">Comprar</a>
                          <a href="#" class="btn btn-primary">Ver</a>
                        </div>
                 </div>
          </div>
          <div class="col-sm-6 col-md-3 producto">
                <div class="card" style="width: auto;">
                        <img src="img/tv.png" class="card-img-top hvr-bounce-in" alt="foto-producto">
                        <div class="card-body">
                          <h5 class="card-title">Computadora</h5>
                          <h3 style="background: transparent;color: blue;">$45.000</h3>
                          <p class="card-text">Pc Armada Intel I7 8700 Ddr4 8g 1tb Gtx 1650 4gb Gamer Win10</p>
                          <a href="#" class="btn btn-primary">Comprar</a>
                          <a href="#" class="btn btn-primary">Ver</a>
                        </div>
                 </div>
          </div>
        </div>
    
</div>
<!-- /Televisores -->

<!-- Celulares -->
<h2>CELULARES </h2>
<div class="container-fluid listaProductos">   
        <a name="Celulares"></a>   
        <div class="row">
          <div class="col-sm-6 col-md-3 producto">
                <div class="card" style="width: auto;">
                        <img src="img/productos/celular1.png" class="card-img-top hvr-bounce-in" alt="foto-producto">
                        <div class="card-body">
                          <h5 class="card-title">Computadora</h5>
                          <h3 style="background: transparent;color: blue;">$45.000</h3>
                          <p class="card-text">Pc Armada Intel I7 8700 Ddr4 8g 1tb Gtx 1650 4gb Gamer Win10</p>
                          <a href="#" class="btn btn-primary">Comprar</a>
                          <a href="#" class="btn btn-primary">Ver</a>
                        </div>
                 </div>
          </div>
          <div class="col-sm-6 col-md-3 producto">
                <div class="card" style="width: auto;">
                        <img src="img/productos/celular1.png" class="card-img-top hvr-bounce-in" alt="foto-producto">
                        <div class="card-body">
                          <h5 class="card-title">Computadora</h5>
                          <h3 style="background: transparent;color: blue;">$45.000</h3>
                          <p class="card-text">Pc Armada Intel I7 8700 Ddr4 8g 1tb Gtx 1650 4gb Gamer Win10</p>
                          <a href="#" class="btn btn-primary">Comprar</a>
                          <a href="#" class="btn btn-primary">Ver</a>
                        </div>
                 </div>
          </div>
          <div class="col-sm-6 col-md-3 producto">
                <div class="card" style="width: auto;">
                        <img src="img/productos/celular1.png" class="card-img-top hvr-bounce-in" alt="foto-producto">
                        <div class="card-body">
                          <h5 class="card-title">Computadora</h5>
                          <h3 style="background: transparent;color: blue;">$45.000</h3>
                          <p class="card-text">Pc Armada Intel I7 8700 Ddr4 8g 1tb Gtx 1650 4gb Gamer Win10</p>
                          <a href="#" class="btn btn-primary">Comprar</a>
                          <a href="#" class="btn btn-primary">Ver</a>
                        </div>
                 </div>
          </div>
          <div class="col-sm-6 col-md-3 producto">
                <div class="card" style="width: auto;">
                        <img src="img/productos/celular1.png" class="card-img-top hvr-bounce-in" alt="foto-producto">
                        <div class="card-body">
                          <h5 class="card-title">Computadora</h5>
                          <h3 style="background: transparent;color: blue;">$45.000</h3>
                          <p class="card-text">Pc Armada Intel I7 8700 Ddr4 8g 1tb Gtx 1650 4gb Gamer Win10</p>
                          <a href="#" class="btn btn-primary">Comprar</a>
                          <a href="#" class="btn btn-primary">Ver</a>
                        </div>
                 </div>
          </div>
        </div>
    
</div>
<!-- /Celulares -->

 <!-- /PRODUCTOS ---------------------------------------------------------------->
</section>


<!-- footer -->
<footer>
        <div class="container-fluid" >
                <div class="row" style="text-align: center;padding: 80px;" >
                  <div class="col-md-4"> 
                      <h5>MeXus</h5>
                      <a href="nosotros.php#QuienesSomos">
                            <p>¿Quiénes Somos?</p>
                      </a>
                      <a href="nosotros.php#Ayuda">
                          <p>Ayuda</p>
                      </a>
                      <a href="nosotros.php#dondeEstamos">
                            <p>Contacto</p>
                      </a>
                  </div>
        
                  <div class="col-md-4" >
                        <h5 class="title">Recibir Novedades</h5>
                        <form>
                            <div class="form-group">
                                <label for="email">Deje su correo: </label>
                                  <input type="email" class="form-control" id="email" placeholder="Ingrese su email">
                            </div>
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </form>
        
                  </div>
        
                  <div class="col-md-4" >
                      <h5>Contacto</h5>
                        <p>MeXus</p>
                        <p><i class="fa fa-map-marker" aria-hidden="true"></i>  Calle falsa 1234</p>
                        <p>  MeXusAr@mexus.com</p>
                        <p><i class="fa fa-phone" aria-hidden="true"></i>  +54 12345678</p>
                  </div>
                </div>
        </div>
    </footer>
<!-- /footer -->






    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" 
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
</body>
</html>