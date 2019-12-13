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
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/styles.css">

</head>
<body>

<?php include_once("header.php"); ?>

<div class="wrapper">
    <div class="left">
        <img src="https://i.imgur.com/cMy8V5j.png" 
        alt="user" width="100">
        <h4 style="background:none;"><?= $usuario["nombre_completo"]?></h4>
    </div>
    <div class="right">
        <div class="info">
            <h3>Informacion</h3>
            <div class="info_data">
                 <div class="data">
                    <h4>Email</h4>
                    <p><?= $usuario["email"]?></p><br>
                 </div>
                 <div class="data">
                    <h4 style="background:none;"><a style="color:blue;" href="editarperfil.php">Editar Perfil</a></h4>
                 </div>
            </div>
        </div>

</body>
</html>