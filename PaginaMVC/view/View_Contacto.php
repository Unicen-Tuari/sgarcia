<?php

class View_Contacto {
  private $smarty_cont;

  public function __construct(){
    $this->smarty_cont = new Smarty;
    $this->smarty_cont->debugging = true;
  }

  public function show(){
    $this->smarty_cont->display('contacto.tpl');
  }

}


?>
