<?php
  require('controller/PagMySController.php');
  require('config/appConfig.php');
  $controllerPag = new PagMySController();

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
