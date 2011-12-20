<?php
//---------------------------------------------------------------------------------------------------
// Proyecto: Finitus
// Archivo: class/profesor.php
// Hecho con Cascara - http://trib.us.es/cascaras
//---------------------------------------------------------------------------------------------------
// Descripcion: gestiona los perfiles de profesor asociados a las personas
//---------------------------------------------------------------------------------------------------

class profesor extends ADOdb_Active_Record
{
  //Propiedades de la clase
	var $_table = 'profesores';
  var $persona;
  var $titulo;
	
  function load_joined($condicion)
  {
    if ($this->load($condicion))
    {
      $persona = new persona();
      $persona->load("id = $this->persona_id");
      $this->persona = $persona;
      $titulo = new titulo();
      $titulo->load("id = $this->titulo_id");
      $this->titulo = $titulo;
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
        $titulo = new titulo();
        $titulo->load("id = $this->titulo_id");
        $profesor->titulo = $titulo;
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
