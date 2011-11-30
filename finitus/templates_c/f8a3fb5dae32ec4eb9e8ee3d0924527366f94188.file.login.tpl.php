<?php /* Smarty version Smarty-3.1.5, created on 2011-11-28 09:54:03
         compiled from "../app_code\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:257164eccd895ec9ce4-36542234%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8a3fb5dae32ec4eb9e8ee3d0924527366f94188' => 
    array (
      0 => '../app_code\\login.tpl',
      1 => 1322470439,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '257164eccd895ec9ce4-36542234',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_4eccd895f0444',
  'variables' => 
  array (
    'aviso' => 0,
    'error' => 0,
    'alumno' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4eccd895f0444')) {function content_4eccd895f0444($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['aviso']->value){?><p class='aviso'><?php echo $_smarty_tpl->tpl_vars['aviso']->value;?>
</p><?php }?> 
<?php if ($_smarty_tpl->tpl_vars['error']->value){?><p class='error'><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p><?php }?> 

<form method="post" action="index.php?page=login" id="formlogin">
    <input type="hidden" name="acceso" value="1" />
    <label for="correo">Correo</label> <br />
    <input type="text" name="correo" id="correo" class="inp" />
    <label for="nif">NIF</label> <br />
    <input type="password" name="nif" id="nif" class="inp" /><br />
    <input type="submit" class="submit-btn" value="Enviar" />
</form>

<?php if ($_smarty_tpl->tpl_vars['alumno']->value){?>
<h1><?php echo $_smarty_tpl->tpl_vars['alumno']->value->nombre;?>
 <?php echo $_smarty_tpl->tpl_vars['alumno']->value->apellidos;?>
</h1>
<?php }?><?php }} ?>