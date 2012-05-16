<?php
//---------------------------------------------------------------------------------------------------
// Proyecto: 
// Archivo: lineas_listar.php
// Hecho con Cascara - http://cascara.aletia8.com
//---------------------------------------------------------------------------------------------------
// Descripcion: Muestra la ficha de datos del alumno
//---------------------------------------------------------------------------------------------------
global $smarty;
global $plantilla;

$linea = new linea();
$lineas = $linea->Find("true");

$smarty->assign("lineas",$lineas);
$smarty->assign("_nombre_pagina", "Datos personales");
$plantilla = "lineas_listar.tpl";
?>
