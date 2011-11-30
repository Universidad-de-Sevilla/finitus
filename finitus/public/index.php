<?php 
//---------------------------------------------------------------------------------------------------
// Proyecto :
// Archivo: index.php
// Desarrolladores: 
// Hecho con Cascara - http://cascara.aletia8.com
//---------------------------------------------------------------------------------------------------
// Descripcion: Este es el controlador principal index.php que carga a todos los demas en su seno 
// maternal. Piénsatelo dos veces antes de tocar algo aquí 
//---------------------------------------------------------------------------------------------------

// Quita los marcadores de comentario para que se vean los errores
//ini_set('display_errors', '1');
//error_reporting(E_ALL);

// Librerías y funciones imprescindibles de cáscaras
require_once('../app_code/app_config.php');
require_once('../../cascara_core/lib/adodb5/adodb.inc.php');
require_once('../../cascara_core/lib/adodb5/adodb-active-record.inc.php');
require_once('../../cascara_core/lib/smarty/Smarty.class.php');
require_once('../../cascara_core/function/sanitize.php');
// Cuando hagan falta se podrán poner aquí más librerias o funciones

// Autocarga las clases que se vayan necesitando
function __autoload($class_name) 
{
	if (file_exists('../class/'.$class_name.'.php'))
	{	
		require_once('../class/'.$class_name.'.php');
	}
}
spl_autoload_register("__autoload"); 

// Variables globales
$smarty = new Smarty();
$smarty->template_dir = '../app_code'; 
$smarty->compile_dir = '../templates_c'; 
$smarty->config_dir = '../configs'; 
$smarty->cache_dir = '../cache'; 

// Variables del controlador
$smarty->assign('_javascript' , '');
$smarty->assign('_usuario' , '');
$smarty->assign('aviso' , '');
$smarty->assign('error' , '');

// Conexion a la base de datos utilizando ADODB y ActiveRecord
// Las constantes vienen de ../app_code/app_config.php
$adodb = NewADOConnection('mysql://'.DB_LOGIN.':'.DB_CLAVE.'@'.DB_HOST.'/'.DB_DATABASE);
ADOdb_Active_Record::SetDatabaseAdapter($adodb);

// Crea una sesión con un identificador encriptado para evitar ataques
$session_key = substr(md5(DIR_BASE), 0, 8);
@session_name('SESSID' . $session_key);
@ini_set('url_rewriter.tags', '');
@ini_set('session.use_trans_sid', 0);
if(!@session_id())
{
    //Trans SID sucks also...
    @ini_set('url_rewriter.tags', '');
    @ini_set('session.use_trans_sid', 0);
    @session_start();
}

//Definimos variables
$page = '';
$plantilla = '';

// Hay que haber iniciado sesión y haber pedido pagina
// Esto puede modificarse si la aplicación no requiere login 
// o alguna zona es publica
if (isset($_GET['page']) && isset($_SESSION['alumno'])) 
{
	$page = sanitize($_GET['page'],SQL);
	$alumno = new alumno();
	$alumno = $_SESSION['alumno'];
	$smarty->assign('alumno',$alumno);
}
else
{
	// Si no se ha pedido ninguna página o no se ha iniciado sesión cargamos la de login  
	$page = 'login';
}

// Carga la página solicitada ($_GET['page']) o la pagina por defecto ('login' en nuestro caso)
if(file_exists('../app_code/' . $page . '.php'))
{
	require_once('../app_code/' . $page . '.php');
}
else
{
	require_once('../app_code/error.php');
}

// Llama a las tres plantillas que conforman la página html
$smarty->display('theme/'.THEME.'/header.tpl'); 
$smarty->display($plantilla);
$smarty->display('theme/'.THEME.'/footer.tpl'); 
?>
