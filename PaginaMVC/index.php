<?php
  //require('controller/Controller_DatTec.php');
  require('controller/Controller_Home.php');
  //require('controller/Controller_Maq.php');
  require('config/appConfig.php');
  $controllerHome= new Controller_Home();
//  $controllerMaq= new Controller_Maq();
  //$controllerDatTec= new Controller_DatTec();

  $controllerHome->Cargar();



?>
