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
    <?php 
    require_once('../layout/_nav.php');
    require_once('../controlador/controladorAddUsuario.php') ;
    foreach($errores as $error);
    ?>
    <!-- CONTENIDO -->
    <div class="registration-form">
        <form action="registro.php" method="post">
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
                <input type="password" class="form-control item" name="clave" placeholder="Password">
            </div>
            <div class="form-group">
                <input type="password" class="form-control item" name="is_admin" placeholder="Tipo de Usuario">
            </div>
            <div class="form-group">
                <button type="submit" name="registro" class="btn btn-block create-account">Crear Usuario</button>
            </div>
            <div class="form-group">
                <a class="btn btn-block create-account2" href="login.php">Volver atrás</a>
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