<?php

class View_Maquinas {
  private $smarty;

  public function __construct(){
    $this->smarty= new Smarty;
    }

  public function showMaquinas($maquinas){
    $this->smarty->assign('maquinas',$maquinas);
    //print_r($maquinas);
    $this->smarty->display('maquinas.tpl');
  }


}


?>
