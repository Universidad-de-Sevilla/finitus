<?php
/* vim: set expandtab tabstop=2 shiftwidth=2 softtabstop=2 */
//-----------------------------------------------------------------------------
// Project: 
// File: class/correo.php
// Hecho con Cascara - http://cascara.aletia8.com
//-----------------------------------------------------------------------------
// Description: el cartero que envia los correos 
//-----------------------------------------------------------------------------
// Requisitos: requiere las librerias de PEAR: Mail y Net_SMTP
// Se instalan desde línea de comandos con:
// sudo pear install Mail
// sudo pear install Net_SMTP
//-----------------------------------------------------------------------------

require_once "Mail.php";

// Quizás sería más correcto que esta clase heredara de la de PEAR pero no se hacerlo todavía
class correo
{
  var $host;
  var $username;
  var $password;
  var $remitente;
  var $firma;

  function correo()
  {
    // Las constantes estan definidas en app_code/app_config.pphp
    $this->host = MAIL_HOST;
    $this->username = MAIL_USERNAME;
    $this->password = MAIL_PASSWORD;
    $this->remitente = MAIL_REMITENTE;
    $this->firma = MAIL_FIRMA;
  }

  function enviar($destinatario, $asunto, $mensaje)
  {
    $headers = array ('From' => $this->remitente,
                      'To' => $destinatario,
                      'Subject' => utf8_decode($asunto)
                     );

    $smtp = Mail::factory('smtp',
               array ('host' => $this->host,
                      'auth' => true,
                      'username' => $this->username,
                      'password' => $this->password
                     ));

    $mensaje .= $this->firma;
    $mail = $smtp->send($destinatario, $headers, utf8_decode($mensaje));

    if (PEAR::isError($mail))
    {
      return false;
    }
    else
    {
      return true;
    }
  }
}
?>

