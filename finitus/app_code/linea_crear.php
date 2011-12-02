<?php
//---------------------------------------------------------------------------------------------------
// Proyecto: Finitus
// Archivo: lineas_crear.php
// Tipo: controlador
// Desarrolladores: 
// Hecho con Cascara - http://cascara.aletia8.com
//---------------------------------------------------------------------------------------------------
// Descripcion: Muestra un formulario para que el profesor cree una nueva linea
//---------------------------------------------------------------------------------------------------
global $smarty;
global $plantilla;

$titulo = new titulo();
$titulos = $titulo->Find("true");
$smarty->assign("titulos",$titulos);

$area = new area();
$areas = $area->Find("true");
$smarty->assign("areas",$areas);


$smarty->assign("_nombre_pagina", "Nueva línea de investigación");
$plantilla = "linea_crear.tpl";
?>
