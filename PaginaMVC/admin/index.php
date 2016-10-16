<?php
  require('controller/controller_Admin.php');
  require('config/Config_admin.php');


  if( !array_key_exists(appConfig::$ACTION, $_REQUEST) ||
  $_REQUEST[appConfig::$ACTION] == appConfig::$ACTION_DEFAULT )
  {
    $controllerAdmin= new controller_Admin();
    $controllerAdmin->Cargar();
    //$controllerHome->Cargar();
     }

  else {
    switch ($_REQUEST[appConfig::$ACTION]) {
      case appConfig::$ACTION_ADMIN:
          break;
      case appConfig::$ACTION_HOME:
          break;
      default:
        echo 'Pagina no encontrada';
        break;
    }
}








?>
