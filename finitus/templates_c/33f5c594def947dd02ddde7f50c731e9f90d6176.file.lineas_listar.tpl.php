<?php /* Smarty version Smarty-3.1.5, created on 2011-11-28 12:17:53
         compiled from "../app_code\lineas_listar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19494ed36de1ae5e86-11473481%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33f5c594def947dd02ddde7f50c731e9f90d6176' => 
    array (
      0 => '../app_code\\lineas_listar.tpl',
      1 => 1322478821,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19494ed36de1ae5e86-11473481',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lineas' => 0,
    'linea' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_4ed36de1bba8b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ed36de1bba8b')) {function content_4ed36de1bba8b($_smarty_tpl) {?><table>
<tr>
  <th>Nombre línea de investigación</th>
  <th>Plazas totales</th>
  <th>Profesor</th>
</tr>
<?php  $_smarty_tpl->tpl_vars['linea'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['linea']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lineas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['linea']->key => $_smarty_tpl->tpl_vars['linea']->value){
$_smarty_tpl->tpl_vars['linea']->_loop = true;
?>
  <tr>
    <td><?php echo $_smarty_tpl->tpl_vars['linea']->value->nombre;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['linea']->value->plazas_totales;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['linea']->value->profesor_id;?>
</td>
  </tr>
<?php } ?>

</table><?php }} ?>