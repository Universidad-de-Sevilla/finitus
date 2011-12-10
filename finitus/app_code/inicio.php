<?php
//---------------------------------------------------------------------------------------------------
// Proyecto: Finitus
// Archivo: inicio.php
// Tipo: controlador
// Hecho con Cascara - http://cascara.aletia8.com
//---------------------------------------------------------------------------------------------------
// Descripcion: Muestra la pantalla de inicio que presenta la aplicación y pregunta al usuario perfil de acceso
//---------------------------------------------------------------------------------------------------
global $smarty;
global $plantilla;

$smarty->assign("_nombre_pagina", "Bienvenido a Finitus");
$smarty->assign("login", LOGIN);
$plantilla = "inicio.tpl";
?>
