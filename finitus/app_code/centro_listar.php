<?php
//---------------------------------------------------------------------------------------------------
// Proyecto: Finitus
// Archivo: centro_listar.php
// Tipo: controlador
// Hecho con Cascara - http://cascara.aletia8.com
//---------------------------------------------------------------------------------------------------
// Descripcion: Listado de Centros
//---------------------------------------------------------------------------------------------------
global $smarty;
global $plantilla;



$centro = new centro();
$centros = $centro->Find(true);

$smarty->assign("_nombre_pagina", "Listado de Centros");
$smarty->assign("centros", $centros);
$plantilla = "centro_listar.tpl";
?>
