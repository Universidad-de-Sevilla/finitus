<?php
//---------------------------------------------------------------------------------------------------
// Proyecto: 
// Archivo: login.php
// Tipo: controlador
// Desarrolladores: 
// Hecho con Cascara - http://cascara.aletia8.com
//---------------------------------------------------------------------------------------------------
// Descripcion: Gestiona el inicio de sesion de los usuarios en el sistema
//---------------------------------------------------------------------------------------------------
global $smarty;
global $plantilla;
$smarty->assign('_javascript' , array('correo_validar','ordenatabla'));
$smarty->assign('_nombre_pagina' , 'Bienvenido a Finitus');
$smarty->assign('_usuario' , '');
$smarty->assign('aviso' , '');
$smarty->assign('error' , '');

// Comprueba que viene del formulario
if (isset($_POST['acceso']))
{
	// Comprueba que vengan los datos
	if (isset($_POST["correo"]) && isset($_POST["nif"]))
	{
		$correo = sanitize($_POST["correo"],2);
		$nif = sanitize($_POST["nif"],2);
		$alumno = new alumno();
		if ($alumno->load("correo = '$correo' AND nif = '$nif'")) 
		{
			$smarty->assign('alumno',$alumno);
			$_SESSION['alumno'] = $alumno;
			$_usuario = $alumno->nombre . " " . $alumno->apellidos;
			$plantilla = "login.tpl";
		}
		else 
		{
			$error="Usuario o nif incorrectos.";
			$smarty->assign('error',$error);
			$plantilla = 'login.tpl';
		}
	}
	else 
	{
		// Si falta algun parametro volvemos al formulario y avisamos
		$aviso = "Indique su nombre de usuario y nif.";
		$smarty->assign('aviso',$aviso);
		$plantilla = 'login.tpl';
	}
}
else
{	
	// Si no venía del formulario lo mostramos sin más
	session_unset();
	$plantilla = 'login.tpl';
}
?>
