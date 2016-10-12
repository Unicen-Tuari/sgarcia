<?php

class View_Nosotros {
  private $smarty_Nos;

  public function __construct(){
    $this->smarty_Nos = new Smarty;
    }

  public function show(){
    $this->smarty_Nos->display('empresa.tpl');
  }

}


?>
