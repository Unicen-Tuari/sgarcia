<?php
/* Smarty version 3.1.30, created on 2016-10-19 02:49:37
  from "C:\xampp\htdocs\dashboard\sgarcia\PaginaMVC\admin\templates\list_Dat_Edit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5806c321bfb504_40921700',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'badc58afd0fb145dc92e8ca2b68e48b8224dce42' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dashboard\\sgarcia\\PaginaMVC\\admin\\templates\\list_Dat_Edit.tpl',
      1 => 1476838168,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5806c321bfb504_40921700 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form action="" method="POST" enctype="multipart/form-data" id="upd_dat">
  <div class="form-group">
    <label for="id_maq">id</label>
    <input type="text" id="id_maq"  class="form-control dato" name="id_maq" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value[0]['id_maq'];?>
" >

    <label for="denominacion">Denominacion</label>
    <input type="text" id="denominacion"  class="form-control dato" name="denominacion" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value[0]['denominacion'];?>
">

    <label for="potencia">Potencia</label>
    <input type="text" id="potencia" class="form-control dato" name="potencia" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value[0]['potencia'];?>
">

    <label for="altura">Altura</label>
    <input type="text" id="altura" class="form-control dato" name="altura" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value[0]['altura'];?>
">

    <label for="ancho">Ancho</label>
    <input type="text" id="ancho" class="form-control dato" name="ancho" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value[0]['ancho'];?>
">

    <label for="peso">Peso</label>
    <input type="text" id="peso" class="form-control dato" name="peso" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value[0]['peso'];?>
">

    <label for="capacidad">Capacidad</label>
    <input type="text" id="capacidad" class="form-control dato" name="capacidad" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value[0]['capacidad'];?>
">

    </div>

     <button type="submit" id="Guardar_upd_dat" class="btn btn-default">Cargar</button>
</form>
<?php }
}
