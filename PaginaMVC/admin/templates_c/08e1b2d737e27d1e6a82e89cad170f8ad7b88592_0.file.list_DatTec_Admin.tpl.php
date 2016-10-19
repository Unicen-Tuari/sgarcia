<?php
/* Smarty version 3.1.30, created on 2016-10-19 22:42:21
  from "C:\xampp\htdocs\dashboard\sgarcia\PaginaMVC\admin\templates\list_DatTec_Admin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5807daade95f98_94574957',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08e1b2d737e27d1e6a82e89cad170f8ad7b88592' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dashboard\\sgarcia\\PaginaMVC\\admin\\templates\\list_DatTec_Admin.tpl',
      1 => 1476909672,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5807daade95f98_94574957 (Smarty_Internal_Template $_smarty_tpl) {
?>
<ul class="list-group col-md-offset-2 col-md-8">
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
         <a class="deleteAction" id-maq="<?php echo $_smarty_tpl->tpl_vars['dato']->value['id_maq'];?>
" href="#">
            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
         </a>
         <a class="updateAction" id-maq="<?php echo $_smarty_tpl->tpl_vars['dato']->value['id_maq'];?>
" href="#">
          <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
         </a>

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
     </li>

  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</ul>
<?php }
}
