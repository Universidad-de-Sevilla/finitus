<?php
//---------------------------------------------------------------------------------------------------
// Proyecto: 
// Archivo: error.php
// Tipo: controlador
// Desarrolladores: 
// Hecho con Cascara - http://cascara.aletia8.com
//---------------------------------------------------------------------------------------------------
// Descripcion: Gestiona los errores de forma global, ahora mismo sólo muestra el error
//  sería interesante grabarlo también a un log de fichero o de base de datos
//---------------------------------------------------------------------------------------------------
global $smarty;
global $plantilla;

$smarty->assign('_javascript' , '');
$smarty->assign('_usuario' , '');
$smarty->assign('error' , '');

if (isset($_REQUEST['error']))
{
  $error = sanitize($_REQUEST['error'],SQL);
}
else 
{
  $error = "Error desconocido";
}
$smarty->assign('error',$error);
$smarty->assign('_nombre_pagina','Error');
$plantilla = 'error.tpl';
?>
