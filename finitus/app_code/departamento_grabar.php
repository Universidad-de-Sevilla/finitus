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

	if(isset($_REQUEST['nombre']))
	{
		$departamento->nombre = sanitize($_REQUEST['nombre'], SQL); //SQL = indica que no meta código SQL
	}
	
	$departamento->save();
	header("Location:index.php?page=departamento_listar&error=$error");
}
else
{
	$error = "Faltan parámetros para grabar el departemento.";
	header("Location:index.php?page=departamento_listar&error=$error");
}
?>
