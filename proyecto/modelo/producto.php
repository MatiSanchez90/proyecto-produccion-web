<?php
class Producto{
    private $nombre; 
    private $descripcion;
    private $precio;
    
    
    public function __construct($p_nombre,$p_descripcion,$p_precio,){
        $this->nombre = $p_nombre;
        $this->descripcion= $p_descripcion;
        $this->precio= $p_precio;
    }
  
    
    public function getNombre(){
        return $this->nombre;
    }
    public function setNombre($p_nombre){
        $this->nombre = $p_nombre;
    }
    public function getPrecio(){
        return $this->precio;
    }
    public function setPrecio($p_precio){
        $this->precio = $p_precio;
    }
    
    public function getDescripcion(){
        return $this->descripcion;
    }
    public function setDescripcion($p_descripcion){
        $this->descripcion = $p_descripcion;
    }





public static function all(){
    $cnx = Conexion::getInstance();
    $consulta = $cnx->prepare('SELECT * FROM producto');
    $consulta->execute();
    return $consulta->fetchALL();
}

public function insert(){
    $cnx = Conexion::getInstance();
    $consulta = $cnx->prepare('INSERT INTO producto (nombre,descripcion,precio)
    VALUES (:nombre,:descripcion,:precio)');
    $consulta->bindValue(':nombre',$this->nombre);
    $consulta->bindValue(':descripcion',$this->descripcion);
    $consulta->bindValue(':precio',$this->precio);
    $consulta->execute();
}

public static function buscar($id){
    $cnx = Conexion::getInstance();
    $consulta = $cnx->prepare('SELECT *
     FROM producto WHERE id = :id');
    $consulta->bindValue(':id',$id);
    $consulta->execute();
    $consulta->setFetchMode(PDO::FETCH_OBJ);
    return $consulta ->fetch();
}

public  function update($id){
    $cnx= Conexion::getInstance();
    $consulta = $cnx->prepare('UPDATE producto SET
    nombre = :nombre,
    descripcion = :descripcion,
    precio= :precio
    WHERE id = :id');
    $consulta->bindValue(':id',$id);
    $consulta->bindValue(':nombre',$this->nombre);
    $consulta->bindValue(':descripcion',$this->descripcion);
    $consulta->bindValue(':precio',$this->precio);
    $consulta->execute();
    return $consulta;
}


public function delete($id){

    $cnx = Conexion::getInstance();
    $consulta = $cnx->prepare('DELETE FROM producto WHERE id = :id');
    $consulta->bindParam(':id', $id);
    return $consulta->execute();
  
}






}


























?>