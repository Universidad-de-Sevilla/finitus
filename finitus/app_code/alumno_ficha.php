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

$alumno = $_SESSION['alumno'];
$smarty->assign("alumno",$alumno);
$plantilla = "alumno_ficha.tpl";
?>