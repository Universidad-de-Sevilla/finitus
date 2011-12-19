<?php
//---------------------------------------------------------------------------------------------------
// Proyecto: 
// Archivo: persona_mostrar.php
// Tipo: controlador
// Hecho con Cascara - http://cascara.aletia8.com
//---------------------------------------------------------------------------------------------------
// Descripcion: Muestra los datos de una persona
//---------------------------------------------------------------------------------------------------
global $smarty;
global $plantilla;
global $usuario;

$smarty->assign("persona",$usuario);
$smarty->assign("_nombre_pagina", "Datos personales");
$plantilla = "persona_mostrar.tpl";
?>
