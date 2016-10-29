<?php
require('view/View_Maquinas.php');
require('model/Model_Maq.php');
require('admin/model/model_DatTec_Admin.php');
require('admin/model/model_Maq_Admin.php');

class Controller_Maq
{
  private $modelMaq;
  private $viewMaq;

  private $modDat;
  private $modMaq;

  public function __construct()
  {
    $this->modelMaq = new Model_Maq();
    $this->viewMaq = new View_Maquinas();

    $this->modDat=new Model_DatTec_Admin();
    $this->modMaq=new Model_Maq_Admin();

  }

 public function Cargar()
 {
   $maquinas=$this->modelMaq->listarMaquinas();
   $this->viewMaq->showMaquinas($maquinas);
 }

 public function mostrarMaquina(){
   if (isset($_REQUEST['maquina'])){
     //var_dump($_REQUEST['maquina']);
     $id_maq = (int)$_REQUEST['maquina'];
   }
   $maquina=$this->modMaq->listarMaquina($id_maq);
   //$maquina['datos']=$this->modDat->listDatoTec($id_maq);
   //print_r($dato);
   //print_r($maquina);
   $this->viewMaq->showMaq($maquina);



 }

}
?>
