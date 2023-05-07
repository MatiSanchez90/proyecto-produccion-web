<?php require_once('../configuracion/configuracion.php');
require_once('../modelo/conexion.php');
$error = NULL;
// INSERTAR ADENTRO DE LA BASE
if (is_null($error)) {
  try {
    $stmt = $conexion->prepare("INSERT INTO `formulario` (`nombre`, `email`, `mensaje`) VALUES (?, ?, ?)");
    $stmt->execute([$_POST["nombre"], $_POST["email"], $_POST["mensaje"]]);
  } catch (PDOException $e) { 
    echo "Fallo la conexion" . $error = $e->getMessage();
    exit;
}
}
// RESULTADO
echo is_null($error) ? "OK" : $error ;
?>