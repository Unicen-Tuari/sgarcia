<?php
require('libs/Smarty.class.php');

class view_Admin {
  private $smarty;

  public function __construct(){
    $this->smarty = new Smarty;
  }

  public function show(){
    $this->smarty->display('pageMyS.tpl');
  }

}


?>
