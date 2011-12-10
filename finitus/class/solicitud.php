<?php
//---------------------------------------------------------------------------------------------------
// Proyecto: Finitus
// Archivo: class/solicitud.php
// Tipo: definicion de clase
// Hecho con Cascara - http://cascara.aletia8.com
//---------------------------------------------------------------------------------------------------
// Descripcion: gestiona las solicitudes de los alumnos 
//---------------------------------------------------------------------------------------------------

class solicitud extends ADOdb_Active_Record
{
  //Propiedades de la clase
	var $_table = 'solicitudes';
	
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
