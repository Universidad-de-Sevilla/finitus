<?php
//---------------------------------------------------------------------------------------------------
// Proyecto: Finitus
// Archivo: gestor_inicio.php
// Tipo: controlador
//---------------------------------------------------------------------------------------------------
// Descripcion: Muestra una página de opciones cuando un gestor inicia sesión
//---------------------------------------------------------------------------------------------------
global $smarty;
global $plantilla;
global $usuario;

$smarty->assign("persona",$usuario);
$smarty->assign("_nombre_pagina", "Opciones de Gestión");
$plantilla = "gestor_inicio.tpl";
?>
