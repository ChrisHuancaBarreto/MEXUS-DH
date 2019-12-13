<?php
 $errores=array();
 $nombre="";
 $usuario="";
 $email="";
 include 'clases/Usuario.php';
 include 'clases/Validador.php';

if($_POST){
    $nombre=$_POST["nombre"];
    $usuario=$_POST["usuario"];
    $email=$_POST["email"];
    $contraseña=$_POST["password"];
    $contraseña2=$_POST["password-verify"];
      /* nombre */
    if(empty($nombre)){ // si la variable nombre no esta vacia aplico filtros 
        $errores["nombre"]= "Por favor ingresa un nombre";
    } 
      /* usuario */
      if(empty($usuario)){
        $errores ["usuario"]= "Por favor ingresa un usuario";
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

      /* contraseña */
      if(!empty($contraseña) and !empty($contraseña2) ){ // si la variable contraseña no esta vacia aplico filtros 

         if($contraseña2!=$contraseña) {
            $errores ["contraseña-2"]="Las contraseñas no coinciden";
        }
        if(strlen($contraseña) < 8){
            $errores["contraseña-1"]="Debe tener 8 caracteres o mas";
         } 

    } else { // si la variable contraseña esta vacia 
        $errores ["contraseña-0"]= "Por favor ingresa una contraseña";
    }    
    
    if(empty($errores)){  

        $contraseña = hash('sha512', $contraseña);
        include 'clases/BaseDeDatos.php';
        $bd= new BaseDeDatos();

        $usuarioNuevo = new Usuario($nombre,$usuario,$email,$contraseña);
        $usuarioNuevo->activo=true;
        $usuarioId = $bd->registrarUsuario($usuarioNuevo);

        session_start();
        $_SESSION["user_id"]=$usuarioId;

        header("location:index.php");

    }
    else{
          echo "Hubo un error al registrarse. ";
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

     <input type="text" name="nombre" placeholder="Nombre" value="<?=$nombre ?>" class="input-100">

     <?php if(!empty($errores["nombre"])): // si la variable errores tiene contenido muestra el tipo de error?> 
        <div class="error"><?php echo $errores["nombre"]; ?> </div>
     <?php endif; ?>

     <input type="text" name="usuario" placeholder="usuario" id="usuario" value="<?=$usuario?>" class="input-100">

     <?php if(!empty($errores["usuario"])): // si la variable errores tiene contenido muestra el tipo de error?> 
        <div class="error"><?php echo $errores["usuario"]; ?> </div>
     <?php endif; ?>

     <input type="email" name="email" placeholder="Email" value="<?=$email?>" class="input-100">

     <?php if(!empty($errores["email"])): // si la variable errores tiene contenido muestra el tipo de error?> 
        <div class="error"><?php echo $errores["email"]; ?> </div>
     <?php endif; ?>

     <input type="password" name="password" placeholder="contraseña" class="input-100">
     <input type="password" name="password-verify" placeholder="Repetir contraseña" class="input-100">

     <?php if(!empty($errores["contraseña-1"])): // si la variable errores tiene contenido muestra el tipo de error?> 
        <div class="error"><?php echo $errores["contraseña-1"]; ?> </div><br>
     <?php endif; ?>

     <?php if(!empty($errores["contraseña-0"])): // si la variable errores tiene contenido muestra el tipo de error?> 
        <div class="error"><?php echo $errores["contraseña-0"]; ?> </div><br>
     <?php endif; ?>

     <?php if(!empty($errores["contraseña-2"])): // si la variable errores tiene contenido muestra el tipo de error?> 
        <div class="error"><?php echo $errores["contraseña-2"]; ?> </div><br>
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