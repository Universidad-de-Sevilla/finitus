<?php /* Smarty version Smarty-3.1.5, created on 2011-11-23 12:27:17
         compiled from "theme\linneo\cabecera.tpl" */ ?>
<?php /*%%SmartyHeaderCode:172864eccd895b14d79-36870472%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78170dc19a36f63a546d9988998c4aade24ea6e2' => 
    array (
      0 => 'theme\\linneo\\cabecera.tpl',
      1 => 1315911298,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '172864eccd895b14d79-36870472',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_nombre_aplicacion' => 0,
    '_nombre_pagina' => 0,
    '_javascript' => 0,
    'script' => 0,
    '_usuario' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_4eccd895dc925',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4eccd895dc925')) {function content_4eccd895dc925($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title><?php echo $_smarty_tpl->tpl_vars['_nombre_aplicacion']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['_nombre_pagina']->value;?>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="keywords" content="">
<meta name="description" content="">
<link rel="stylesheet" type="text/css" href="theme/linneo/css/main.css">

<?php  $_smarty_tpl->tpl_vars['script'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['script']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_javascript']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['script']->key => $_smarty_tpl->tpl_vars['script']->value){
$_smarty_tpl->tpl_vars['script']->_loop = true;
?> 
	<script type='text/javascript' src="js/<?php echo $_smarty_tpl->tpl_vars['script']->value;?>
.js"></script>
<?php } ?>
</head>

<body>
<div id="wrap">
	<div id="cabecera">
		<div id="logo"><a href="http://www.us.es/"><img src="theme/linneo/images/logo.jpg" align="left" /></a></div>
		<p class="subtitulo">Una aplicación hecha con Cáscara y mucho cariño</p>
		<h1><?php echo $_smarty_tpl->tpl_vars['_nombre_pagina']->value;?>
</h1>
	
	<?php if ($_smarty_tpl->tpl_vars['_usuario']->value){?>
		<div id='usuario'>
			<a href='javascript:window.history.back();'> Volver</a>  
			&nbsp;
			<a href='index.php?page=usuario_datos&id_usuario=<?php echo $_smarty_tpl->tpl_vars['_usuario']->value['id_usuario'];?>
><?php echo $_smarty_tpl->tpl_vars['_usuario']->value['login'];?>
</a> 
			&nbsp;
			<a href='index.php?page=login'> Salir</a>
		</div>
	<?php }?>
	</div><!-- #cabecera -->

	<div id='principal'>
		
		<div id="menu">
			<?php echo $_smarty_tpl->getSubTemplate ('menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		</div><!-- #menu -->

		<div id="contenido">
<?php }} ?>