<?php
//---------------------------------------------------------------------------------------------------
// Proyecto: Finitus
// Archivo: app_code/login_sso.php
//---------------------------------------------------------------------------------------------------
// Llama al servidor sso, captura los datos que devuelve y crea un objeto participante con los datos 
// del usuario que ha iniciado sesión
//---------------------------------------------------------------------------------------------------

global $smarty;
global $plantilla;
require_once("../../cascara_core/lib/libopensso-php/OpenSSO.php");

$sso = new OpenSSO();
if ($sso->check_and_force_sso())
{
	$usuario = new participante;
	$nif = str_replace("-","",$sso->attribute("irispersonaluniqueid"));
	if ($usuario->load_joined("dni_sin_letra = '$nif'"))
	{
    // Almacenamos al usuario en una variable de sesion y lo llevamos a la pagina que solicito
		$_SESSION["usuario"] = $usuario;
		header("location:" . URL_SERVER  . $_SERVER['REQUEST_URI']);
	}
	else
	{
		$error = "Este usuario no consta en la base de datos de FORPAS. Debe acceder con su UVUS personal y ser PAS de la Universidad de Sevilla.";
		header("location:login_error.php?error=$error");
	}
}
else
{
	$error = "Hay un problema para conectar con el servidor de autenticación. Vuelva a intentarlo pasados unos minutos.";
	$smarty->assign("error", $error);
	$plantilla = "error";
	//Esta línea da problemas 
	//header("location:login_error.php?error=$error");
}
?>
