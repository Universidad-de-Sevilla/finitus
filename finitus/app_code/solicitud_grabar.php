<?php
//---------------------------------------------------------------------------------------------------
// Proyecto: 
// Archivo: solicitud_grabar.php
// Tipo: controlador
// Hecho con Cascara - http://cascara.aletia8.com
//---------------------------------------------------------------------------------------------------
// Descripcion: Graba una nueva solicitud de línea de investigación del alumno
//---------------------------------------------------------------------------------------------------

global $usuario;

$linea_id = $_POST["linea_id"];
$ahora = date("Y-m-d H:i:s");
$solicitud = new Solicitud();
$solicitud->prioridad = 1;
$solicitud->linea_id = $linea_id;
$solicitud->alumno_id = $usuario->id;
$solicitud->fecha_alta = $ahora;
$solicitud->save();
header("location:index.php?page=alumno_lineas");
?>
