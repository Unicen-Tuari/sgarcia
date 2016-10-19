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
    $controllerPage= new Controller_Page();
    $controllerPage->Cargar();
    //$controllerHome->Cargar();
     }

  else {
    switch ($_REQUEST[appConfig::$ACTION]) {
      case appConfig::$ACTION_ADMIN:
          echo $_POST['clav'];
          $controllerPage= new Controller_Page();
          $controllerPage->Cargar();
          break;
      case appConfig::$ACTION_HOME:
          $controllerHome= new Controller_Home();
          $controllerHome->Cargar();
          break;

      case appConfig::$ACTION_MOSTRAR_MAQUINAS:
            $controllerMaq= new Controller_Maq();
            $controllerMaq->Cargar();
              break;
      case appConfig::$ACTION_MOSTRA_DET_MAQUINA:
            $controllerMaq= new Controller_Maq();
            $controllerMaq->mostrarMaquina();
            break;


      case appConfig::$ACTION_DATOS_TECNICOS:
            $controllerDatTec= new Controller_DatTec();
            $controllerDatTec->Cargar();
            break;

      case appConfig::$ACTION_NOSOTROS:
          $controllerNos= new Controller_Nosotros();
          $controllerNos->Cargar();
          break;
      case appConfig::$ACTION_CONTACTO:
          $controllerCont= new Controller_Contacto();
          $controllerCont->Cargar();
          break;

      default:
        echo 'Pagina no encontrada';
        break;
    }
}








?>
