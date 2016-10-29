<?php
/* Smarty version 3.1.30, created on 2016-10-28 02:26:47
  from "C:\xampp\htdocs\dashboard\sgarcia\PaginaMVC\admin\templates\datTec_admin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58129b47d9b2c0_98754866',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c4e026c75fdc8932c8830f256b24920be5b887e4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dashboard\\sgarcia\\PaginaMVC\\admin\\templates\\datTec_admin.tpl',
      1 => 1477614399,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:list_DatTec_Admin.tpl' => 1,
  ),
),false)) {
function content_58129b47d9b2c0_98754866 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="col-md-offset-2 col-md-8 panel panel-default">
<div class="panel-heading">
  <h3 class="panel-title text-center">Datos Tecnicos de Maquina</h3>
</div>
<div class="panel-body">
  <form action="" method="POST" enctype="multipart/form-data" id="add_dat_tec">
    <div class="form-group">
      <label for="id_maq">Maquina</label>
      <select name="id_maq" class="form-control" id="id_maq">
      <option value="" disabled selected> Elija tipo de maquina</option>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['maquinas']->value, 'maquina');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['maquina']->value) {
?>
         <option value="<?php echo $_smarty_tpl->tpl_vars['maquina']->value['id_maq'];?>
"><?php echo $_smarty_tpl->tpl_vars['maquina']->value['id_maq'];?>
 -> <?php echo $_smarty_tpl->tpl_vars['maquina']->value['nombre'];?>
</option>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

     </select>
</div>
<div class="form-group">
  <label for="caracteristica">Caracteristica</label>
  <input type="text" id="caracteristica"  class="form-control dato" name="caracteristica" placeholder="Caracteristica" >
</div>
<div class="form-group">
  <label for="valor">Valor</label>
  <input type="text" id="valor" class="form-control dato" name="valor" placeholder="Valor" >
</div>

   <button type="submit" id="guardarDat" class="btn btn-default">Cargar</button>
</form>
</div>
<div id="listDatTec">
<?php $_smarty_tpl->_subTemplateRender("file:list_DatTec_Admin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>
<?php echo '<script'; ?>
 src="js/cargaDatTec.js"><?php echo '</script'; ?>
>
<?php }
}
