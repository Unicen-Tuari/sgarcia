<?php
/* Smarty version 3.1.30, created on 2016-10-18 02:53:41
  from "C:\xampp\htdocs\dashboard\sgarcia\PaginaMVC\admin\templates\list_DatTec_admin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58057295c359a2_61597369',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4df873a3698bdaae043de01f3b4b2cdd7cff527b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dashboard\\sgarcia\\PaginaMVC\\admin\\templates\\list_DatTec_admin.tpl',
      1 => 1476751450,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58057295c359a2_61597369 (Smarty_Internal_Template $_smarty_tpl) {
?>
<ul class="list-group">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['datos']->value, 'dato');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['dato']->value) {
?>
     <li class="list-group-item">
         <?php if ($_smarty_tpl->tpl_vars['dato']->value['imagenes']) {?>
         <img src="../<?php echo $_smarty_tpl->tpl_vars['dato']->value['imagenes'][0]['path'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['maquina']->value['nombre'];?>
_image_<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" WIDTH=140 HEIGHT=210 class="img-thumbnail" />
         <?php }?>
           <table class="table table-striped">
             <thead>
               <tr>
                 <th>Ficha Tecnica</th>
               </tr>
             </thead>
             <tbody>
               <tr>
               <td>Denominacion</td>
               <td><?php echo $_smarty_tpl->tpl_vars['dato']->value['denominacion'];?>
</td>
               </tr>
               <tr>
               <td>Potencia</td>
               <td><?php echo $_smarty_tpl->tpl_vars['dato']->value['potencia'];?>
</td>
               </tr>
               <tr>
               <td>Altura</td>
               <td><?php echo $_smarty_tpl->tpl_vars['dato']->value['altura'];?>
</td>
               </tr>
               <tr>
               <td>Ancho</td>
               <td><?php echo $_smarty_tpl->tpl_vars['dato']->value['ancho'];?>
</td>
               </tr>
               <tr>
               <td>Peso</td>
               <td><?php echo $_smarty_tpl->tpl_vars['dato']->value['peso'];?>
</td>
               </tr>
               <tr>
               <td>Capacidad</td>
               <td><?php echo $_smarty_tpl->tpl_vars['dato']->value['capacidad'];?>
</td>
               </tr>
             </tbody>
           </table>
         </div>
     </li>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</ul>
<?php }
}
