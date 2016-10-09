<?php
  require('controller/Controller_DatTec.php');
  require('controller/Controller_Home.php');
  require('controller/Controller_Maq.php');
  require('config/appConfig.php');
  $controllerDatTec= new Controller_Home();
  $controllerDatTec= new Controller_Maq();
  $controllerDatTec= new Controller_DatTec();

  switch (isset($_GET[AppConfig::$ACTION]) ? $_GET[AppConfig::$ACTION] : AppConfig::$ACTION_DEFAULT ) {
      case AppConfig::$ACTION_DATOS_TECNICOS:
          break;
      case AppConfig::$ACTION_ADD_DATOS_TECNICOS:
          break;
      case AppConfig::$ACTION_DELETE_DATOS_TECNICOS:
          break;
      case AppConfig::$ACTION_CONTACTO:

          break;
      default:
          $controllerPag->getList('');
          break;
  }

?>
