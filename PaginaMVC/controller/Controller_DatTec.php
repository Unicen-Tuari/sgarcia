<?php
require('view/View_DatTec.php');
require('model/Model_DatTec.php');

class Controller_DatTec
{
  private $modelDatTec;
  private $viewDatTec;

  public function __construct()
  {
    $this->modelDatTec= new Model_DatTec();
    $this->viewDatTec = new View_DatTec();
  }
}


?>
