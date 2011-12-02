<?php
//---------------------------------------------------------------------------------------------------
// Proyecto: Finitus
// Archivo: class/titulo.php
// Tipo: definicion de clase
// Hecho con Cascara - http://cascara.aletia8.com
//---------------------------------------------------------------------------------------------------
// Descripcion: gestiona las titulaciones
//---------------------------------------------------------------------------------------------------

class titulo extends ADOdb_Active_Record
{
  //Propiedades de la clase
	var $_table = 'titulos';
  var $entidades = array();
  
  //Plantilla de load_joined no usable aun  
  function load_joined($condicion)
  {
    if ($this->load($condicion))
    {
      $linea_entidad = new linea_titulacion();
      $this->entidades = $linea_entidad->Find_entidades("id_linea = $this->id_linea");
      return true;
    }
    else
    {
      return false;
    }
  }
}
?>
