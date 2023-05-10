<?php

$id = $_REQUEST['id'] ?? null;

require_once('../configuracion/configuracion.php');
require_once('../modelo/conexion.php');
require_once('../modelo/producto.php');

try {
    $producto = Producto::buscar($id);  
} catch (PDOException $e) {
    echo 'ha ocurrido un error';
    exit;
}

if(isset($_POST["submit"])){
   $producto= new Producto(
        $_POST['nombre'],
        $_POST['descripcion'],
        $_POST['precio']
        );

        $producto->update($id);
        header('location: ../vistas/productos.php'); 
}

require_once('../vistas/actualizar_producto.php');

?>