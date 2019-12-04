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

<?php include_once("header.php"); ?>

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
                          <a href="descripcion.php" class="btn btn-primary">Ver</a>
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
<?php include_once("footer.php"); ?>
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
