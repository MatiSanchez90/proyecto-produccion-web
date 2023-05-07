<?php 
require_once('../configuracion/configuracion.php');
//require_once('../modelo/conexion.php');
require_once('../funciones/producto.php');
//try{
  //$conexion1 = new PDO(
    //  'mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8', DB_USER, DB_PASSWORD);
//}catch(PDOException $e1){
  //echo "Falló la conexión: " . $e1->getMessage();
  //exit;
//}
$producto = getProducto($conexion1);



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
<!-- CONTENIDO -->



<div class="container">
        <h1 class="text-center"> Lista de productos </h1>
        <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col"> Nombre </th>
                    <th scope="col"> Descripcion </th>
                    <th scope="col"> Precio </th>
                    <th scope="col"> Imagen</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($producto as $p): ?>
                    <tr>
                        <td> <?php echo $p['nombre'] ?> </td>
                        <td> <?php echo $p['descripcion'] ?> </td>
                        <td> <?php echo $p['precio'] ?> </td>
                        <td>
                            <img src="<?php echo $p['imagen']?>" width="200px"alt="">
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>            
        </table>
                </div>
                </div>
 



  <!-- FOOTER -->
  <?php require_once('../layout/_footer.php') ?>

  <script src="../lib/jquery/jquery-3.3.1.min.js"></script>
  <script src="../lib/popper/popper.min.js"></script>
  <script src="../lib/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>