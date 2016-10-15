<?php
require('view/View_Page.php');
require('model/Model_Page.php');

class Controller_Page
{
  private $viewPage;
  private $modelPage;

  public function __construct()
  {
    $this->modelPage = new Model_Page();
    $this->viewPage = new View_Page();
  }

  public function Cargar(){

    if (isset($_POST['key'])){
    $usuarios=$this->modelPage->list_usuarios();
    $error_key=true;
    foreach ($usuarios as $usuario) {
      if ($usuario['clave']==$_POST['clav']) {
        $error_key=false;
       }
      }
    $this->viewPage->show_login($error_key);
   }
   else {
     $this->viewPage->show();
   }

  }

}


?>
