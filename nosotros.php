<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Tobe's</title>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
  integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/fontawesome.min.css">
  <link href="css/hover.css" rel="stylesheet" media="all">
  <script src="https://kit.fontawesome.com/23412c6a8d.js"></script>
  <link rel="stylesheet" href="css/formularios.css">
  <link rel="stylesheet" href="css/estilos.css">
  </head>
<body>
<?php include_once("header.php"); ?>
<main>
  <div id="banner_bienvenida" class="carousel slide" data-ride="carousel" style="z-index:auto">
        <ol class="carousel-indicators" style="z-index:auto;">
          <li data-target="#banner_bienvenida" data-slide-to="0" class="active"></li>
          <li data-target="#banner_bienvenida" data-slide-to="1"></li>
          <li data-target="#banner_bienvenida" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div><img src="img/banner_2.jpg" class="d-block w-100" alt="banner_2"></div>
          </div>
          <div class="carousel-item">
            <div><img src="img/banner_3.jpg" class="d-block w-100" alt="banner_3"></div>
          </div>
          <div class="carousel-item">
            <div><img src="img/banner_4.jpg" class="d-block w-100" alt="banner_4"></div>
          </div>
          <div class="carousel-item">
            <div><img src="img/banner_5.jpg" class="d-block w-100" alt="banner_5"></div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#banner_bienvenida" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#banner_bienvenida" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
</div>
</main>

<h4>Centro de ayuda<br>
<span style="font-weight: 400; font-size: 24px">Selecciona una opción</span>
<section>
    <div class="accordion" id="menu_despegable">
                <div class="card">
                  <div class="card-header" id="headingOne">
                    <h4 class="mb-0">
                            <button class="btn btn-info collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Facturación
                            </button>
                    </h4>
                  </div>

                  <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#menu_despegable">
                    <div class="card-body">
              <b>¿En que momento se emite la factura?</b> <br>

              <p>La factura se emite una vez se acredite el pago de tu producto. Si elegiste la opción de envío, se te mandará la factura digital junto al seguimiento por correo. Si venís a retirar, se te enviará una factura digital.</p><br>

              <b>¿Cómo puedo solicitar factura A?</b><br>

              <p>Podrás solicitar el cambio únicamente dentro de los 30 días posteriores a la compra. </p><br>

              <b>Tuve un problema con mi factura, que hago?</b><br>

              <p>Si tuviste algún inconveniente con tu factura, te pedimos que te comuniques con nosotros utilizando nuestras vías de contacto.</p><br>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingTwo">
                    <h4 class="mb-0">
                      <button class="btn btn-info" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Productos
                      </button>
                    </h4>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#menu_despegable">
                    <div class="card-body">
              <b>¿El producto es original?</b><br>

              <p>Todos los productos que comercializamos son originales, con garantía oficial. </p><br>

              <b>¿El producto es nuevo?</b><br>

              <p>Todos los productos que comercializamos son nuevos, caso contrario será identificado en el título del artículo y será clasificado como Outlet/Discontinuo.</p><br>

              <b>¿Qué significa OEM?</b><br>

              <p>Un producto OEM es aquel que es nuevo y original pero que no cuenta con el packaging. El mismo ya es enviado de esta forma por el fabricante. Puede ser una pieza, un subsistema o software. Por ejemplo, sistemas operativos y los microprocesadores en equipos.</p><br>

              <b>¿Cuál es precio del producto?</b><br>

              <p>El precio es el valor expresado, en pesos argentinos, que se encuentra publicado junto al producto.</p><br>

              <b>¿Puedo probar el equipo antes de comprarlo?</b><br>

              <p>productos pueden probarse al retirarlos.</p><br>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingThree">
                    <h4 class="mb-0">
                      <button class="btn btn-info collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Computadoras Armadas
                      </button>
                    </h4>
                  </div>
                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#menu_despegable">
                    <div class="card-body">
                <b>¿Cuáles son los tiempos de armado?</b><br>
              <p>El plazo de armado y prueba de tu equipo es de 72 horas hábiles.</p><br>

              <b>¿Cómo puedo agregarle componentes adicionales?</b><br>

              <p>En caso de agregar algún componente adicional, lo debés solicitar con un término no mayor a 24 horas de la compra de la PC.</p><br>

              <b>¿Qué podés agregar a tu PC?</b><br>

              <p>-Placa de Wifi</p>
              <p>-Lectora de DVD</p>
              <p>-El Sistema Operativo</p>

              <b>¿Cuentan con sistema operativo?</b><br>

              <p>No incluye el sistema operativo, pero se lo podés agregar.</p><br>
                    </div>
                  </div>
                </div>
    </div>
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
