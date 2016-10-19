<?php
/* Smarty version 3.1.30, created on 2016-10-19 22:46:53
  from "C:\xampp\htdocs\dashboard\sgarcia\PaginaMVC\admin\templates\list_Dat_Edit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5807dbbda3ade3_10148725',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'badc58afd0fb145dc92e8ca2b68e48b8224dce42' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dashboard\\sgarcia\\PaginaMVC\\admin\\templates\\list_Dat_Edit.tpl',
      1 => 1476910006,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5807dbbda3ade3_10148725 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="col-md-offset-2 col-md-8 panel panel-default">
<div class="panel-heading">
  <h3 class="panel-title text-center">Editor de Datos de Maquina</h3>
</div>
<div class="panel-body">
<form action="" method="POST" enctype="multipart/form-data" id="upd_dat">
  <div class="form-group">
    <label for="id_maq">id</label>
    <input type="text" id="id_maq"  class="form-control dato" name="id_maq" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value[0]['id_maq'];?>
" >
</div>
<div class="form-group">
    <label for="denominacion">Denominacion</label>
    <input type="text" id="denominacion"  class="form-control dato" name="denominacion" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value[0]['denominacion'];?>
">
</div>
<div class="form-group">
    <label for="potencia">Potencia</label>
    <input type="text" id="potencia" class="form-control dato" name="potencia" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value[0]['potencia'];?>
">
</div>
<div class="form-group">
    <label for="altura">Altura</label>
    <input type="text" id="altura" class="form-control dato" name="altura" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value[0]['altura'];?>
">
</div>
<div class="form-group">
    <label for="ancho">Ancho</label>
    <input type="text" id="ancho" class="form-control dato" name="ancho" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value[0]['ancho'];?>
">
</div>
<div class="form-group">
    <label for="peso">Peso</label>
    <input type="text" id="peso" class="form-control dato" name="peso" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value[0]['peso'];?>
">
</div>
<div class="form-group">
    <label for="capacidad">Capacidad</label>
    <input type="text" id="capacidad" class="form-control dato" name="capacidad" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value[0]['capacidad'];?>
">

    </div>

     <button type="submit" id="Guardar_upd_dat" class="btn btn-default">Cargar</button>
</form>
</div>
<?php }
}
