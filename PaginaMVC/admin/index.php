<?php
  require('controller/controller_Admin.php');
  require('config/config_admin.php');
  require('controller/controller_Maq_Admin.php');
  require('controller/controller_DatTec_Admin.php');


  if( !array_key_exists(appConfig::$ACTION, $_REQUEST) ||
  $_REQUEST[appConfig::$ACTION] == appConfig::$ACTION_DEFAULT )
  {
    $controllerAdmin= new controller_Admin();
    $controllerAdmin->Cargar();
    //$controllerHome->Cargar();
     }

  else {
    switch ($_REQUEST[appConfig::$ACTION]) {
      case appConfig::$ACTION_MAQ_ADMIN:
          $controllerMaq_Admin= new Controller_Maq_Admin();
          $controllerMaq_Admin->Cargar();
          break;
      case appConfig::$ACTION_ADD_MAQ:
          $controllerMaq_Admin= new Controller_Maq_Admin();
          $controllerMaq_Admin->agregarMaquina();
          break;
      case appConfig::$ACTION_DEL_MAQ:
          $controllerMaq_Admin= new Controller_Maq_Admin();
          //print_r($_REQUEST);
          $controllerMaq_Admin->borrarMaquina();
          break;

      case appConfig::$ACTION_DATTEC_ADMIN:
          $controllerDat_Admin= new controller_DatTec_Admin();
          $controllerDat_Admin->Cargar();
          break;
      case appConfig::$ACTION_ADD_DAT_TEC:
          $controllerDat_Admin= new controller_DatTec_Admin();
          $controllerDat_Admin->AgregarDatoTecnico();
          break;
      default:
        echo 'Pagina no encontrada';
        break;
    }
}








?>
