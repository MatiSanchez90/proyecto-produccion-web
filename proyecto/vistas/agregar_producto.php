<?php
session_start();
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

    <div class="container tamano4 tamano5 tamano6 ">
        <div class="row">
            <div class="col-lg-6 col-xs-12 d-flex justify-content-center">
                <div>
                    <h1 class="font-weight-bold text-center">ALTA PRODUCTO</h1>
                    <ul>
                        <?php require_once('../controlador/controladorAddProducto.php') ?>
                        <?php foreach($errores as $error): ?>
                        <li class="text text-danger"> <?php echo $error ?> </li>
                        <?php endforeach ?>
                    </ul>
                    <img class="d-flex tamano7 margen" src="../img/chikitopc.png" alt="Logo de ChiquitoPC">
                </div>
            </div>
            <div class="container col-lg-6 col-xs-12">
                <form action="agregar_producto.php" method="post">
                    <fieldset class="ml-2">

                        <label for="nombre"><b>Nombre: </b></label>
                        <br>
                        <input type="text" name="nombre" placeholder="Nombre del articulo" required>
                        <br>
                        <label class="mt-2" for="descripcion"> <b>Descripción: </b> </label>
                        <br>
                        <textarea type="text" name="descripcion" placeholder=" Caracteristicas del producto" cols="72"
                            rows="3" maxlength="300" required></textarea>
                        <br>
                        <label for="precio"> <b>Precio: </b> </label>
                        <br>
                        <input type="number" name="precio" placeholder="Precio" min="0" max="10000000" required>
                        <br>
                        <button type="submit" class="btn btn-dark btn-block  mt-5" name="submit">Agregar
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