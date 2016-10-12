<?php
require('view/View_Contacto.php');


class Controller_Contacto
{

  private $viewCont;

  public function __construct()
  {
    $this->viewCont = new View_Contacto();
  }
  public function Cargar(){
    //$tasks = $this->modelTask->getTasks();
    $this->viewCont->show();
  }

}


?>
