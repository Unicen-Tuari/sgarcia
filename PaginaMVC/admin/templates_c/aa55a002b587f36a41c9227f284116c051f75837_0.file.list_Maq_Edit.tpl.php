<?php
/* Smarty version 3.1.30, created on 2016-10-18 21:19:21
  from "C:\xampp\htdocs\dashboard\sgarcia\PaginaMVC\admin\templates\list_Maq_Edit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_580675b9128be3_35833388',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa55a002b587f36a41c9227f284116c051f75837' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dashboard\\sgarcia\\PaginaMVC\\admin\\templates\\list_Maq_Edit.tpl',
      1 => 1476808040,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_580675b9128be3_35833388 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form action="" method="POST" enctype="multipart/form-data" id="upd_maq">
  <div class="form-group">
    <label for="nombre">id</label>
    <input type="text" id="id_maq"  class="form-control dato" name="id_maq" value="<?php echo $_smarty_tpl->tpl_vars['maquina']->value[0]['id_maq'];?>
" placeholder="Denominacion" >

    <label for="nombre">Nombre</label>
    <input type="text" id="nombre"  class="form-control dato" name="nombre" value="<?php echo $_smarty_tpl->tpl_vars['maquina']->value[0]['nombre'];?>
" placeholder="Denominacion" >

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

    <label for="precio">Precio</label>
    <input type="text" id="precio" class="form-control dato" name="precio" value="<?php echo $_smarty_tpl->tpl_vars['maquina']->value[0]['precio'];?>
"placeholder="Valor en pesos">

    <label for="image">Agregar Imagenes</label>
    <input type="file" name="image[]" id="image" multiple>
    </div>

     <button type="submit" id="Guardar_upd_maq" class="btn btn-default">Cargar</button>
</form>
<?php }
}
