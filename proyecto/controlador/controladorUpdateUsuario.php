<?php

$id = $_REQUEST['id'] ?? null;
require_once('../configuracion/configuracion.php');
require_once('../modelo/conexion.php');
require_once('../modelo/usuario.php');

try {
    $usuario = Usuario::buscar($id);  
} catch (PDOException $e) {
    echo 'ha ocurrido un error';
    exit;
}

if(isset($_POST["submit"])){
   $usuario= new Usuario(
        $_POST['nombre'],
        $_POST['apellido'],
        $_POST['mail'],
        $_POST['nombre_usuario'],
        $_POST['clave'],
        $_POST['is_admin']
        );

        $usuario->update($id);
        header('location: ../vistas/usuarios.php'); 
}

require_once('../vistas/actualizar_usuario.php');

?>