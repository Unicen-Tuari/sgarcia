<?php
require('libs/Smarty.class.php');

class View_Maquinas {
  private $smarty_Maq;

  public function __construct(){
    $this->smarty_Maq = new Smarty;
    $this->smarty_Maq->debugging = true;
  }

  public function show(){
    $this->smarty_Maq->display('pageMyS.tpl');
  }

}


?>
