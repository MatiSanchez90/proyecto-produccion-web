<?php require_once ('../configuracion/configuracion.php')?>
<?php require_once ('../funciones/paginador.php'); ?>
<?php require_once ('../funciones/funciones.php'); ?>
<?php require_once ('../modelo/conexion.php'); ?>
<?php
$pag = $_GET['pag'] ?? 1;
$cantidad_registros = countEquipos($conexion);
echo $cantidad_registros;
$paginacion = paginador($cantidad_registros, $pag, 8);
$equipos = getEquipos($conexion, $pag, 8);
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



<h1 style="text-align:center">Listado de gente</h1>

<table class="table">
            <thead>
                <tr>
                    <th scope="col"> id_formulario </th>
                    <th scope="col"> Nombre </th>
                    <th scope="col"> Email </th>
                    <th scope="col"> Mensaje </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($equipos as $equipo): ?>
                    <tr>
                    <td> <?php echo $equipo['id_formulario'] ?> </td>
                        <td> <?php echo $equipo['nombre'] ?> </td>
                        <td> <?php echo $equipo['email'] ?> </td>
                        <td> <?php echo $equipo['mensaje'] ?> </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>            
</table>
<nav aria-label="Page navigation example">
            <ul class="pagination">
                <?php if($paginacion['anterior']): ?>
                    <li class="page-item">
                        <a class="page-link" href="consulta.php?pag=<?php echo $paginacion['primero'] ?>"> Primero </a>                        
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="consulta.php?pag=<?php echo $paginacion['anterior'] ?>"> <?php echo $paginacion['anterior'] ?> </a>
                    </li>
                <?php endif ?>
                <li class="page-item active"> 
                    <span class="page-link">
                        <?php echo $paginacion['actual'] ?> 
                    </span>
                </li>
                <?php if($paginacion['siguiente']): ?>
                    <li class="page-item">
                        <a class="page-link" href="?pag=<?php echo $paginacion['siguiente'] ?>"> <?php echo $paginacion['siguiente'] ?> </a>
                    </li>
                    <li class="page-item">
                    <a class="page-link" href="?pag=<?php echo $paginacion['ultimo'] ?>"> Último </a>
                    </li>
                <?php endif ?>
            </ul>
        </nav>



<!-- FOOTER -->
  <?php require_once('../layout/_footer.php') ?>
  <script src="lib/jquery/jquery-3.3.1.min.js"></script>
  <script src="lib/popper/popper.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
