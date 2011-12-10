<?php
//---------------------------------------------------------------------------------------------------
// Proyecto: 
// Archivo: alumno_lineas.php
// Tipo: controlador
// Desarrolladores: 
// Hecho con Cascara - http://cascara.aletia8.com
//---------------------------------------------------------------------------------------------------
// Descripcion: Muestra las líneas seleccionadas por el alumno o el selector de líneas vacío
//---------------------------------------------------------------------------------------------------
global $smarty;
global $plantilla;
global $usuario;

$solicitud = new Solicitud();
$solicitudes = $solicitud->Find("rol_alumno_id = $usuario->id");
$smarty->assign("solicitudes", $solicitudes);

$linea = new Linea();
$lineas = $linea->Find(true);
$smarty->assign("lineas", $lineas);

?>
