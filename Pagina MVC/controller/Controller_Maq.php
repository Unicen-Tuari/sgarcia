<?php
require('view/pageMySView.php');
require('model/pageMySViewModel.php');

class Controller_Maq
{
  private $modelPage;
  private $viewPage;

  public function __construct()
  {
    $this->modelPage = new pageMySViewModel();
    $this->viewPage = new pageMySView();
  }

  public function getList($added){
    //$tasks = $this->modelTask->getTasks();
    $this->viewPage->show();
  }

  public function addTask(){
    $added = false;
    //print_r($_FILES['image']);
    if (isset($_POST['task']) && $_POST['task']!=''){
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
      $task = $_POST['task'];
      $description = $_POST['description'];
      $this->modelTask->addTask($task,$description,$imagenes);
      $added=true;
    }
    $this->getList($added);
  }
  public function deleteTask(){
    if (isset($_REQUEST['task'])){
      $task = $_REQUEST['task'];
      $this->modelTask->deleteTask($task);
    }
    $this->getList(false);
   }
   public function toggleStatusTask(){
     if (isset($_REQUEST['task'])){
       $task = $_REQUEST['task'];
       $this->modelTask->toggleStatusTask($task);
     }
     $this->getList(false);
   }

    private function esImagen($file_type){
      return ($file_type =='image/jpeg' || $file_type =='image/png' );
  }
}


?>
