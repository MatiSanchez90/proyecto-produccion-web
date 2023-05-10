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
    $this->apellido= $p_apellido;
    $this->mail= $p_mail;
    $this->nombre_usuario= $p_nombre_usuario;
    $this->clave= $p_clave;
    $this->is_admin= $p_is_admin;
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
public function getIsAdmin(){
    return $this->is_admin;
}


public static function all(){
    $cnx = Conexion::getInstance();
    $consulta = $cnx->prepare('SELECT * FROM usuario');
    $consulta->execute();
    return $consulta->fetchALL();
}


private function insert(){
    $cnx = Conexion::getInstance();
    $consulta = $cnx->prepare('INSERT INTO usuario (nombre,apellido,mail,nombre_usuario,clave, is_admin)
    VALUES (:nombre,:apellido,:mail,:nombre_usuario,:clave, :is_admin)');
    $consulta->bindValue(':nombre',$this->nombre);
    $consulta->bindValue(':apellido',$this->apellido);
    $consulta->bindValue(':mail',$this->mail);
    $consulta->bindValue(':nombre_usuario',$this->nombre_usuario);
    $consulta->bindValue(':clave',$this->clave);
    $consulta->bindValue(':is_admin',$this->is_admin);
    $consulta->execute();
}

public static function buscar($id_usuario){
    $cnx = Conexion::getInstance();
    $consulta = $cnx->prepare('SELECT *
     FROM usuario WHERE id_usuario = :id_usuario');
    $consulta->bindValue(':id_usuario',$id_usuario);
    $consulta->execute();
    $consulta->setFetchMode(PDO::FETCH_OBJ);
    return $consulta ->fetch();
}

public  function update($id_usuario){
    $cnx= Conexion::getInstance();
    $consulta = $cnx->prepare('UPDATE usuario SET
    nombre = :nombre,
    apellido = :apellido,
    mail= :mail,
    nombre_usuario = :nombre_usuario,
    clave = :clave,
    is_admin = :is_admin
    WHERE id_usuario = :id_usuario');
    $consulta->bindValue(':id_usuario',$id_usuario);
    $consulta->bindValue(':nombre',$this->nombre);
    $consulta->bindValue(':apellido',$this->apellido);
    $consulta->bindValue(':mail',$this->mail);
    $consulta->bindValue(':nombre_usuario',$this->nombre_usuario);
    $consulta->bindValue(':clave',$this->clave);
    $consulta->bindValue(':is_admin',$this->is_admin);
    $consulta->execute();
    return $consulta;
}

public function delete($id_usuario){
    $cnx = Conexion::getInstance();
    $consulta = $cnx->prepare('DELETE FROM usuario WHERE id_usuario = :id_usuario');
    $consulta->bindParam(':id_usuario', $id_usuario);
    return $consulta->execute();
  
}



}














?>