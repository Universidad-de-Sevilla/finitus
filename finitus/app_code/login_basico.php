<?php
//---------------------------------------------------------------------------------------------------
// Proyecto: Finitus
// Archivo: login_basico.php
// Tipo: controlador
// Hecho con Cascara - http://cascara.aletia8.com
//---------------------------------------------------------------------------------------------------
// Descripcion: Gestiona el inicio de sesion de los usuarios en el sistema
//---------------------------------------------------------------------------------------------------
global $smarty;
global $plantilla;

// Si no viene el rol no hay nada que hacer
// Si el login no es el del config nos la intentan colar
if (isset($_REQUEST["rol"]) AND LOGIN == "login_basico")
{
  $rol = sanitize($_REQUEST["rol"], INT);
  $smarty->assign('_nombre_pagina' , 'Inicio de sesión');
  // Comprueba que viene del formulario
  if (isset($_POST['acceso']))
  {
    // Comprueba que vengan los datos
    if (isset($_POST["correo"]) AND isset($_POST["nif"]))
    {
      $correo = sanitize($_POST["correo"],2);
      $nif = sanitize($_POST["nif"],2);
      $usuario = new persona();
      $usuario->load("correo = '$correo' AND nif = '$nif'");
      if ($usuario->load("correo = '$correo' AND nif = '$nif'")) 
      {
        $usuario->rol_actual = $rol;

        switch($rol)
        {
          case 1:
            // Comprobamos que el usuario tiene un perfil activo como alumno
            $alumno = new alumno();
            if ($alumno_perfiles = $alumno->Find("persona_id = $usuario->id AND fecha_inicio < $hoy AND fecha_fin > $hoy'"))
            {
              $usuario->alumno_perfiles = $alumno->perfiles;
              $_SESSION['usuario'] = $usuario;
              header("location:index.php?page=alumno_lineas");
            }
            else
            {
              $error = "No tiene ningún perfil activo como alumno a fecha de hoy";
              header("location:index.php?page=inicio&error=$error");
            }
            break;
          case 2:
              $_SESSION['usuario'] = $usuario;
            header("location:index.php?page=profesor_lineas");
            break;
          case 3:
              $_SESSION['usuario'] = $usuario;
            header("location:index.php?page=gestor_inicio");
            break;
          default:
            header("location:index.php?page=inicio");
        }
      }
      else 
      {
        $error="Usuario o nif incorrectos.";
        $smarty->assign('error',$error);
        $smarty->assign('rol',$rol);
        $plantilla = 'login_basico.tpl';
      }
    }
    else 
    {
      // Si falta algun parametro volvemos al formulario y avisamos
      $aviso = "Indique su nombre de usuario y nif.";
      $smarty->assign('aviso',$aviso);
      $smarty->assign('rol',$rol);
      $plantilla = 'login_basico.tpl';
    }
  }
  else
  {	
    // Si no venía del formulario lo mostramos sin más
    session_unset();
    $smarty->assign('rol',$rol);
    $plantilla = 'login_basico.tpl';
  }
}
else
{
  $smarty->assign("login", LOGIN);
  $plantilla = 'inicio.tpl';
}
?>
