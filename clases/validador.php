
<?php
class Autenticador {

    public function login($usuario, $recordarme) {
        $_SESSION = [
            "id" => $usuario["id"],
            "nombre" => $usuario["nombre"],
            "email" => $usuario["email"],
            "password" => $usuario["password"],
            "usuario_logueado" => $usuario["email"]
        ];
        if($recordarme=="si") {
            setCookie("usuario", $usuario["mail"],time()+100000);
        }
        header("location:index.php?id=".$_SESSION["id"]);
    }

    public function logout() {
        session_start();
        if(isset($_COOKIE["usuario"]) || isset($_SESSION["id"])){
            session_destroy();
            setCookie("usuario","",time()-1);
        }
        header("Location:index.php");
    }
}