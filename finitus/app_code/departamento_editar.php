<?php
//---------------------------------------------------------------------------------------------------
// Proyecto: Finitus
// Archivo: departamento_editar.php
// Tipo: controlador
// Hecho con Cascara - http://cascara.aletia8.com
//---------------------------------------------------------------------------------------------------
// Descripcion: Editar departamentos
//---------------------------------------------------------------------------------------------------
global $smarty;
global $plantilla;

if(isset($_REQUEST['id']))
{
	$id = sanitize($_REQUEST['id'], INT);

	$departamento = new departamento();
	$departamento->load("id=$id");

	/*$centro_departamento = new centro_departamento();
	$centros_departamentos = $centro_departamento->Find(centro_id in );*/

	$smarty->assign("_nombre_pagina", "Editar Departamento");
	$smarty->assign("departamento", $departamento);
	$plantilla = "departamento_editar.tpl";
}
else
{
	$error = "Faltan parámetros para mostrar el departamento.";
	header("Location:index.php?page=departamento_listar&error=$error");
}
?>
