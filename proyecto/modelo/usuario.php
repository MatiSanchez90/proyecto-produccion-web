<?php 
class Usuario{
    private $nombre;
    private $apellido;
    private $mail;
    private $nombre_usuario;
    private $clave;
    private $is_admin;

    
public function __construct($p_nombre,$p_apellido,$p_mail,$p_nombre_usuario,$p_clave, $p_is_admin){
    $this->nombre= $p_nombre;
    $this->nombre= $p_apellido;
    $this->mail= $p_mail;
    $this->nombre_usuario= $p_nombre_usuario;
    $this->clave= $p_clave;
    $this->is_admin = $p_is_admin;
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
public function setUsuarioNombre($p_usuario_nombre){
    $this->nombre_usuario = $p_usuario_nombre;
}

public function getPassUsuario(){
    return $this->clave;
}
public function setPassUsuario($p_clave){
    $this->password = $p_clave;
}

public function getadmin(){
    return $this->is_admin;
}
public function setadmin($p_is_admin){
    $this->password = $p_is_admin;
}


public static function all(){
    $cnx = Conexion::getInstance();
    $consulta = $cnx->prepare('SELECT * FROM usuario');
    $consulta->execute();
    return $consulta->fetchALL();
}

private function insert(){
    $cnx = Conexion::getInstance();
    $consulta = $cnx->prepare('INSERT INTO usuario (nombre,apellido,mail, nombre_usuario,clave, is_admin)
    VALUES (:nombre,:apellido,:nombre_usuario,:clave,:is_admin)');
    $consulta->bindValue(':nombre',$this->nombre);
    $consulta->bindValue(':apellido',$this->apellido);
    $consulta->bindValue(':mail',$this->mail);
    $consulta->bindValue(':nombre_usuario',$this->nombre_usuario);
    $consulta->bindValue(':clave',$this->clave);
    $consulta->bindValue(':is_admin',$this->is_admin);
    $consulta->execute();
}



}














?>