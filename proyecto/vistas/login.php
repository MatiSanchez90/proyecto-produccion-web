<?php 
session_start();
require_once('../configuracion/configuracion.php');
require_once('../modelo/conexion.php');
require_once('../modelo/usuario.php');


try {
  $usuario = Usuario::all();
} catch (PDOException $e) {
  echo 'Ha ocurrido un error';
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1+Code:wght@300;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../estilo/estilo.css">
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
            <?php require_once('../controlador/controladorAddUsuario.php') ?>
            <?php foreach($erroresUsuario as $error): ?>
            <li class="text text-danger"> <?php echo $error ?> </li>
            <?php endforeach ?>
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            </ul>
        </div>
        <div class="collapse navbar-collapse opciones_usuario" id="navbarTogglerDemo03">
        </div>
    </nav>

    <!-- CONTENIDO -->
    <div class="container">
        <h1 class="mt-5">Inicie sesión ó cree una cuenta nueva.</h1>
        <div class="login-dark mt-5">
            <form method="post">
                <ul>
                    <?php require_once('../controlador/controladorAddUsuario.php') ?>

                    <?php foreach($erroresUsuario as $error): ?>
                    <li class="text text-danger"> <?php echo $error ?> </li>
                    <?php endforeach ?>
                </ul>

                <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
                <div class="form-group"><input class="form-control" type="text" name="nombre_usuario"
                        placeholder="Usuario">
                </div>
                <div class="form-group"><input class="form-control" type="password" name="clave" placeholder="Clave">
                </div>
                <div class="btn-submit">
                    <div class="form-group"><button type="submit" class="btn btn-dark btn-block">Ingresar</button>
                    </div>
                    <div><a class="btn btn-secondary btn-block btn2" href="registro.php">Crear Usuario</a></div>
                </div>
            </form>

            <?php 
            @$usuarioEntrante = $_POST["nombre_usuario"];
            @$claveEntrante = $_POST["clave"];
  
            foreach($usuario as $usu): 
                
               if($usu["nombre_usuario"] == $usuarioEntrante && $usu["clave"] == $claveEntrante){
                $_SESSION['nombre'] = $usu["nombre"];
               
             /*   echo '<script type="text/javascript">
                          window.onload = function () { alert("Bienvenido"); }
            </script>';*/
            header("Location: http://localhost:8080/TP1/proyecto-produccion-web/proyecto/vistas/index.php");
            }else{
         /*   echo '<script type="text/javascript">
            window.onload = function() {
                alert("Usuario o clave incorrectos.");
            }
            </script>';*/

            }
        endforeach;
        ?>
        </div>
    </div>
    <!-- FOOTER -->
    <?php require_once('../layout/_footer.php   ') ?>
    <script src="../lib/jquery/jquery-3.3.1.min.js"></script>
    <script src="../lib/popper/popper.min.js"></script>
    <script src="../lib/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>