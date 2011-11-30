<?php
//---------------------------------------------------------------------------------------------------
// Proyecto: 
// Archivo: alumno_ficha.php
// Tipo: controlador
// Desarrolladores: 
// Hecho con Cascara - http://cascara.aletia8.com
//---------------------------------------------------------------------------------------------------
// Descripcion: Muestra la ficha de datos del alumno
//---------------------------------------------------------------------------------------------------
global $smarty;
global $plantilla;
$smarty->assign('_javascript' , array('correo_validar','ordenatabla'));
$smarty->assign('_nombre_pagina' , 'Ficha de datos personales');
$smarty->assign('_usuario' , '');
$smarty->assign('aviso' , '');
$smarty->assign('error' , '');

$alumno = $_SESSION['alumno'];
$smarty->assign("alumno",$alumno);
$plantilla = "alumno_ficha.tpl";
?>