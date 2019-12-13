
<?php 

$nombre_completo="";
$usuario="";
$email="";
$errores=array();

if(isset($_POST['submit'])){
    include 'clases/Usuario.php';
    include 'clases/Validador.php';

    $nombre_completo=$_POST["nombre_completo"];
    $usuario=$_POST["usuario"];
    $email=$_POST["email"];
    $contraseña=$_POST["password"];
    $contraseña2=$_POST["password2"];

    $validador=new Validador();
    

    if($validador->estaVacio($nombre_completo)){
        $errores["error_nombre"] = "Debe completar los campos.";
    }
    if($validador->estaVacio($usuario)){
      $errores["error_usuario"] = "Debe ingresar un usuario";
    }

    if($validador->estaVacio($email)){
       $errores["error_email"] = "Debe ingresar un email.";
    }

    if($validador->estaVacio($contraseña) AND $validador->estaVacio($contraseña2)){
        $errores["error_password1"] = "La contraseña es obligatoria.";
    }

    if(strlen($contraseña)<8 AND strlen($contraseña2)<8 ){
        $errores["error_password2"] = "La contraseña debe ser mayor a 8 caracteres.";
    }
    if($contraseña!=$contraseña2){
        $errores["error_password3"] = "Las contraseñas no coinciden.";
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
     <h2 class="form-titulo">Registrate</h2>
     <div class="contenedor-inputs">
     <input type="text" name="nombre_completo" placeholder="Nombre" value="<?=$nombre_completo ?>" class="input-100">

     <?php if(!empty($errores["error_nombre"])): // si la variable errores tiene contenido muestra el tipo de error?> 
        <div class="error"><?php echo $errores["error_nombre"]; ?> </div>
     <?php endif; ?>

     <input type="text" name="usuario" placeholder="usuario" value="<?=$usuario?>" class="input-100">

     <?php if(!empty($errores["error_usuario"])): // si la variable errores tiene contenido muestra el tipo de error?> 
        <div class="error"><?php echo $errores["error_usuario"]; ?> </div>
     <?php endif; ?>

     <input type="email" name="email" placeholder="Email" value="<?=$email?>" class="input-100">

     <?php if(!empty($errores["error_email"])): // si la variable errores tiene contenido muestra el tipo de error?> 
        <div class="error"><?php echo $errores["error_email"]; ?> </div>
     <?php endif; ?>

     <input type="password" name="password" placeholder="contraseña" class="input-100">
     <input type="password" name="password2" placeholder="Repetir contraseña" class="input-100">

     <?php if(!empty($errores["error_password1"])): // si la variable errores tiene contenido muestra el tipo de error?> 
        <div class="error"> <?php echo $errores["error_password1"]; ?> </div><br>
     <?php endif; ?>

     <?php if(!empty($errores["error_password2"])): // si la variable errores tiene contenido muestra el tipo de error?> 
        <div class="error"><?php echo $errores["error_password2"]; ?> </div><br>
     <?php endif; ?>

     <?php if(!empty($errores["error_password3"])): // si la variable errores tiene contenido muestra el tipo de error?> 
        <div class="error"><?php echo $errores["error_password3"]; ?> </div><br>
     <?php endif; ?>

     <input type="submit" name="submit" class="btn-enviar" value="CREAR CUENTA">
     <p class="form-link">¿Ya tenes una cuenta? <a href="login.php">Entrar</a></p>
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