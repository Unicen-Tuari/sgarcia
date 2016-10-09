<?php
require('libs/Smarty.class.php');

class View_DatTec {
  private $smarty;

  public function __construct(){
    $this->smarty = new Smarty;
    $this->smarty->debugging = true;
  }

  public function show_datos_tecnicos(){
    $this->smarty->display('pageMyS.tpl');
  }

}


?>
