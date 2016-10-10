<?php
require('view/View_Home.php');
require('model/Model_Home.php');

class Controller_Home
{
  private $modelHome;
  private $viewHome;

  public function __construct()
  {
    $this->modelHome = new Model_Home();
    $this->viewHome = new View_Home();
  }

  public function Cargar(){
    //$tasks = $this->modelTask->getTasks();
    $this->viewHome->show();
  }

}


?>
