<?php
//---------------------------------------------------------------------------------------------------
// Proyecto: Finitus
// Archivo: centro_mostrar.php
// Tipo: controlador
// Hecho con Cascara - http://cascara.aletia8.com
//---------------------------------------------------------------------------------------------------
// Descripcion: 
//---------------------------------------------------------------------------------------------------
global $smarty;
global $plantilla;

if(isset($_REQUEST['id']))
{

	$id = sanitize($_REQUEST["id"], INT);

	$centro = new centro();
	$centro->load("id = $id");
	
	$centro_departamento = new centro_departamento();	
	$condicion = "centro_id = $id";
	$centros_departamentos = $centro_departamento->Find_departamentos($condicion);
//print_r($centros_departamentos);
	$smarty->assign("centro", $centro);
	$smarty->assign("centros_departamentos", $centros_departamentos);
	$smarty->assign("_nombre_pagina", $centro->nombre);
	$plantilla = "centro_mostrar.tpl";
	
}
else
{
	$error = "Datos insuficientes para mostrar centro";
	header("Location:index.php?page=centro_listar&error=$error");
}
?>
