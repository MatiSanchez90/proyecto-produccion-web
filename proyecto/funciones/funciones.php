<?php
require_once('../configuracion/configuracion.php');
require_once('../modelo/conexion.php');
function countEquipos(PDO $conexion)
{
    
    $consulta = $conexion->prepare('
    SELECT COUNT(1)
    FROM formulario
    ');
    $consulta->execute();
    return $consulta->fetchColumn();
    
}

function getEquipos(PDO $conexion, int $pagina_actual, int $cuantos_por_pagina) 
{
    $desde = ($pagina_actual - 1) * $cuantos_por_pagina;
    $consulta = $conexion->prepare('

    SELECT id_formulario, nombre, mensaje, email
     FROM formulario
     LIMIT :desde, :cuantos_por_pagina
    ');

    $consulta->bindValue(':desde', $desde, PDO::PARAM_INT);
    $consulta->bindValue(':cuantos_por_pagina', $cuantos_por_pagina, PDO::PARAM_INT);
    $consulta->execute();


    return $consulta->fetchAll();

}