<?php
require('libs/Smarty.class.php');

class pageMySView {
  private $smarty;

  public function __construct(){
    $this->smarty = new Smarty;
    $this->smarty->debugging = true;
  }

  public function show(){
    $this->smarty->display('pageMyS.tpl');
  }

}


?>
