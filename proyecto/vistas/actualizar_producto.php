<?php 
session_start();
require_once('../configuracion/configuracion.php');
require_once('../modelo/conexion.php');
require_once('../modelo/producto.php');
require_once('../controlador/controladorUpdateProducto.php');

try {
    $producto = Producto::buscar($id);
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

    <div class="container tamano4 tamano5 tamano6">
        <div class="row">
            <div class="col-lg-6 col-xs-12">
                <div>
                    <h1 class="font-weight-bold text-center">ACTUALIZAR PRODUCTO</h1>
                    <img class="d-flex tamano7 margen" src="../img/chikitopc.png" alt="Logo de ChiquitoPC">
                </div>
            </div>
            <div class="container col-lg-6 col-xs-12">
                <form action="" method="post">
                    <fieldset class="ml-2">
                        <label for="nombre"> <b>Nombre: </b></label>
                        <br>
                        <input type="text" name="nombre" value="<?php echo $producto->nombre ?>">
                        <br>
                        <label class="mt-2" for="descripcion"><b>Descripción: </b></label>
                        <br>
                        <textarea type="text" name="descripcion" cols="72" rows="3"
                            maxlength="300"><?php  echo $producto->descripcion ?></textarea>
                        <br>
                        <label for="precio"> <b>Precio: </b></label>
                        <br>
                        <input type="number" name="precio" min="0" max="100000000"
                            value="<?php  echo $producto->precio ?>">
                        <br>
                        <button type="submit" class="btn btn-block btn-dark btn2  mt-5" name="submit">Actualizar
                            Producto</button>
                        <div><a class="btn btn-secondary btn-block btn2 mt-3" href="productos.php">Volver atras</a>
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