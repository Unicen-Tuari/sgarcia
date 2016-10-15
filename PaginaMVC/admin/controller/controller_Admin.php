<?php
require('view/view_Admin.php');
require('model/model_Admin.php');

class controller_Admin
{
  private $viewAdmin;
  private $modeladmin;

  public function __construct()
  {
  //  $this->modelAdmin = new model_Admin();
    $this->viewAdmin = new view_Admin();
  }

  public function Cargar(){
     $this->viewAdmin->show();
   }

  }


?>
