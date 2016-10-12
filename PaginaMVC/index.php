<?php
  require('controller/Controller_Page.php');
  require('controller/Controller_DatTec.php');
  require('controller/Controller_Home.php');
  require('controller/Controller_Maq.php');
  require('controller/Controller_Nosotros.php');
  require('controller/Controller_Contacto.php');
  require('config/appConfig.php');
  $controllerPage= new Controller_Page();
  $controllerHome= new Controller_Home();
  $controllerMaq= new Controller_Maq();
  $controllerDatTec= new Controller_DatTec();
  $controllerCont= new Controller_Contacto();
  $controllerNos= new Controller_Nosotros();

  //$controllerHome->Cargar();


  if( !array_key_exists(appConfig::$ACTION, $_REQUEST) ||
  $_REQUEST[appConfig::$ACTION] == appConfig::$ACTION_DEFAULT )
  {
    $controllerPage->Cargar();  }

  else {
    switch ($_REQUEST[appConfig::$ACTION]) {
      case appConfig::$ACTION_NOSOTROS:
          $controllerNos->Cargar();
          break;
      case appConfig::$ACTION_CONTACTO:
          $controllerCont->Cargar();
          break;

      default:
        echo 'Pagina no encontrada';
        break;
    }
}








?>
