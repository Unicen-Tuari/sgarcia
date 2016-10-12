<?php
require('view/View_Page.php');

class Controller_Page
{
  private $viewPage;

  public function __construct()
  {

    $this->viewPage = new View_Page();
  }

  public function Cargar(){
    //$tasks = $this->modelTask->getTasks();
    $this->viewPage->show();
  }

}


?>
