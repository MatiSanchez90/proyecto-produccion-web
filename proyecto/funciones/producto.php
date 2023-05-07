<?php
require_once('../configuracion/configuracion.php');
require_once('../modelo/conexion.php');
function getProducto(PDO $conexion1)
{
   $consulta1 = $conexion1->prepare('
       SELECT id_producto, nombre, descripcion, precio, imagen
       FROM producto 
        
    ');

   $consulta1->execute();

    return $consulta1->fetchAll();

}



?>