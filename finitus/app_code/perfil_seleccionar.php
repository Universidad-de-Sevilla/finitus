<?php
//---------------------------------------------------------------------------------------------------
// Proyecto: Finitus
// Archivo: perfil_seleccionar.php
// Tipo: controlador
// Hecho con Cascara - http://cascara.aletia8.com
//---------------------------------------------------------------------------------------------------
// Descripcion: Carga todos los perfiles activos del usuario
//---------------------------------------------------------------------------------------------------
global $smarty;
global $usuario;
global $plantilla;


    $hoy = date("Y-m-d H:i:s");
    // Comprobamos que el usuario tiene un perfil activo como alumno
    $alumno = new alumno();
    $usuario->perfiles_alumno = $alumno->Find("persona_id = $usuario->id AND fecha_inicio < '$hoy' AND fecha_fin > '$hoy'");
    // Comprobamos que el usuario tiene un perfil activo como profesor
    $profesor = new profesor();
    $usuario->perfiles_profesor = $profesor->Find("persona_id = $usuario->id AND fecha_inicio < '$hoy' AND fecha_fin > '$hoy'");
    // Comprobamos que el usuario tiene un perfil activo como gestor
    $gestor = new gestor();
    $usuario->perfiles_gestor = $gestor->Find("persona_id = $usuario->id AND fecha_inicio < '$hoy' AND fecha_fin > '$hoy'");
?>
