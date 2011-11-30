<?php /* Smarty version Smarty-3.1.5, created on 2011-11-28 10:03:24
         compiled from "../app_code\alumno_ficha.tpl" */ ?>
<?php /*%%SmartyHeaderCode:154554ed34da17988c6-97214579%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da301a22f7950f54fa0f7cd0741577a86f787a07' => 
    array (
      0 => '../app_code\\alumno_ficha.tpl',
      1 => 1322470999,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '154554ed34da17988c6-97214579',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_4ed34da1811af',
  'variables' => 
  array (
    'alumno' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ed34da1811af')) {function content_4ed34da1811af($_smarty_tpl) {?><table>
<tr><th>Alumno</th><td><?php echo $_smarty_tpl->tpl_vars['alumno']->value->nombre;?>
 <?php echo $_smarty_tpl->tpl_vars['alumno']->value->apellidos;?>
</td></tr>
<tr><th>NIF/NIE/Pasaporte</th><td><?php echo $_smarty_tpl->tpl_vars['alumno']->value->nif;?>
</td></tr>
<tr><th>Correo</th><td><?php echo $_smarty_tpl->tpl_vars['alumno']->value->correo;?>
</td></tr>
<tr><th>Teléfono móvil</th><td><?php echo $_smarty_tpl->tpl_vars['alumno']->value->tfno_movil;?>
</td></tr>
<tr><th>Teléfono fijo</th><td><?php echo $_smarty_tpl->tpl_vars['alumno']->value->tfno_fijo;?>
</td></tr>
</table><?php }} ?>