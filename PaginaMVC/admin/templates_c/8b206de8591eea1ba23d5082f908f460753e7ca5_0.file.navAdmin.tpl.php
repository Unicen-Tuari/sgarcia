<?php
/* Smarty version 3.1.30, created on 2016-10-16 03:24:33
  from "C:\xampp\htdocs\dashboard\sgarcia\PaginaMVC\admin\templates\navAdmin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5802d6d120d051_59288019',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b206de8591eea1ba23d5082f908f460753e7ca5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dashboard\\sgarcia\\PaginaMVC\\admin\\templates\\navAdmin.tpl',
      1 => 1476581070,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5802d6d120d051_59288019 (Smarty_Internal_Template $_smarty_tpl) {
?>
<nav class="navbar navbar-default">
  <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

    </div>
    <!-- Barra de navegacion general -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li> <a id="maq_admin" href="#" >Las Maquinas <span class="sr-only">(current)</span></a></li>
        <li><a id="tablas_admin" href="#">Datos Tecnicos</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <form class="navbar-form navbar-left" role="search">
          <button type="submit" id="logout" href="#" class="btn btn-default">Logout</button>
        </form>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<?php }
}
