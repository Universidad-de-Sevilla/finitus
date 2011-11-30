<?php
//---------------------------------------------------------------------------------------------------
// Proyecto: 
// Archivo: class/ado_usuario.php
// Tipo: definicion de clase
// Desarrolladores: 
// Hecho con Cascara - http://cascara.aletia8.com
//---------------------------------------------------------------------------------------------------
// Descripcion: gestiona los usuarios (usa active record)
//---------------------------------------------------------------------------------------------------

class ado_usuario extends ADOdb_Active_Record
{
  //Propiedades de la clase
	var $_table = 'usuario';
  var $entidades = array();

  function load_joined($condicion)
  {
    if ($this->load($condicion))
    {
      $usuario_entidad = new usuario_entidad();
      $this->entidades = $usuario_entidad->Find_entidades("id_usuario = $this->id_usuario");
      return true;
    }
    else
    {
      return false;
    }
  }
}
?>
