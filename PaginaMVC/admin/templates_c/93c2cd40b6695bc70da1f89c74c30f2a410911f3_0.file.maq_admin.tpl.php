<?php
/* Smarty version 3.1.30, created on 2016-10-18 21:00:54
  from "C:\xampp\htdocs\dashboard\sgarcia\PaginaMVC\admin\templates\maq_admin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58067166543754_39912084',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '93c2cd40b6695bc70da1f89c74c30f2a410911f3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dashboard\\sgarcia\\PaginaMVC\\admin\\templates\\maq_admin.tpl',
      1 => 1476765766,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:list_Maq_Admin.tpl' => 1,
  ),
),false)) {
function content_58067166543754_39912084 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form action="" method="POST" enctype="multipart/form-data" id="add_maq">
   <div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="text" id="nombre"  class="form-control dato" name="nombre" placeholder="Denominacion" >

    <label for="tipo">Tipo</label>
    <select name="tipo" class="form-control" id="tipo">
    <option value="" disabled selected> Elija tipo de maquina</option>
    <option value="Embutidora">Embutidora</option>
    <option value="Moledora Embutidora">Moledora Embutidora</option>
     <option value="Mixer">Mixer</option>
     <option value="Mixer-Dual">Mixer-Dual</option>
    </select>

    <label for="precio">Precio</label>
    <input type="text" id="precio" class="form-control dato" name="precio" placeholder="Valor en pesos">

    <label for="image">Imagenes</label>
    <input type="file" name="image[]" id="image" multiple>
    </div>

     <button type="submit" id="btnGuardar" class="btn btn-default">Cargar</button>
</form>

<div id="listMaq">
<?php $_smarty_tpl->_subTemplateRender("file:list_Maq_Admin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>
<?php echo '<script'; ?>
 src="js/cargaMaquina.js"><?php echo '</script'; ?>
>
<?php }
}
