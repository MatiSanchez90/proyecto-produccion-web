<?php 

$id = $_GET['id'];

require_once('../configuracion/configuracion.php');
require_once('../modelo/conexion.php');
require_once('../modelo/usuario.php');


try {
    $usuario = Usuario::buscar($id); 
} catch (PDOException $e) {
    echo 'ha ocurrido un error';
    exit;
}


if(isset($_GET["id"])){
    $usuario= new Usuario(
        $_GET['nombre'],
        $_GET['apellido'],
        $_GET['mail'],
        $_GET['nombre_usuario'],
        $_GET['clave'],
        $_GET['is_admin']
    );

    $usuario->delete($id);
    header('location:../vistas/usuarios.php'); 

}

?>