<?php

class View_Nosotros {
  private $smarty_Nos;

  public function __construct(){
    $this->smarty_Nos = new Smarty;
    $this->smarty_Nos->debugging = true;
  }

  public function show(){
    $this->smarty_Nos->display('empresa.tpl');
  }

}


?>
