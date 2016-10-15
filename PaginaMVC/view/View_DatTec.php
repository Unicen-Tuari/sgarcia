<?php
class View_DatTec {
  private $smarty_tec;

  public function __construct(){
    $this->smarty_tec = new Smarty;
  }

  public function show($maquinas){
    $this->smarty_tec->assign('maquinas',$maquinas);
    $this->smarty_tec->display('tecnica.tpl');
  }

}


?>
