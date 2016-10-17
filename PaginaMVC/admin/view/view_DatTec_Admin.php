<?php

class view_DatTec_admin {
  private $smarty;

  public function __construct(){
    $this->smarty= new Smarty;
    }

  public function show($maquinas,$datos){
    $this->smarty->assign('maquinas',$maquinas);
    $this->smarty->assign('datos',$datos);
    $this->smarty->display('datTec_admin.tpl');
  }

  public function showListMaq($maquinas,$datos){
    $this->smarty->assign('maquinas',$maquinas);
    $this->smarty->assign('datos',$datos);
    $this->smarty->display('list_DatTec_admin.tpl');
  }

}


?>
