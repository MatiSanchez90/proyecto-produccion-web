<?php
require_once('../configuracion/configuracion.php');
require_once('../modelo/conexion.php');
require_once('../modelo/producto.php');





$nombre = test_input($_POST["nombre"] ?? null);
$descripcion = test_input($_POST["descripcion"] ?? null);
$precio = test_input($_POST["precio"] ?? null);



$errores = array();

if( isset($_POST["submit"]) ) {

  if( empty($nombre) ){
    array_push($errores, 'Usted debe ingresar un nombre.');
}

if( empty($descripcion) ){
    array_push($errores, 'Usted debe dejar alguna descripcion');
}

if( empty($precio) ){
    array_push($errores, 'Usted debe ingresar un precio');
}
if( count($errores) == 0 ){
    $producto = new Producto($nombre,$descripcion,$precio);
  
}
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}



















?>