<?php
require_once('../configuracion/configuracion.php');
require_once('../modelo/conexion.php');
require_once('../modelo/usuario.php');


$nombre = test_input($_POST["nombre"] ?? null);
$apellido = test_input($_POST["apellido"] ?? null);
$mail = test_input($_POST["mail"] ?? null);
$nombre_usuario = test_input($_POST["nombre_usuario"] ?? null);
$clave = test_input($_POST["clave"] ?? null);
$isAdmin = test_input($_POST["is_admin"] ?? null);

$errores = array();

if( isset($_POST["submit"]) ) {

    if( empty($nombre) ){
      array_push($errores, 'Usted debe ingresar un nombre.');
  }
  if( empty($apellido) ){
      array_push($errores ,'Usted debe ingresar un apellido.');
  }
  if( empty($mail) ){
      array_push($errores, 'Usted debe ingresar un mail.');
  }
  if( empty($clave) ){
      array_push($errores, 'Usted debe ingresar un password.');
  }
  
  if( count($errores) == 0 ){
      $usuario = new Usuario($nombre,$apellido,$mail,$nombre_usuario,$clave, $is_admin);
    
      }
  }

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}



















?>