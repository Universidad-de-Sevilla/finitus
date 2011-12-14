<?php
//---------------------------------------------------------------------------------------------------
// Proyecto: Finitus
// Archivo: class/alumno.php
// Tipo: definicion de clase
// Hecho con Cascara - http://cascara.aletia8.com
//---------------------------------------------------------------------------------------------------
// Descripcion: gestiona los perfiles de alumno asociados a las personas
//---------------------------------------------------------------------------------------------------

class alumno extends ADOdb_Active_Record
{
  //Propiedades de la clase
	var $_table = 'alumnos';
  var $persona;
	
  function load_joined($condicion)
  {
    if ($this->load($condicion))
    {
      $persona = new persona();
      $persona->load("id = $this->persona_id");
      $this->persona = $persona;
      return true;
    }
    else 
    {
      return false;
    }
  }
  

  function Find_joined($condicion)
  {
    if ($alumnos = $this->Find($condicion))
    {
      foreach ($alumnos as& $alumno)
      {
        $persona = new persona();
        $persona->load("id = $alumno->persona_id");
        $alumno->persona = $persona;
      }
      return $alumnos;
    }
    else 
    {
      return false;
    }
  }
}
?>
