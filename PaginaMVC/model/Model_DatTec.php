<?php

class Model_DatTec
{
  private $db;

  public function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;dbname=martinezstaneck;charset=utf8', 'root', '');
  }

  public function listarDatosTec(){
  $maq_to_return =[];
  $select = $this->db->prepare("select * from datos_tecnicos");
  $select->execute();
  $maquinas = $select->fetchAll(PDO::FETCH_ASSOC);
  foreach ($maquinas as $idMaq => $maquina) {
    $select = $this->db->prepare("select * from imagen where fk_id_maq=?");
    $select->execute(array($maquina['id_maq']));
    $images = $select->fetchAll(PDO::FETCH_ASSOC);
    $maquina['imagenes'] = $images;
    $maq_to_return[]=$maquina;
  }
  return $maq_to_return;
  }

}


?>
