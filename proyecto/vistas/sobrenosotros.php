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
    <!--CONTENIDO-->
    <br>
    <h1 class="text-center font-weight-bold">Quienes somos</h1>
    <br>
    <br>


    <div class="container">

        <div class="row justify-content-center">

            <div class="col-xs-12 col-xl-6 mrg mb-4"><img src="../img/local1.jpg" alt="Foto de local"></div>
            <div class="col-xs-12 col-xl-10 text-center">

                <p>ChiquitoPC inició sus actividades en el año 2009, fundada por dos jóvenes emprendedores argentinos.
                </p>
                <br>
                <p>El primer comercio se estableció en la ciudad de Morón, Gran Buenos Aires, y la actividad principal
                    era el soporte técnico informático. El negocio funcionaba como un taller de reparación, brindando
                    servicios en las zonas aledañas, pero con el tiempo fue creciendo y comenzó a diversificarse,
                    incorporando todo tipo de hardware para PC. Se crearon también cuentas en MercadoLibre y Facebook,
                    seguidas de una página web, lo que permitió que la empresa se acerque más a sus clientes y
                    promocione sus productos y servicios en Internet. </p>
            </div>
        </div>
        <br>
        <br>


        <div class="row justify-content-center">
            <div class="col-xs-12 col-xl-6 mrg order-6 mb-4"><img src="../img/local2.jpg" alt="Foto de local"></div>
            <div class="col-xs-12 col-xl-10 order-6 text-center">
                <br>
                <p>En el año 2013 dio su paso más grande al abrir su segunda sucursal en Capital Federal, ubicada en el
                    barrio de Flores. Este nuevo proyecto ponía en funcionamiento un local varias veces más grande que
                    el anterior, acercando a muchos potenciales nuevos clientes.</p>
                <br>
                <p>El éxito alcanzado luego de su apertura llevó a mudar la histórica sucursal de Morón, saliendo esta
                    vez de la galería en que se encontraba y abriendo en un comercio mucho más amplio a la calle. El
                    objetivo era ampliar la cartera de clientes aún más y fortalecer la presencia en la zona.</p>
            </div>

        </div>
        <br>
        <br>

        <div class="row justify-content-center">

            <div class="col-xs-12 col-xl-6 mrg mb-4"><img src="../img/local3.png" alt="Foto de local">
            </div>
            <div class="col-xs-12 col-xl-10 text-center">
                <p>Nuestra misión es
                    brindarles a nuestros clientes las mejores soluciones informáticas diferenciándonos de la
                    competencia.</p>
                <p> Nuestra visión es
                    convertirnos en una empresa líder en el mercado de la tecnología,
                    ofreciendo a nuestros clientes la mejor calidad de atención al precio más conveniente.</p>
                <p>-Particular: nos especializamos en entusiastas de PC Gamers y hardware de alta gama. De igual forma,
                    tenemos equipos y piezas para cubrir cualquier necesidad o requerimiento.</p>

                <p>Corporativo: brindamos soluciones a la medida de cada empresa. Productos de alta calidad, atención
                    inmediata en licencia y soporte.</p>

                <p>Revendedores: queremos que crezcas con nosotros, para ello disponemos de descuentos especiales
                    pensando en tu beneficio.</p>



            </div>



        </div>

    </div>

    <br>
    <br>
    <!-- FOOTER -->
    <?php require_once('../layout/_footer.php') ?>

    <script src="../lib/jquery/jquery-3.3.1.min.js"></script>
    <script src="../lib/popper/popper.min.js"></script>
    <script src="../lib/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>