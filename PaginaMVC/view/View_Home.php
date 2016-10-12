<?php


class View_Home {
  private $smarty;

  public function __construct(){
    $this->smarty = new Smarty;
  }

  public function show(){
    $this->smarty->display('inicio.tpl');
  }

}


?>
