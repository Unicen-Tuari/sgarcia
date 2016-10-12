<?php

class View_Maquinas {
  private $smarty_Maq;

  public function __construct(){
    $this->smarty_Maq = new Smarty;
    }

  public function show(){
    $this->smarty_Maq->display('pageMyS.tpl');
  }

}


?>
