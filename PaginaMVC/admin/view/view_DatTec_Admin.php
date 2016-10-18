<?php

class view_DatTec_admin {
  private $smarty;

  public function __construct(){
    $this->smarty= new Smarty;
    }

  public function show($maquinas,$datos){
    $this->smarty->assign('maquinas',$maquinas);
    //var_dump((int)$maquinas[0]['id_maq']);
    $this->smarty->assign('datos',$datos);
    $this->smarty->display('datTec_admin.tpl');
  }

  public function showListDat($datos){
    $this->smarty->assign('datos',$datos);
    $this->smarty->display('list_DatTec_admin.tpl');
  }

}


?>
