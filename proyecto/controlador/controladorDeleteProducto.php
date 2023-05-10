<?php 

$id = $_GET['id'];

require_once('../configuracion/configuracion.php');
require_once('../modelo/conexion.php');
require_once('../modelo/producto.php');


try {
    $producto = Producto::buscar($id); 
} catch (PDOException $e) {
    echo 'ha ocurrido un error';
    exit;
}


if(isset($_GET["id"])){
    $producto= new Producto(
        $_GET['nombre'],
        $_GET['descripcion'],
        $_GET['precio']
    );

    $producto->delete($id);
    header('location:../vistas/productos.php'); 

}

?>