<?php
//---------------------------------------------------------------------------------------------------
// Proyecto: Finitus
// Archivo: config.php
// Tipo: fichero de configuracion
// Sitio web: http://finitus.us.es
// Hecho con Cascara - http://cascara.aletia8.com
//---------------------------------------------------------------------------------------------------
// Descripcion: Variables globales para el proyecto
// Modifica este archivo para que se ajuste a tus necesidades concretas.
//---------------------------------------------------------------------------------------------------

//Conexion a la base de datos - DESARROLLO
define('DB_HOST','localhost');
define('DB_LOGIN','finitus');
define('DB_CLAVE','tarrupa25f');
define('DB_DATABASE','finitus');
//Método de autenticación - DESARROLLO
define('LOGIN','login_basico');
//Directorios - DESARROLLO
define('DIR_BASE','xampp/htdocs/cascara/finitus');

/*
//Conexion a la base de datos - PREPRODUCCIÓN
define('DB_HOST','localhost');
define('DB_LOGIN','finitus');
define('DB_CLAVE','tarrupa25f');
define('DB_DATABASE','finitus');
//Método de autenticación - PREPRODUCCIÓN
define('LOGIN','login_sso');
//Directorios - PREPRODUCCIÓN
define('DIR_BASE','xampp/htdocs/cascara/finitus');
*/

// Tema que vamos a utilizar para definir la apariencia general del sitio
define('THEME', 'tay_dos_columnas_aux_cont');
//Nombre, versión y revisión de la aplicación
define('NOMBRE_APLICACION','Finitus');
define('VERSION_APLICACION','0.1');
define('REVISION_APLICACION','1');
?>
