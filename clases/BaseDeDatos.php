<?php 

class BaseDeDatos {
    public $conexion;

    public function __construct(){
            $dsn = 'mysql:host=localhost;dbname=mexus';
            $db_name='root';
            $db_pass='';
            $db_opt= array(
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
            );

            $this->conexion = new PDO ($dsn,$db_name,$db_pass,$db_opt);


    }

    public function registrarUsuario(Usuario $usuario){
        $query=$this->conexion->prepare("INSERT INTO usuarios (id,nombre_completo,email,password,usuario_activo) 
        VALUES (null,'".$usuario->nombre_completo."','".$usuario->email."','".$usuario->contrasenia."','".$usuario->activo."')");

        $query->execute();

        return $this->conexion->lastInsertId();
    }


    public function traerUsuario($id){
        $consulta = $this->conexion->query("SELECT * FROM usuarios WHERE id = ".$id);
        $usuario = $consulta->fetch(PDO::FETCH_ASSOC);
        return $usuario;
    }

    public function actualizarUsuario($nombre,$email){
        $query = $this->conexion->prepare("UPDATE usuarios SET nombre_completo= '".$nombre."' , email = '".$email."' WHERE id = ".$_SESSION["user_id"]);
        $query->execute();
    }
}