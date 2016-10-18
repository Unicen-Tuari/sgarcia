<?php
class model_DatTec_Admin
{
  private $db;

  public function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;dbname=martinezstaneck;charset=utf8', 'root', '');
  }

  public function listarDatosTec(){
  $dat_to_return =[];
  $select = $this->db->prepare("select * from datos_tecnicos");
  $select->execute();
  $datos = $select->fetchAll(PDO::FETCH_ASSOC);
  foreach ($datos as $idMaq => $dato) {
    $select = $this->db->prepare("select * from imagen where fk_id_maq=?");
    $select->execute(array($dato['id_maq']));
    $images = $select->fetchAll(PDO::FETCH_ASSOC);
    $dato['imagenes'] = $images;
    $dat_to_return[]=$dato;
  }
  return $dat_to_return;
}


public function listDatoTec($id){
$dat_to_return =[];
$select = $this->db->prepare("select * from datos_tecnicos where id_maq=?");
$select->execute(array($id));
$datos = $select->fetchAll(PDO::FETCH_ASSOC);
foreach ($datos as $idMaq => $dato) {
  $select = $this->db->prepare("select * from imagen where fk_id_maq=?");
  $select->execute(array($dato['id_maq']));
  $images = $select->fetchAll(PDO::FETCH_ASSOC);
  $dato['imagenes'] = $images;
  $dat_to_return[]=$dato;
}
return $dat_to_return;
}


 public function AgregarDatosTecnicos($id_maq,$denom,$potencia,$altura,$ancho,$peso,$capacidad){
  $insert = $this->db->prepare("INSERT INTO datos_tecnicos(id_maq,denominacion,potencia,altura,ancho,peso,capacidad) VALUES(?,?,?,?,?,?,?)");
  $dat_Tec=1;
  $update = $this->db->prepare("update maquina set datos_tecnicos=? where id_maq=?");
  $update->execute(array($dat_Tec,$id_maq));
  $insert->execute(array($id_maq,$denom,$potencia,$altura,$ancho,$peso,$capacidad));
  //return $this->listDatoTec($id_maq);
}


}

?>
