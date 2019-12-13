<?php 

class Usuario {
    public $id;
    public $nombre_completo;
    public $user;
    public $email;
    public $contrasenia;
    public $activo;

    public function __construct($nombre_completo,$user,$email,$contrasenia){
        $this->email=$email; 
        $this->nombre_completo=$nombre_completo;
        $this->$user=$user;
        $this->contrasenia=$contrasenia;
    }
}