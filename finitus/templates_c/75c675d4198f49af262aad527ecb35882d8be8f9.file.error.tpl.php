<?php /* Smarty version Smarty-3.1.5, created on 2011-11-28 09:39:25
         compiled from "../app_code\error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:191174ed348bdd46ae2-36776063%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75c675d4198f49af262aad527ecb35882d8be8f9' => 
    array (
      0 => '../app_code\\error.tpl',
      1 => 1315911298,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '191174ed348bdd46ae2-36776063',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_4ed348bde2603',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ed348bde2603')) {function content_4ed348bde2603($_smarty_tpl) {?><h2>Se ha producido un error</h2>
<p class='error'><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
<p>Intente realizar de nuevo la operación y si el problema persiste pongase en contacto con nosotros.
<p><b>Servicio de Formación y Desarrollo del PAS</b></p>
<p><a href="mailto:forpas@us.es">forpas@us.es</a> - 954487456 - 954487457 - 954487458</p>
<?php }} ?>