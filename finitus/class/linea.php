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
    var $profesor;
	
  function load_joined($condicion)
  {
    if ($this->load($condicion))
    {
		$profesor = new profesor();
		$profesor->load_joined("id = $this->profesor_id");
		$this->profesor = $profesor;
		return true;
    }
    else return false;
  }
  
    function Find_joined($condicion)
  {
    if ($lineas = $this->Find($condicion))
    {
		foreach($lineas as &$linea)
		{
			$profesor= new profesor();
			$profesor->load_joined("id = $linea->profesor_id");
			$linea->profesor = $profesor;
		}
		return $lineas;
    }
    else return false;
  }
      
}
?>
