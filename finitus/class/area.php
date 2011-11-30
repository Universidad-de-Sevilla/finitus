<?php
//---------------------------------------------------------------------------------------------------
// Proyecto: Finitus
// Archivo: class/area.php
// Tipo: definicion de clase
// Desarrolladores: 
// Hecho con Cascara - http://cascara.aletia8.com
//---------------------------------------------------------------------------------------------------
// Descripcion: gestiona las áreas de conocimiento
//---------------------------------------------------------------------------------------------------

class area extends ADOdb_Active_Record
{
  //Propiedades de la clase
	var $_table = 'areas';
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