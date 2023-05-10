<?php 
session_start();
require_once('../configuracion/configuracion.php');
require_once('../modelo/conexion.php');
require_once('../modelo/usuario.php');
require_once('../controlador/controladorUpdateUsuario.php');

try {
    $usuario = Usuario::buscar($id);
} catch (PDOException $e) {
  echo 'ha ocurrido un error';
  exit;
}
?>

<!doctype html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../lib/bootstrap/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/4dfe7c3924.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../estilo/estilo.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1+Code:wght@300;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/150031267a.js" crossorigin="anonymous"></script>
    <title>ChiquitoPC</title>
</head>

<body>
    <!--NAVBAR-->
    <nav class="navbar navbar-expand-lg navbar-light fondo">
        <a class="navbar-brand text-white font-weight-bold font" href="../vistas/index.php"><img
                src="../img/chikitopclogo.png" alt="Chiquito PC Logo" class="tamano">CHIQUITO PC</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        </div>
        <div class="collapse navbar-collapse opciones_usuario" id="navbarTogglerDemo03">
            <ul class="navbar-nav mt-lg-0">

                <li class="nav-item">
                    <a class="nav-link text-white"
                        href="../vistas/perfil.php"><?php echo 'Bienvenido Admin ('.$_SESSION["nombre"].')';?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="../modelo/cierre_sesion.php">Cerrar
                        Sesion</a>
                </li>
            </ul>
        </div>
    </nav>


    <!--CONTENIDO-->

    <div class="container tamano4 tamano6">
        <div class="row">
            <div class="col-lg-6 col-xs-12 d-flex justify-content-center">
                <div>
                    <h1 class="font-weight-bold text-center">ACTUALIZAR PRODUCTO</h1>
                    <img class="d-flex tamano7 margen" src="../img/chikitopc.png" alt="Logo de ChiquitoPC">
                </div>
            </div>
            <div class="container col-lg-6 col-xs-12">
                <form action="" method="post">
                    <fieldset>
                        <label for="nombre"> <b>Nombre: </b> </label>
                        <br>
                        <input type="text" name="nombre" value="<?php echo $usuario->nombre ?>">
                        <br>
                        <label class="mt-2" for="apellido"> <b>Apellido: </b> </label>
                        <br>
                        <input type="text" name="apellido" value="<?php echo $usuario->apellido ?>">
                        <br>
                        <label for="mail"> <b>Mail: </b> </label>
                        <br>
                        <input type="text" name="mail" min="0" max="100000000" value="<?php  echo $usuario->mail ?>">
                        <br>
                        <label class="mt-2" for="nombre_usuario"> <b>Nombre Usuario: </b> </label>
                        <br>
                        <input type="text" name="nombre_usuario" min="0" max="100000000"
                            value="<?php  echo $usuario->nombre_usuario ?>">
                        <br>
                        <label class="mt-2" for="clave"> <b>Clave: </b> </label>
                        <br>
                        <input type="text" name="clave" min="0" max="100000000" value="<?php  echo $usuario->clave ?>">
                        <br>
                        <label class="mt-2" for="is_admin"> <b>Es Admin: </b> </label>
                        <br>
                        <input type="text" name="is_admin" min="0" max="100000000"
                            value="<?php  echo $usuario->is_admin ?>">
                        <br>
                        <button type="submit" class="btn btn-block btn-dark mt-3" name="submit">Actualizar
                            Usuario</button>
                        <div><a class="btn btn-secondary btn-block btn2 mt-3" href="../vistas/usuarios.php">Volver
                                atras</a>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>

    <!-- FOOTER -->
    <?php require_once('../layout/_footer.php') ?>
    <script src="../lib/jquery/jquery-3.3.1.min.js"></script>
    <script src="../lib/popper/popper.min.js"></script>
    <script src="../lib/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>