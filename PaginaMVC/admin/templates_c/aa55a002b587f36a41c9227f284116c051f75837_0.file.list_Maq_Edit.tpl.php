<?php
/* Smarty version 3.1.30, created on 2016-10-19 23:33:30
  from "C:\xampp\htdocs\dashboard\sgarcia\PaginaMVC\admin\templates\list_Maq_Edit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5807e6aa9666a6_48382139',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa55a002b587f36a41c9227f284116c051f75837' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dashboard\\sgarcia\\PaginaMVC\\admin\\templates\\list_Maq_Edit.tpl',
      1 => 1476910070,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5807e6aa9666a6_48382139 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="col-md-offset-2 col-md-8 panel panel-default">
<div class="panel-heading">
  <h3 class="panel-title text-center">Editor de Maquina</h3>
</div>
<div class="panel-body">
<form action="" method="POST" enctype="multipart/form-data" id="upd_maq">
  <div class="form-group">
    <label for="nombre">id</label>
    <input type="text" id="id_maq"  class="form-control dato" name="id_maq" value="<?php echo $_smarty_tpl->tpl_vars['maquina']->value[0]['id_maq'];?>
" placeholder="Denominacion" >
</div>
<div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="text" id="nombre"  class="form-control dato" name="nombre" value="<?php echo $_smarty_tpl->tpl_vars['maquina']->value[0]['nombre'];?>
" placeholder="Denominacion" >
</div>
<div class="form-group">
    <label for="tipo">Tipo</label>
    <select name="tipo" class="form-control" id="tipo">
    <option value="<?php echo $_smarty_tpl->tpl_vars['maquina']->value[0]['tipo'];?>
"> <?php echo $_smarty_tpl->tpl_vars['maquina']->value[0]['tipo'];?>
 - Valor Actual </option>
    <option value="Embutidora">Embutidora</option>
    <option value="Moledora Embutidora">Moledora Embutidora</option>
     <option value="Mixer">Mixer</option>
     <option value="Mixer-Dual">Mixer-Dual</option>
    </select>
</div>
<div class="form-group">
    <label for="precio">Precio</label>
    <input type="text" id="precio" class="form-control dato" name="precio" value="<?php echo $_smarty_tpl->tpl_vars['maquina']->value[0]['precio'];?>
"placeholder="Valor en pesos">
</div>
<div class="form-group">
    <label for="image">Agregar Imagenes</label>
    <input type="file" name="image[]" id="image" multiple>
    </div>

     <button type="submit" id="Guardar_upd_maq" class="btn btn-default">Cargar</button>
</form>
</div>
<?php }
}
