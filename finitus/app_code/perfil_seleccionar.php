<?php
//---------------------------------------------------------------------------------------------------
// Proyecto: Finitus
// Archivo: perfil_seleccionar.php
// Hecho con Cascara - http://cascara.aletia8.com
//---------------------------------------------------------------------------------------------------
// Descripcion: Carga todos los perfiles activos del usuario y los muestra en un desplegable 
//---------------------------------------------------------------------------------------------------
global $smarty;
global $usuario;
global $plantilla;

$smarty->assign("_nombre_pagina", "Selección de perfil o titulación");
$plantilla = "perfil_seleccionar.tpl";

print_r($usuario);

?>
