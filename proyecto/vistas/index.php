
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
<!-- CONTENIDO -->
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="../img/carrusel1.jpg" alt="Primer carrousel">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="../img/carrusel2.jpg" alt="Segundo carrousel">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="../img/carrusel3.jpg" alt="Tercer carrousel">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <div class="text-center">
    <h1> Especializados en el armado <br> de computadoras <br> de alto rendimiento</h1>
    <p class="tamano3">En ChiquitoPC buscamos destacar por nuestro conocimiento e <br />intentamos
      establecernos como la opción ideal para sus compras de <br />tecnología. Todos nuestros vendedores se encuentran
      altamente <br />capacitados para asesorarlo y ofrecerle exactamente lo que necesita</p>
  </div>
  <br>
  <div class="container tamano9">
    <h2 class="text-center font-weight-bold">Ultimas noticias</h2>
    <br>
    <div class="row">
      <div class="col-sm-12 text-center col-md-4">
        <a href="https://www.profesionalreview.com/2021/11/24/asus-tuf-gaming-z690-plus-wifi-d4-review/"><img class="d-inline" src="../img/nlogo1.png" alt="Noticia Motherboard"></a>
      </div>
      <div class="col-sm-12 col-md-4 text-center">
        <a href="https://lachicagamer.com/"><img class="d-inline" src="../img/nlogo2.png" alt="Noticias de la pagina la chica gamer"></a>
      </div>
      <div class="col-sm-12 col-md-4 text-center">
        <a href="https://larepublica.pe/videojuegos/2021/11/30/ps5-pro-y-ps5-slim-artista-imagina-como-lucirian-las-proximas-consolas-de-sony/"><img class="d-inline" src="../img/nlogo3.png" alt="PS5 PRO Y SLIM Noticia"></a>
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