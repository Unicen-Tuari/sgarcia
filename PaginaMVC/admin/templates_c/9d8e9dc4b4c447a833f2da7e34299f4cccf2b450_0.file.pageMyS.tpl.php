<?php
/* Smarty version 3.1.30, created on 2016-10-15 16:44:55
  from "C:\xampp\htdocs\dashboard\sgarcia\PaginaMVC\admin\templates\pageMyS.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_580240e79e3ee6_82120318',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d8e9dc4b4c447a833f2da7e34299f4cccf2b450' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dashboard\\sgarcia\\PaginaMVC\\admin\\templates\\pageMyS.tpl',
      1 => 1476489419,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerMyS.tpl' => 1,
    'file:navAdmin.tpl' => 1,
    'file:footerMyS.tpl' => 1,
  ),
),false)) {
function content_580240e79e3ee6_82120318 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:headerMyS.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:navAdmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<article>
  <div id="contenido">
  </div>
</article>
<?php $_smarty_tpl->_subTemplateRender("file:footerMyS.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
