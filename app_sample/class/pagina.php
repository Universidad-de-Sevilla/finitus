<?php
// vim: set expandtab tabstop=2 shiftwidth=2 softtabstop=2 
//----------------------------------------------------------------------------
// Fichero: pagina.php
// Tipo: class definition
// Hecho con Cascara - http://cascara.aletia8.com
// ----------------------------------------------------------------------------

class pagina extends ADOdb_Active_Record
{

	function alieniza($alias)
	{
		return strtr($alias, 
			"???????¥µÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýÿ ", 
			"SOZsozYYuAAAAAAACEEEEIIIIDNOOOOOOUUUUYsaaaaaaaceeeeiiiionoooooouuuuyy_");
	}


	function haz_algo($vaariable)
	{
		$db = $this->DB();
		$query = "";
		$resultado = $db->Execute($query);
		while (!$resultado->EOF)
		{
			$datos[] = $resultado->fields;
			$resultado->MoveNext();
		}

		return $datos;
	}
}
?>
