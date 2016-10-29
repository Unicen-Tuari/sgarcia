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

 public function AgregarDatoTecnico(){
       if (isset($_POST['id_maq']) && $_POST['id_maq']!=''){
       $id_maq = (int)$_POST['id_maq'];
       $carac = $_POST['caracteristica'];
       $val = $_POST['valor'];
       $this->modelDatTec->agregarDatosTecnicos($id_maq,$carac,$val);
    }
    $datos = $this->modelDatTec->listarDatosTec();
    $this->viewDatTec->showListDat($datos);
   }

 public function BorrarDatoTecnico(){
     if (isset($_REQUEST['dato'])){
       $id_dat = (int)$_REQUEST['dato'];
       $this->modelDatTec->borrarDato($id_dat);
     }
     $datos = $this->modelDatTec->listarDatosTec();
     $this->viewDatTec->showListDat($datos);
    }

    public function editarDatoTecnico()
    { if (isset($_REQUEST['dato'])){
      $id_dat = (int)$_REQUEST['dato'];
      $dato=$this->modelDatTec->listDatoTec($id_dat);
      }
      $this->viewDatTec->showDatEdit($dato);
    }

    public function AgregarDatoTecnicoAct()
    { 
      if (isset($_POST['id_maq']) && $_POST['id_maq']!=''){
      $id_dat= $_POST['id_dat'];
      $id_maq= $_POST['id_maq'];
      $caract= $_POST['caracteristica'];
      $val = $_POST['valor'];
      $this->modelDatTec->agregarDatoAct($id_dat,$id_maq,$caract,$val);
    }
    $maquinas=$this->modelMaq->listarMaquinas();
    $datos = $this->modelDatTec->listarDatosTec();
    $this->viewDatTec->show($maquinas,$datos);

    }


}
?>
