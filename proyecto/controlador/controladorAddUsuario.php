<?php
require_once('../configuracion/configuracion.php');
require_once('../modelo/conexion.php');
require_once('../modelo/usuario.php');


$nombre = test_inputUsuario($_POST["nombre"] ?? null);
$apellido = test_inputUsuario($_POST["apellido"] ?? null);
$mail = test_inputUsuario($_POST["mail"] ?? null);
$nombre_usuario = test_inputUsuario($_POST["nombre_usuario"] ?? null);
$clave = test_inputUsuario($_POST["clave"] ?? null);

$erroresUsuario = array();

if( isset($_POST["submit"]) ) {

    if( empty($nombre) ){
      array_push($erroresUsuario, 'Usted debe ingresar un nombre.');
  }
  if( empty($apellido) ){
      array_push($erroresUsuario ,'Usted debe ingresar un apellido.');
  }
  if( empty($mail) ){
      array_push($erroresUsuario, 'Usted debe ingresar un mail.');
  }
  if( empty($nombre_usuario) ){
    array_push($erroresUsuario, 'Usted debe ingresar un usuario.');
}
  if( empty($clave) ){
      array_push($erroresUsuario, 'Usted debe ingresar un password.');
  }
  
  if( count($erroresUsuario) == 0 ){
      $usuario = new Usuario($nombre,$apellido,$mail,$nombre_usuario,$clave, $is_admin="false");
    
      }
  }

function test_inputUsuario($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}



















?>