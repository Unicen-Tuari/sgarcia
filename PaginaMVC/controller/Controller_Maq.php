<?php
require('view/View_Maquinas.php');
require('model/Model_Maq.php');

class Controller_Maq
{
  private $modelMaq;
  private $viewMaq;

  public function __construct()
  {
    $this->modelMaq = new Model_Maq();
    $this->viewMaq = new View_Maquinas();
  }

 public function Cargar()
 {
   $maquinas=$this->modelMaq->listarMaquinas();
   $this->viewMaq->showMaquinas($maquinas);
 }

}
?>
