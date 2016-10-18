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
       $denom = $_POST['denominacion'];
       $potencia = $_POST['potencia'];
       $altura = $_POST['altura'];
       $ancho = $_POST['ancho'];
       $peso = $_POST['peso'];
       $capacidad = $_POST['capacidad'];
       $this->modelDatTec->agregarDatosTecnicos($id_maq,$denom,$potencia,$altura,$ancho,$peso,$capacidad);
    }
    $datos = $this->modelDatTec->listarDatosTec();
    $this->viewDatTec->showListDat($datos);
   }

 public function BorrarDatoTecnico(){
     if (isset($_REQUEST['maquina'])){
       //var_dump($_REQUEST['maquina']);
       $id_maq = (int)$_REQUEST['maquina'];
       $this->modelDatTec->borrarDato($id_maq);
     }
     $datos = $this->modelDatTec->listarDatosTec();
     $this->viewDatTec->showListDat($datos);
    }


}
?>
