

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
          <h1 class="font-weight-bold text-center">ALTA PROUCTO</h1>
          <ul>
            <?php require_once('../controlador/controladorAddProducto.php') ?>
            <?php foreach($errores as $error): ?>
                <li class="text text-danger"> <?php echo $error ?> </li>
            <?php endforeach ?>
        </ul>
          <img class="d-flex tamano7 margen" src="../img/chikitopc.png" alt="Logo de ChiquitoPC">
        </div>
      </div>
<div class="container d-flex justify-content-center col-lg-6 col-xs-12">
    <form action="agregar_producto.php" method="post">
    <fieldset>
    <label for="nombre"> Nombre: </label>
      <br>
      <input type="text" name="nombre" placeholder="ingrese nombre del articulo" required>
              <br>
              <label for="descripcion"> Descripcion: </label>
              <br>
              <textarea type="text" name="descripcion" placeholder="caracteristicas del producto" cols="72" rows="3" maxlength="300" required></textarea>
              <br>
              <label for="precio"> Precio </label>
              <br>
              <input type="number" name="precio" placeholder="ingrese precio" min="0" max="1000000" required>
              <br>
              <button type="submit" class="btn btn-primary" name="submit">Agregar Producto</button>
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