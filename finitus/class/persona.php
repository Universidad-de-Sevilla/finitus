<?php
//---------------------------------------------------------------------------------------------------
// Proyecto: Finitus
// Archivo: class/persona.php
// Tipo: definicion de clase
// Hecho con Cascara - http://cascara.aletia8.com
//---------------------------------------------------------------------------------------------------
// Descripcion: gestiona los usuarios (usa active record)
//---------------------------------------------------------------------------------------------------

class persona extends ADOdb_Active_Record
{
  //Propiedades de la clase
	var $_table = 'personas';
	var $rol_actual;
  var $perfiles;
}
?>
