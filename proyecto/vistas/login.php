<?php 
    include_once '../../modelo/conexion.php';
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
    <?php require_once('../layout/_nav.php');
    ?>
    <!-- CONTENIDO -->
    <h5 class="text-dark">Ingrese su usuario ó cree una cuenta si es un nuevo usuario.</h5>
    <div class="container">
        <div class="login-dark mt-5">
            <form action="validar_usuario.php" method="POST">

                <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
                <div class="form-group"><input class="form-control" type="text" name="usuario" placeholder="Usuario">
                </div>
                <div class="form-group"><input class="form-control" type="password" name="clave" placeholder="Clave">
                </div>
                <div class="btn-submit">
                    <div class="form-group"><button type="submit" class="btn btn-primary btn-block">Ingresar</button>
                    </div>
                    <div><a class="btn btn-primary btn-block btn2" href="formulario.php">Crear Usuario</a></div>
                </div>
            </form>
        </div>
    </div>
    <!-- FOOTER -->
    <?php require_once('../layout/_footer.php') ?>
    <script src="../lib/jquery/jquery-3.3.1.min.js"></script>
    <script src="../lib/popper/popper.min.js"></script>
    <script src="../lib/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>