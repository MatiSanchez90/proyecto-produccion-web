<?php
class Producto{
    private $nombre; 
    private $descripcion;
    private $precio;
    
    
    
    
    public function __construct($p_nombre,$p_descripcion,$p_precio,){
        $this->nombre = $p_nombre;
        $this->descripcion= $p_descripcion;
        $this->precio= $p_precio;
        $this->insert();
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

private function insert(){
    $cnx = Conexion::getInstance();
    $consulta = $cnx->prepare('INSERT INTO producto (id_producto,nombre,descripcion,precio,imagen)
     VALUES (:id,:nombre, :descripcion,:precio,:imagen)');
    $consulta->bindValue(':id','');
    $consulta->bindValue(':nombre',$this->nombre);
    $consulta->bindValue(':descripcioin',$this->descripcion);
    $consulta->bindValue(':precio',$this->precio);
    $consulta->bindValue(':imagen','');
    $consulta->execute();

}


}


























?>