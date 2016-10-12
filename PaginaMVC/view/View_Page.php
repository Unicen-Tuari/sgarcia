<?php
require('libs/Smarty.class.php');

class View_Page {
  private $smarty;

  public function __construct(){
    $this->smarty = new Smarty;
  }

  public function show(){

    $this->smarty->display('pageMyS.tpl');
  }

}


?>
