<?php
//---------------------------------------------------------------------------------------------------
// Proyecto: 
// Archivo: personas_listar.php
// Hecho con Cascara - http://cascara.aletia8.com
//---------------------------------------------------------------------------------------------------
// Descripcion: Muestra la ficha de datos del alumno
//---------------------------------------------------------------------------------------------------
global $smarty;
global $plantilla;

if (isset($_REQUEST["busqueda"]))
{
  $busqueda = sanitize($_REQUEST["busqueda"], SQL);
  $condicion = "nombre LIKE '%$busqueda%' OR apellidos LIKE '%$busqueda%' OR correo LIKE '%$busqueda%' OR nif LIKE '%$busqueda%'";
  $smarty->assign("busqueda", $busqueda);
}
else
{
  $condicion = true;
}
$persona = new persona();
$adodb = $persona->DB();
$consulta = "SELECT * FROM personas INNER JOIN alumnos ON personas.id = alumnos.persona_id WHERE $condicion";
$resultado = $adodb->getAssoc($consulta);
$smarty->assign("personas", $resultado);

$smarty->assign("_nombre_pagina", "Datos personales");
$plantilla = "personas_listar.tpl";
?>
