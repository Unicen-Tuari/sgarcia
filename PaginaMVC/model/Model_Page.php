<?php

class Model_Page
{
  private $db;

  function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;dbname=martinezstaneck;charset=utf8', 'root', '');
  }

  function list_usuarios(){
    $select = $this->db->prepare("select * from usuario");
    $select->execute();
    $usuarios = $select->fetchAll(PDO::FETCH_ASSOC);
    return $usuarios;
  }


}

?>
