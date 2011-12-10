<?php
//---------------------------------------------------------------------------------------------------
// Proyecto: Finitus
// Archivo: error404.php
// Tipo: controlador
// Hecho con Cascara - http://cascara.aletia8.com
//---------------------------------------------------------------------------------------------------
// Descripcion: Muestra un error 404 - recurso no encontrado
//---------------------------------------------------------------------------------------------------
global $smarty;
global $plantilla;

$smarty->assign("_nombre_pagina", "Error 404: la página solicitada no existe");
$plantilla = "error404.tpl";
?>
