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
        <a class="navbar-brand text-white font-weight-bold font" href="#"><img src="../img/chikitopclogo.png"
                alt="Chiquito PC Logo" class="tamano">CHIQUITO PC</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            </ul>
        </div>
        <div class="collapse navbar-collapse opciones_usuario" id="navbarTogglerDemo03">
        </div>
    </nav>
    <!-- CONTENIDO -->
    <div class="container">
        <h1 class="mt-5">Crear nuevo usuario.</h1>
        <form action="registro.php" method="post">
            <ul>
                <?php require_once('../controlador/controladorAddUsuario.php') ?>
                <?php foreach($erroresUsuario as $error): ?>
                <li class="text text-danger"> <?php echo $error ?> </li>
                <?php endforeach ?>
            </ul>
            <div class="form-icon">
                <span><i class="icon icon-user"></i></span>
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" name="nombre" placeholder="Nombre">
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" name="apellido" placeholder="Apellido">
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" name="mail" placeholder="Email">
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" name="nombre_usuario" placeholder="Usuario">
            </div>
            <div class="form-group">
                <input type="password" class="form-control item" name="clave" placeholder="Clave">
            </div>
            <div class="form-group">
                <button type="submit" name="submit" class="btn btn-dark btn-block create-account">Crear
                    Usuario</button>
            </div>
            <div class="form-group">
                <a class="btn btn-block btn-secondary create-account2" href="login.php">Volver atrás</a>
            </div>
        </form>
        <div class="social-media">
        </div>
    </div>
    <!-- FOOTER -->
    <?php require_once('../layout/_footer.php') ?>
    <script src="../lib/jquery/jquery-3.3.1.min.js"></script>
    <script src="../lib/popper/popper.min.js"></script>
    <script src="../lib/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>