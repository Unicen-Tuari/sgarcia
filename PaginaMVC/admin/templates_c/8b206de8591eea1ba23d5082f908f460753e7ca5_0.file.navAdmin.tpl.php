<?php
/* Smarty version 3.1.30, created on 2016-10-15 16:44:55
  from "C:\xampp\htdocs\dashboard\sgarcia\PaginaMVC\admin\templates\navAdmin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_580240e7a87b05_87028999',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b206de8591eea1ba23d5082f908f460753e7ca5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dashboard\\sgarcia\\PaginaMVC\\admin\\templates\\navAdmin.tpl',
      1 => 1476416849,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_580240e7a87b05_87028999 (Smarty_Internal_Template $_smarty_tpl) {
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
        <li class="dropdown">
          <a class="dropdown-toggle" id="maquinas" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Maquinas <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a id="list_Maq" href="#">Ver Maquinas</a></li>
            <li role="separato" class="divider"></li>
            <li><a id="add_Maq" href="#" id="mixer">Agregar Maquina</a></li>
            <li role="separator" class="divider"></li>
            <li><a id="upd_Maq" href="#">Modificar Maquina</a></li>
            <li role="separator" class="divider"></li>
            <li><a id="del_Maq" href="#">Eliminar Maquina</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" id="maquinas" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Maquinas <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a id="list_Dat" href="#">Ver datos Tecnicos</a></li>
            <li role="separator" class="divider"></li>
            <li><a id="add_Dat" href="#" id="mixer">Agregar Datos tecnicos</a></li>
            <li role="separator" class="divider"></li>
            <li><a id="upd_Dat" href="#">Modificar Datos Tecnicos</a></li>
            <li role="separator" class="divider"></li>
            <li><a id="del_Dat" href="#">Eliminar Datos tecnicos</a></li>
          </ul>
        </li>
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
