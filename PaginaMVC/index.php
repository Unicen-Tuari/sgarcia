<?php
  require('controller/Controller_DatTec.php');
  require('controller/Controller_Home.php');
  require('controller/Controller_Maq.php');
  require('config/appConfig.php');
  $controllerHome= new Controller_Home();
  $controllerMaq= new Controller_Maq();
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
          $controllerHome->Cargar('');
          break;
  }

?>
