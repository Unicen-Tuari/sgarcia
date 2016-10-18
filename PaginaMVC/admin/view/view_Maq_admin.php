<?php

class View_Maq_admin {
  private $smarty;

  public function __construct(){
    $this->smarty= new Smarty;
  }

  public function show($maquinas){
    $this->smarty->assign('maquinas',$maquinas);
    $this->smarty->display('maq_admin.tpl');
  }

  public function showListMaq($maquinas){
    $this->smarty->assign('maquinas',$maquinas);
    $this->smarty->display('list_Maq_admin.tpl');
  }

}


?>
