<?php
/* Smarty version 3.1.30, created on 2016-10-29 00:23:27
  from "C:\xampp\htdocs\dashboard\sgarcia\PaginaMVC\admin\templates\listado_datos_tec.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5813cfdf2549c4_96281696',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '656d250224e56104e0e7f0a7af993bd4f8e341b3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dashboard\\sgarcia\\PaginaMVC\\admin\\templates\\listado_datos_tec.tpl',
      1 => 1477693358,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5813cfdf2549c4_96281696 (Smarty_Internal_Template $_smarty_tpl) {
?>
<tr>
<td><?php echo $_smarty_tpl->tpl_vars['dat']->value['caracteristica'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['dat']->value['valor'];?>
</td>
<td>
  <a class="deleteAction" id-dat="<?php echo $_smarty_tpl->tpl_vars['dat']->value['id_dat'];?>
" href="#">
    <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
  </a>
</td>
<td>
  <a class="updateAction" id-dat="<?php echo $_smarty_tpl->tpl_vars['dat']->value['id_dat'];?>
" href="#">
    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
  </a>
</td>
</tr>
<?php }
}
