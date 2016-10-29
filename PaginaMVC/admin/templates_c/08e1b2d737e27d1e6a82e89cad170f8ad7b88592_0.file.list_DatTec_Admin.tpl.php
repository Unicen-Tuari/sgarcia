<?php
/* Smarty version 3.1.30, created on 2016-10-29 01:50:47
  from "C:\xampp\htdocs\dashboard\sgarcia\PaginaMVC\admin\templates\list_DatTec_Admin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5813e457bf73e9_99966915',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08e1b2d737e27d1e6a82e89cad170f8ad7b88592' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dashboard\\sgarcia\\PaginaMVC\\admin\\templates\\list_DatTec_Admin.tpl',
      1 => 1477698636,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5813e457bf73e9_99966915 (Smarty_Internal_Template $_smarty_tpl) {
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
             <tbody >
               <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dato']->value['dat_tec'], 'dat');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['dat']->value) {
?>
                 <tr >
                   <div id="<?php echo $_smarty_tpl->tpl_vars['dat']->value['id_dat'];?>
">




                    <td><?php echo $_smarty_tpl->tpl_vars['dat']->value['caracteristica'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['dat']->value['valor'];?>
</td>
                    <td>
                      <a class="deleteAction" id-dat="<?php echo $_smarty_tpl->tpl_vars['dat']->value['id_dat'];?>
" href="#">
                      <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                      </a>
                    </td>
                    <td>
                      <a class="updateAction" id-dat="<?php echo $_smarty_tpl->tpl_vars['dat']->value['id_dat'];?>
" href="#">
                      <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                      </a>
                    </td>

                  </div>

                 </tr>

         </tbody>
             <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

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
