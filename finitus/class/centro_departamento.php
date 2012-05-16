<?php
//---------------------------------------------------------------------------------------------------
// Proyecto: Finitus
// Archivo: class/centro_departamento.php
// Hecho con Cascara - http://trib.us.es/cascaras
//---------------------------------------------------------------------------------------------------
// Descripcion: 
//---------------------------------------------------------------------------------------------------

class centro_departamento extends ADOdb_Active_Record
{
  //Propiedades de la clase
	var $_table = 'centros_departamentos';
	var $centro;
	var $departamento;
	
  function Find_departamentos($condicion)
  {
    if ($centros_departamentos = $this->Find($condicion))
    {
      foreach ($centros_departamentos as& $centro_departamento) //as& --> por dirección
      {
        $this->departamento = new departamento();        
		$this->departamento->load("id = $centro_departamento->departamento_id");		
//print_r($this->departamento);
		$centro_departamento->departamento = $this->departamento;
      }
	  
      return $centros_departamentos;
	  
    }
    else 
    {
      return false;
    }
  }
}
?>
