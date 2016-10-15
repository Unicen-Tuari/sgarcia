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
  
  public function show_login($error_key){
      $this->smarty->assign('error_key',$error_key);
      $this->smarty->display('pageMyS.tpl');
      }


}


?>
