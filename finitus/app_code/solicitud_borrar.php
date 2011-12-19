<?php
//---------------------------------------------------------------------------------------------------
// Proyecto: 
// Archivo: solicitud_borrar.php
// Tipo: controlador
// Hecho con Cascara - http://cascara.aletia8.com
//---------------------------------------------------------------------------------------------------
// Descripcion: Borra una solicitud de l�nea de investigaci�n del alumno
//---------------------------------------------------------------------------------------------------

global $usuario;

$solicitud_id = sanitize($_GET["id"], INT);
$solicitud = new Solicitud();
if ($solicitud->load("id = $solicitud_id AND alumno_id = " . $usuario->perfiles[0]->id))
{
	$solicitud->delete();
	header("location:index.php?page=alumno_lineas");
}
else
{
	$error = "No est� autorizado para borrar esta solicitud";
	header("location:index.php?page=alumno_lineas&error=$error");
}
?>