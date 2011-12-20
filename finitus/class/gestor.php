<?php
//---------------------------------------------------------------------------------------------------
// Proyecto: Finitus
// Archivo: class/gestor.php
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
      if ($this->centro_id > 0)
      {
        $centro = new centro();
        $centro->load("id = $this->centro_id");
        $this->centro = $centro;
      }
      if ($this->departamento_id > 0)
      {
        $departamento = new departamento();
        $departamento->load("id = $this->departamento_id");
        $this->departamento = $departamento;
      }
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
        if ($gestor->centro_id > 0)
        {
          $centro = new centro();
          $centro->load("id = $gestor->centro_id");
          $gestor->centro = $centro;
        }
        if ($gestor->departamento_id > 0)
        {
          $departamento = new departamento();
          $departamento->load("id = $gestor->departamento_id");
          $gestor->departamento = $departamento;
        }
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
