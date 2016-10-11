<?php
//require('libs/Smarty.class.php');

class View_DatTec {
  private $smarty_tec;

  public function __construct(){
    $this->smarty_tec = new Smarty;
    $this->smarty_tec->debugging = true;
  }

  public function show_datos_tecnicos(){
    $this->smarty_tec->display('pageMyS.tpl');
  }

}


?>
