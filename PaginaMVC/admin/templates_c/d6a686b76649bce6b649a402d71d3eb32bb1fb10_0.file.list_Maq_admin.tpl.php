<?php
/* Smarty version 3.1.30, created on 2016-10-17 02:43:12
  from "C:\xampp\htdocs\dashboard\sgarcia\PaginaMVC\admin\templates\list_Maq_admin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58041ea0275057_51060026',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd6a686b76649bce6b649a402d71d3eb32bb1fb10' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dashboard\\sgarcia\\PaginaMVC\\admin\\templates\\list_Maq_admin.tpl',
      1 => 1476590044,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58041ea0275057_51060026 (Smarty_Internal_Template $_smarty_tpl) {
?>
<ul class="list-group">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['maquinas']->value, 'maquina');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['maquina']->value) {
?>
    <li class="list-group-item">
      <strong>Nombre:<?php echo $_smarty_tpl->tpl_vars['maquina']->value['nombre'];?>
&nbsp;</strong> <br><strong>Tipo:</strong><?php echo $_smarty_tpl->tpl_vars['maquina']->value['tipo'];?>
&nbsp;<br><strong>Precio:$</strong><?php echo $_smarty_tpl->tpl_vars['maquina']->value['precio'];?>

         <?php if ($_smarty_tpl->tpl_vars['maquina']->value['imagenes']) {?>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['maquina']->value['imagenes'], 'imagen', false, 'index');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['imagen']->value) {
?>
            <img src="../<?php echo $_smarty_tpl->tpl_vars['imagen']->value['path'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['maquina']->value['nombre'];?>
_image_<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" WIDTH=210 HEIGHT=315 class="img-thumbnail" />
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        <?php }?>

        <a class="deleteAction" id-maq="<?php echo $_smarty_tpl->tpl_vars['maquina']->value['id_maq'];?>
" href="#">
           <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
        </a>
        <a class="updateAction" id-maq="<?php echo $_smarty_tpl->tpl_vars['maquina']->value['id_maq'];?>
" href="#">
         <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
        </a>


      </li>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</ul>
<?php }
}
