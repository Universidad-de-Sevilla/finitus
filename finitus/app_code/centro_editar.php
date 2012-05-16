<?php
//---------------------------------------------------------------------------------------------------
// Proyecto: Finitus
// Archivo: centro_editar.php
// Tipo: controlador
// Hecho con Cascara - http://cascara.aletia8.com
//---------------------------------------------------------------------------------------------------
// Descripcion: Editar centros
//---------------------------------------------------------------------------------------------------
global $smarty;
global $plantilla;

if(isset($_REQUEST['id']))
{
	$id = sanitize($_REQUEST['id'], INT);
	$centro = new centro();
	$centro->load("id=$id");

	//print_r($centro);
	
	$smarty->assign("_nombre_pagina", "Editar Centro");
	$smarty->assign("centro", $centro);
	$plantilla = "centro_editar.tpl";
}
else
{
	$error = "Faltan parámetros para mostrar el centro.";
	header("Location:index.php?page=centro_listar&error=$error");
}
?>
