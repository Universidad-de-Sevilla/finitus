<?php
//---------------------------------------------------------------------------------------------------
// Proyecto: Finitus
// Archivo: centro_grabar.php
// Tipo: controlador
// Hecho con Cascara - http://cascara.aletia8.com
//---------------------------------------------------------------------------------------------------
// Descripcion: Graba los datos de un centro
//---------------------------------------------------------------------------------------------------
global $smarty;
global $plantilla;

if(isset($_REQUEST['id']))
{
	$id = sanitize($_REQUEST['id'], INT);
	$centro = new centro();
	$centro->load("id=$id");

	//print_r($centro);
	
	if(isset($_REQUEST['nombre']))
	{
		$centro->nombre = sanitize($_REQUEST['nombre'], SQL); //SQL = indica que no meta código SQL
	}
	
	$centro->save();
	
	header("Location:index.php?page=centro_listar&error=$error");
}
else
{
	$error = "Faltan parámetros para grabar el centro.";
	header("Location:index.php?page=centro_listar&error=$error");
}
?>
