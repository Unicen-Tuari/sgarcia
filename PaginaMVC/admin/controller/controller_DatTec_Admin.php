<?php
require('view/View_DatTec_admin.php');
require('model/Model_DatTec_Admin.php');
//require('model/Model_Maq_Admin.php');

class controller_DatTec_Admin
{
  private $modelDatTec;
  private $modelMaq;
  private $viewDatTec;

  public function __construct()
  {
    $this->modelMaq = new Model_Maq_Admin();
    $this->modelDatTec = new Model_DatTec_Admin();
    $this->viewDatTec = new View_DatTec_admin();
  }

 public function Cargar()
 {
   $maquinas=$this->modelMaq->listarMaquinas();
   $datos=$this->modelDatTec->listarDatosTec();
   $this->viewDatTec->show($maquinas,$datos);
 }


}
?>
