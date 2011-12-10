<?php
//---------------------------------------------------------------------------------------------------
// Proyecto: Finitus
// Archivo: class/persona.php
// Tipo: definicion de clase
// Desarrolladores: 
// Hecho con Cascara - http://cascara.aletia8.com
//---------------------------------------------------------------------------------------------------
// Descripcion: gestiona los usuarios (usa active record)
//---------------------------------------------------------------------------------------------------

class persona extends ADOdb_Active_Record
{
  //Propiedades de la clase
	var $_table = 'personas';
	
  function load_joined($condicion)
  {
    if ($this->load($condicion))
    {
      $alumno_entidad = new alumno_titulacion();
      $this->entidades = $alumno_entidad->Find_entidades("id_alumno = $this->id_alumno");
      return true;
    }
    else
    {
      return false;
    }
  }
}
?>
