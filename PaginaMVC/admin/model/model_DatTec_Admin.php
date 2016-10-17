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


public function listarDatoTec($id){
$dat_to_return =[];
$select = $this->db->prepare("select * from datos_tecnicos where id_maq=?");
$select->execute(array($id));
$datos = $select->fetchAll(PDO::FETCH_ASSOC);
foreach ($datos as $idMaq => $dato) {
  $select = $this->db->prepare("select * from imagen where fk_id_maq=?");
  $select->execute(array($maquina['id_maq']));
  $images = $select->fetchAll(PDO::FETCH_ASSOC);
  $dato['imagenes'] = $images;
  $dat_to_return[]=$dato;
}
return $dat_to_return;
}


 public function AgregarDatoTecnico($nombre,$tipo,$precio,$images){
  $insert = $this->db->prepare("INSERT INTO maquina(nombre,tipo,precio,datos_tecnicos) VALUES(?,?,?,?)");
  $dat_Tec=0;
  $insert->execute(array($nombre,$tipo,$precio,$dat_Tec));
  $fk_id_maq = $this->db->lastInsertId();

  foreach ($images as $image) {
    $path_image =  $this->copyImage($image);
    $insert = $this->db->prepare("INSERT INTO imagen(path, fk_id_maq) VALUES(?,?)");
    $insert->execute(array($path_image,$fk_id_maq));
   }
  return $this->listarMaquina($fk_id_maq);
}

function copyImage($image){
    $path = 'images/'.uniqid().$image["name"];
    $path_upload='../'.$path;
    move_uploaded_file($image["tmp_name"], $path_upload);
    return $path;
  }


}

?>
