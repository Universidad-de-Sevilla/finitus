<?php
//---------------------------------------------------------------------------------------------------
// Proyecto: 
// Archivo: lineas_listar.php
// Tipo: controlador
// Desarrolladores: 
// Hecho con Cascara - http://cascara.aletia8.com
//---------------------------------------------------------------------------------------------------
// Descripcion: Muestra la ficha de datos del alumno
//---------------------------------------------------------------------------------------------------
global $smarty;
global $plantilla;
$smarty->assign('_javascript' , '');
$smarty->assign('_nombre_pagina' , 'L�neas de investigaci�n propuesta');
$smarty->assign('_usuario' , '');
$smarty->assign('aviso' , '');
$smarty->assign('error' , '');

$linea = new linea();
$lineas = $linea->Find("true");

$smarty->assign("lineas",$lineas);
$plantilla = "lineas_listar.tpl";
?>