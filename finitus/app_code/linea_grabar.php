<?php
//---------------------------------------------------------------------------------------------------
// Proyecto: Finitus
// Archivo: linea_grabar.php
// Tipo: controlador
// Hecho con Cascara - http://cascara.aletia8.com
//---------------------------------------------------------------------------------------------------
// Descripcion: Graba una nueva línea o las modificaciones de una existente
//---------------------------------------------------------------------------------------------------
global $smarty;
global $plantilla;

if (isset($_REQUEST["nombre"]) AND isset($_REQUEST["area_id"]) AND isset($_REQUEST["titulo_id"]))
{
  $linea = new linea();
  $linea->nombre = sanitize($_REQUEST["nombre"], SQL);
  $linea->area_id = sanitize($_REQUEST["area_id"], INT);
  $linea->titulo_id = sanitize($_REQUEST["titulo_id"], INT);
  $linea->profesor_id = sanitize($_REQUEST["profesor_id"], INT);
  $linea->save();
  //header("Location:index.php?page=linea_mostrar&linea_id=1");
  header("Location:index.php?page=profesor_lineas");
}
else
{
  $error = "Faltan parametros para grabar una nueva línea";
  header("Location:index.php?page=linea_crear&error=$error");
}
?>
