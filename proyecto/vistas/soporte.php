<?php

require_once('../funciones/validador.php');
require_once('../configuracion/configuracion.php');


$nombre = test_input($_POST["nombre"] ?? null);
$email = test_input($_POST["email"] ?? null);
$mensaje = test_input($_POST["mensaje"] ?? null);

$errores = array();

if( isset($_POST["submit"]) ) {

  if( empty($nombre) ){
    array_push($errores, 'Usted debe ingresar un nombre.');
}

if( filter_var($email, FILTER_VALIDATE_EMAIL) == FALSE ){
  array_push($errores, 'Usted debe ingresar un correo electrónico con formato válido.');
}

  if( empty($mensaje) ){
    array_push($errores, 'Usted debe dejar algun mensaje.');
}

if( count($errores) == 0 ){
  require "insertdatabase.php";
}
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
<?php require_once('../layout/_nav.php') ?>


<!--CONTENIDO-->

  <div class="container tamano4 tamano5 tamano6 d-flex justify-content-center">
    <div class="row">
      <div class="col-lg-6 col-xs-12 d-flex justify-content-center">
        <div>
          <h1 class="font-weight-bold text-center">¡CONTACTANOS!</h1>
          <ul>
            <?php foreach($errores as $error): ?>
                <li class="text text-danger"> <?php echo $error ?> </li>
            <?php endforeach ?>
        </ul>
          <img class="d-flex tamano7 margen" src="../img/chikitopc.png" alt="Logo de ChiquitoPC">
          <p class="text-center font-weight-bold">Usá el formulario, llamanos gratuitamente al <br /> 0800-999-1111 de
            lunes a sábado de 9 a 20hs o <br />escribinos por Whatsapp al +54 9 11-2233-4455.</p>
          <p class="text-center font-weight-bold">Haremos todo lo posible para contestarte a la brevedad.</p>
        </div>
      </div>
<div class="container d-flex justify-content-center col-lg-6 col-xs-12">
    <form action="soporte.php" method="post">
    <fieldset>
    <label for="nombre"> Nombre: </label>
      <br>
              <input type="text" name="nombre" size="70" required >
              <br>
              <label for="email"> Email: </label>
              <br>
              <input type="email" name="email" size="70" required>
              <br>
              <label for="mensaje"> Mensaje </label>
              <br>
              <textarea name="mensaje" cols="72" rows="10" maxlength="500" required></textarea>
              <br>
              <button type="submit" class="btn btn-primary" name="submit">Enviar</button>
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