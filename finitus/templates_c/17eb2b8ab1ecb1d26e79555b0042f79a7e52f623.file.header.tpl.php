<?php /* Smarty version Smarty-3.1.5, created on 2011-11-28 08:51:37
         compiled from "theme\tay_dos_columnas_aux_cont\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:141014ed336db014417-72294068%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17eb2b8ab1ecb1d26e79555b0042f79a7e52f623' => 
    array (
      0 => 'theme\\tay_dos_columnas_aux_cont\\header.tpl',
      1 => 1322466670,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '141014ed336db014417-72294068',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_4ed336db32322',
  'variables' => 
  array (
    '_nombre_pagina' => 0,
    '_javascript' => 0,
    'script' => 0,
    '_usuario' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ed336db32322')) {function content_4ed336db32322($_smarty_tpl) {?><!DOCTYPE HTML> 
<html>
<head>
  <title><?php echo $_smarty_tpl->tpl_vars['_nombre_pagina']->value;?>
 - Universidad de Sevilla</title>
  <meta charset="UTF-8">
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="robots" content="index, follow" />
  <link rel="stylesheet" type="text/css" href="theme/tay_dos_columnas_aux_cont/css/main.css">
  <link rel="stylesheet" type="text/css" href="theme/tay_dos_columnas_aux_cont/css/layout.css">
  <link rel="stylesheet" type="text/css" href="theme/css_comun/validation.css">
  <?php  $_smarty_tpl->tpl_vars['script'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['script']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_javascript']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['script']->key => $_smarty_tpl->tpl_vars['script']->value){
$_smarty_tpl->tpl_vars['script']->_loop = true;
?> 
    <script type='text/javascript' src="js/<?php echo $_smarty_tpl->tpl_vars['script']->value;?>
.js"></script>
  <?php } ?>
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
</head>
<body>

<div id="header">
  <!-- empieza menu superior -->
  <?php echo $_smarty_tpl->getSubTemplate ('menu_superior.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

  <!-- termina menu superior -->

  <h1>finitus</h1>

  <p id="layoutdims"> 
    <?php if ($_smarty_tpl->tpl_vars['_usuario']->value){?>
      <div id='usuario'>
        <a href='javascript:window.history.back();'> Volver</a>  
        &nbsp;
        <a href='index.php?page=usuario_datos&id_usuario=<?php echo $_smarty_tpl->tpl_vars['_usuario']->value->nif;?>
'><?php echo $_smarty_tpl->tpl_vars['_usuario']->value->nombre;?>
 <?php echo $_smarty_tpl->tpl_vars['_usuario']->value->apellidos;?>
</a> 
        &nbsp;
        <a href='index.php?page=login'> Salir</a>
      </div>
    <?php }?>
  </p>
</div>

<div class="colmask leftmenu">
  <div class="colright">
    <div class="col1wrap">
      <div class="col1">
        <h2><?php echo $_smarty_tpl->tpl_vars['_nombre_pagina']->value;?>
</h2>
		        <!-- Content Column start -->
	
<?php }} ?>