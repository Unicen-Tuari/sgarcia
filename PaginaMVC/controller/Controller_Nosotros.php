<?php
require('view/View_Nosotros.php');


class Controller_Nosotros
{

  private $viewNos;

  public function __construct()
  {
    $this->viewNos = new View_Nosotros();
  }
  public function Cargar(){
    //$tasks = $this->modelTask->getTasks();
    $this->viewNos->show();
  }

}


?>
