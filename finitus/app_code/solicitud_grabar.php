<?php
//---------------------------------------------------------------------------------------------------
// Proyecto: 
// Archivo: solicitud_grabar.php
// Tipo: controlador
// Desarrolladores: 
// Hecho con Cascara - http://cascara.aletia8.com
//---------------------------------------------------------------------------------------------------
// Descripcion: Muestra las líneas seleccionadas por el alumno o el selector de líneas vacío
//---------------------------------------------------------------------------------------------------

global $usuario;

$linea_id = $_POST["linea_id"];
$solicitud = new Solicitud();
$solicitud->prioridad = 1;
$solicitud->linea_id = $linea_id;
$solicitud->rol_alumno_id = $usuario->id;
$solicitud->save();
header("location:index.php?page=alumno_lineas");
?>
