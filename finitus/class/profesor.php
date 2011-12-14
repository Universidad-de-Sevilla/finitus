<?php
//---------------------------------------------------------------------------------------------------
// Proyecto: Finitus
// Archivo: class/profesor.php
// Tipo: definicion de clase
// Hecho con Cascara - http://cascara.aletia8.com
//---------------------------------------------------------------------------------------------------
// Descripcion: gestiona los perfiles de profesor asociados a las personas
//---------------------------------------------------------------------------------------------------

class profesor extends ADOdb_Active_Record
{
  //Propiedades de la clase
	var $_table = 'profesores';
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
    if ($profesores = $this->Find($condicion))
    {
      foreach ($profesores as& $profesor)
      {
        $persona = new persona();
        $persona->load("id = $profesor->persona_id");
        $profesor->persona = $persona;
      }
      return $profesores;
    }
    else 
    {
      return false;
    }
  }
}
?>
