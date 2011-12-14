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
	var $linea;
	
  function Find_joined($condicion)
  {
    if ($solicitudes = $this->Find($condicion))
    {
		foreach($solicitudes as &$solicitud)
		{
			$linea= new linea();
			$linea->load_joined("id = $solicitud->linea_id");
			$solicitud->linea = $linea;
		}
		return $solicitudes;
    }
    else return false;
  }
}
?>
