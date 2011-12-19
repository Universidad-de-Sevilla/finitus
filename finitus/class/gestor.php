<?php
//---------------------------------------------------------------------------------------------------
// Proyecto: Finitus
// Archivo: class/gestor.php
// Tipo: definicion de clase
// Hecho con Cascara - http://cascara.aletia8.com
//---------------------------------------------------------------------------------------------------
// Descripcion: gestiona los perfiles de gestores
//---------------------------------------------------------------------------------------------------

class gestor extends ADOdb_Active_Record
{
  //Propiedades de la clase
	var $_table = 'gestores';
	
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
    if ($gestores = $this->Find($condicion))
    {
      foreach ($gestores as& $gestor)
      {
        $persona = new persona();
        $persona->load("id = $gestor->persona_id");
        $gestor->persona = $persona;
      }
      return $gestor;
    }
    else 
    {
      return false;
    }
  }
}
?>
