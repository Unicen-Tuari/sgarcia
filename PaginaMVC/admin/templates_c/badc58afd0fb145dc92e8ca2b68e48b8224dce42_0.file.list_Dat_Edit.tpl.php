<?php
/* Smarty version 3.1.30, created on 2016-10-29 01:25:30
  from "C:\xampp\htdocs\dashboard\sgarcia\PaginaMVC\admin\templates\list_Dat_Edit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5813de6a5592d7_86141118',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'badc58afd0fb145dc92e8ca2b68e48b8224dce42' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dashboard\\sgarcia\\PaginaMVC\\admin\\templates\\list_Dat_Edit.tpl',
      1 => 1477697121,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5813de6a5592d7_86141118 (Smarty_Internal_Template $_smarty_tpl) {
?>

<form action="" method="POST" enctype="multipart/form-data" id="upd_dat">
<input type="text" id="id_dat"  class="form-control " name="id_dat" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['dat_tec'][0]['id_dat'];?>
" style="display:none">
<input type="text" id="id_maq"  class="form-control " name="id_maq" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['dat_tec'][0]['id_maq'];?>
" style="display:none">
<td>
  <input type="text" id="caracteristica"  class="form-control"  name="caracteristica" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['dat_tec'][0]['caracteristica'];?>
">
</td>
<td>
  <input type="text" id="valor"  class="form-control" name="valor" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['dat_tec'][0]['valor'];?>
">
</td>
<td>
  <button type="submit" id="Guardar_upd_dat" class="btn btn-default" >Cargar</button>
</td>
</form>
<?php }
}
