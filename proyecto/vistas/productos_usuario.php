<?php 
session_start();
require_once('../configuracion/configuracion.php');
require_once('../modelo/conexion.php');
require_once('../modelo/producto.php');
require_once('../controlador/controladorAddProducto.php');

try {
  $producto = Producto::all();
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
            <?php require_once('../controlador/controladorAddUsuario.php') ?>
            <?php foreach($erroresUsuario as $error): ?>
            <li class="text text-danger"> <?php echo $error ?> </li>
            <?php endforeach ?>
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link col-md-6 text-white" href="../vistas/productos_usuario.php">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="../vistas/soporte.php">Soporte</a>
                </li>
                <li>
                    <a class="nav-link text-white" href="../vistas/sobrenosotros.php">Nosotros</a>
                </li>
            </ul>
        </div>
        <div class="collapse navbar-collapse opciones_usuario" id="navbarTogglerDemo03">
            <ul class="navbar-nav mt-lg-0">

                <li class="nav-item">
                    <a class="nav-link text-white" href="../vistas/login.php" <?php session_destroy();?>>Cerrar
                        Sesion</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- CONTENIDO -->
    <div class="container tamano4 tamano5 tamano6">
        <h1 class="text-center mt-5"> Lista de productos </h1>
        <div class="container">
            <table class="table mt-5">
                <thead>
                    <tr>
                        <th scope="col"> Nombre </th>
                        <th scope="col"> Descripcion </th>
                        <th scope="col"> Precio </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($producto as $p): ?>
                    <tr>
                        <td> <?php echo $p['nombre'] ?> </td>
                        <td> <?php echo $p['descripcion'] ?> </td>
                        <td> <?php echo $p['precio'] ?> </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>

            </table>
            <div><a class="btn btn-secondary btn-block btn2 mb-3" href="index.php">Volver atras</a></div>
        </div>
    </div>




    <!-- FOOTER -->
    <?php require_once('../layout/_footer.php') ?>

    <script src="../lib/jquery/jquery-3.3.1.min.js"></script>
    <script src="../lib/popper/popper.min.js"></script>
    <script src="../lib/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>