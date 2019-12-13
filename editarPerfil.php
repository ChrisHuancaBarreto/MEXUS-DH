<?php 

session_start();

include 'clases/BaseDeDatos.php';
include 'clases/Usuario.php';

$bd = new BaseDeDatos();
$usuario = $bd->traerUsuario($_SESSION["user_id"]);

if($_POST){
    $nombre=$_POST["nombre"];
    $email=$_POST["email"];
      /* nombre */
    if(empty($nombre)){ // si la variable nombre no esta vacia aplico filtros 
        $errores["nombre"]= "Por favor ingresa un nombre";
    } 
      /* correo */
      if(!empty($email)){ // si la variable usuario no esta vacia aplico filtros 
        $email = filter_var($email,FILTER_SANITIZE_EMAIL); // aplica filtro (remover signos y caracteres especiales)
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $errores["email"]="Por favor ingresar un correo valido";
        }
    } else { // si la variable usuario esta vacia 
        $errores ["email"]= "Por favor ingresa un correo";
    }

    if(empty($errores)){  
        $bd->actualizarUsuario($nombre,$email);
         header("location:miPerfil.php");
    }
    
}

?>




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
<header class="header navbar sticky-top">
<div class="logo">
        <a class="hvr-wobble-to-bottom-right" href="index.php"><h1>MeXus</h1></a>
</div> 
     </header>
     <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="form-register">
     <h2 class="form-titulo">Mis datos</h2>
     <div class="contenedor-inputs">

     <label for="nombre" class="labels-name">Nombre</label>
     <input type="nombre" name="nombre" placeholder="nombre"class="input-100" value="<?= $usuario["nombre_completo"]?>" >

     <label for="email" class="labels-name">E-mail</label>
     <input type="email" name="email" placeholder="Email"class="input-100" value="<?= $usuario["email"]?>" >

     <input type="submit" class="btn-enviar" value="GUARDAR">

     </div>



     </form>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" 
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
</body>
</html>