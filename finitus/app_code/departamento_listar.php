<?php
//---------------------------------------------------------------------------------------------------
// Proyecto: Finitus
// Archivo: departamento_listar.php
// Tipo: controlador
// Hecho con Cascara - http://cascara.aletia8.com
//---------------------------------------------------------------------------------------------------
// Descripcion: Listar departamentos
//---------------------------------------------------------------------------------------------------
global $smarty;
global $plantilla;

if (isset($_REQUEST["busqueda"]))
{
	$busqueda = sanitize($_REQUEST["busqueda"], SQL);
	$busqueda_int = (int)$busqueda;
	$condicion = "id = $busqueda_int OR nombre LIKE '%$busqueda%'";
	$smarty->assign("busqueda", $busqueda);
	$smarty->assign("_nombre_pagina", "Listado de Departamentos (Filtro: $busqueda)");
}
else
{
	$condicion = true;
	$smarty->assign("_nombre_pagina", "Listado de Departamentos");	
}

$departamento = new departamento();
$departamentos = $departamento->Find($condicion);

/*$centro_departamento = new centro_departamento();
$centros_departamentos = $centro_departamento->Find(centro_id in );*/

$smarty->assign("departamentos", $departamentos);
$plantilla = "departamento_listar.tpl";

?>
