<?php
require('view/View_Maq_admin.php');
require('model/Model_Maq_Admin.php');

class controller_Maq_Admin
{
  private $modelMaq;
  private $viewMaq;

  public function __construct()
  {
    $this->modelMaq = new Model_Maq_Admin();
    $this->viewMaq = new View_Maq_admin();
  }

 public function Cargar()
 {
   $maquinas=$this->modelMaq->listarMaquinas();
   //print_r($maquinas);
   $this->viewMaq->show($maquinas);
 }

 private function esImagen($file_type){
       return ($file_type =='image/jpeg' || $file_type =='image/png' );
   }

 public function agregarMaquina(){
       if (isset($_POST['nombre']) && $_POST['nombre']!=''){
       $imagenes = [];
       if(isset($_FILES['image'])){
       for($i=0; $i<count($_FILES['image']['name']);$i++)
       {
         if(($_FILES['image']['size'][$i]>0) && ($this->esImagen($_FILES['image']['type'][$i])))
         {
             $image_name = $_FILES['image']['name'][$i];
             $image_tmp = $_FILES['image']['tmp_name'][$i];
             $image['name']=$image_name;
             $image['tmp_name']=$image_tmp;
             $imagenes[] = $image;
         }
       }

       }
       $nombre = $_POST['nombre'];
       $tipo = $_POST['tipo'];
       $precio = $_POST['precio'];
       $this->modelMaq->agregarMaquina($nombre,$tipo,$precio,$imagenes);
    }
     $maquinas = $this->modelMaq->listarMaquinas();
     $this->viewMaq->showListMaq($maquinas);
   }

public function borrarMaquina(){

  if (isset($_REQUEST['maquina'])){
    //var_dump($_REQUEST['maquina']);
    $id_maq = (int)$_REQUEST['maquina'];
    $this->modelMaq->borrarMaquina($id_maq);
  }
  $maquinas = $this->modelMaq->listarMaquinas();
  $this->viewMaq->showListMaq($maquinas);
 }


}
?>
