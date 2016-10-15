<?php
  require('controller/Controller_Page.php');
  require('controller/Controller_DatTec.php');
  require('controller/Controller_Home.php');
  require('controller/Controller_Maq.php');
  require('controller/Controller_Nosotros.php');
  require('controller/Controller_Contacto.php');
  require('config/appConfig.php');


  if( !array_key_exists(appConfig::$ACTION, $_REQUEST) ||
  $_REQUEST[appConfig::$ACTION] == appConfig::$ACTION_DEFAULT )
  {
    $controllerAdmin= new Controller_Page();
    $controllerAdmin->Cargar();
    //$controllerHome->Cargar();
     }

  else {
    switch ($_REQUEST[appConfig::$ACTION]) {
      case appConfig::$ACTION_ADMIN:
          break;
      case appConfig::$ACTION_HOME:
          break;

      case appConfig::$ACTION_NOSOTROS:
          break;
      case appConfig::$ACTION_CONTACTO:
          break;

      default:
        echo 'Pagina no encontrada';
        break;
    }
}








?>
