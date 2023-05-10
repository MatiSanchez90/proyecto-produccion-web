<?php 
class Usuario{
    private $nombre;
    private $apellido;
    private $mail;
    private $nombre_usuario;
    private $clave;

    
public function __construct($p_nombre,$p_apellido,$p_mail,$p_nombre_usuario,$p_clave){
    $this->nombre= $p_nombre;
    $this->apellido= $p_apellido;
    $this->mail= $p_mail;
    $this->nombre_usuario= $p_nombre_usuario;
    $this->clave= $p_clave;
    $this->insert();
}

public function getNombreUsuario(){
    return $this->nombre;
}
public function setNombreUsuario($p_nombre){
    $this->nombre = $p_nombre;
}

public function getApellidoUsuario(){
    return $this->apellido;
}
public function setApellidoUsuario($p_apellido){
    $this->apellido = $p_apellido;
}

public function getMailUsuario(){
    return $this->mail;
}
public function setMailUsuario($p_mail){
    $this->mail = $p_mail;
}

public function getUsuarioNombre(){
    return $this->mail;
}
public function setUsuarioNombre($p_nombre_usuario){
    $this->nombre_usuario = $p_nombre_usuario;
}

public function getPassUsuario(){
    return $this->clave;
}
public function setPassUsuario($p_clave){
    $this->clave = $p_clave;
}



public static function all(){
    $cnx = Conexion::getInstance();
    $consulta = $cnx->prepare('SELECT * FROM usuario');
    $consulta->execute();
    return $consulta->fetchALL();
}


private function insert(){
    $cnx = Conexion::getInstance();
    $consulta = $cnx->prepare('INSERT INTO usuario (nombre,apellido,mail,nombre_usuario,clave)
    VALUES (:nombre,:apellido,:mail,:nombre_usuario,:clave)');
    $consulta->bindValue(':nombre',$this->nombre);
    $consulta->bindValue(':apellido',$this->apellido);
    $consulta->bindValue(':mail',$this->mail);
    $consulta->bindValue(':nombre_usuario',$this->nombre_usuario);
    $consulta->bindValue(':clave',$this->clave);
    $consulta->execute();
}



}














?>