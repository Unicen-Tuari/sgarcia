<?php
require('libs/Smarty.class.php');

class View_Home {
  private $smarty;

  public function __construct(){
    $this->smarty = new Smarty;
    $this->smarty->debugging = true;
  }

  public function show_nomepage(){
    
    $this->smarty->display('pageMyS.tpl');
  }

}


?>
