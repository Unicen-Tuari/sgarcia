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
  $select = $this->db->prepare("select * from maquina");
  $select->execute();
  $maquinas = $select->fetchAll(PDO::FETCH_ASSOC);
  foreach ($maquinas as $idMaq => $maquina) {
    $selectDat = $this->db->prepare("select * from datos_tecnicos where id_maq=?");
    $selectDat->execute(array($maquina['id_maq']));
    $maquina['datos'] = $selectDat->fetchAll(PDO::FETCH_ASSOC);
    $selectImg = $this->db->prepare("select * from imagen where fk_id_maq=?");
    $selectImg->execute(array($maquina['id_maq']));
    $images = $selectImg->fetchAll(PDO::FETCH_ASSOC);
    $maquina['imagenes'] = $images;
    $maq_to_return[]=$maquina;
  }
  return $maq_to_return;
  }

}


?>
