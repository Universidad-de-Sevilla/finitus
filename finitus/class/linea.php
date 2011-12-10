<?php
//---------------------------------------------------------------------------------------------------
// Proyecto: Finitus
// Archivo: class/linea.php
// Tipo: definicion de clase
// Hecho con Cascara - http://cascara.aletia8.com
//---------------------------------------------------------------------------------------------------
// Descripcion: gestiona las líneas de investigación
//---------------------------------------------------------------------------------------------------

class linea extends ADOdb_Active_Record
{
  //Propiedades de la clase
	var $_table = 'lineas';
    var $entidades = array();
	
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
