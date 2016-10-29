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
  $select = $this->db->prepare("select id_maq from maquina");
  $select->execute();
  $maquinas = $select->fetchAll(PDO::FETCH_ASSOC);
  foreach ($maquinas as $idMaq => $maq) {
    $select = $this->db->prepare("select * from datos_tecnicos where id_maq=?");
    $select->execute(array($maq['id_maq']));
    $datos = $select->fetchAll(PDO::FETCH_ASSOC);
    $maq['dat_tec'] = $datos;
    $select = $this->db->prepare("select * from imagen where fk_id_maq=?");
    $select->execute(array($maq['id_maq']));
    $images = $select->fetchAll(PDO::FETCH_ASSOC);
    $maq['imagenes'] = $images;
    $dat_to_return[]=$maq;
  }
  return $dat_to_return;
}


public function listDatoTec($id){
  $dat_to_return =[];
  $select = $this->db->prepare("select * from datos_tecnicos where id_dat=?");
  $select->execute(array($id));
  $datos = $select->fetchAll(PDO::FETCH_ASSOC);
  $maquina['dat_tec']=$datos;
  $select = $this->db->prepare("select * from imagen where fk_id_maq=?");
  $select->execute(array($datos[0]['id_maq']));
  $images = $select->fetchAll(PDO::FETCH_ASSOC);
  $maquina['imagenes'] = $images;
  $dat_to_return=$maquina;
  return $dat_to_return;
}

 public function agregarDatoAct($id_dat,$id_maq,$caracteristica,$valor){
   $insert = $this->db->prepare("update datos_tecnicos set caracteristica=? where id_dat=?");
   $insert->execute(array($caracteristica,$id_dat));
   $insert = $this->db->prepare("update datos_tecnicos set valor=? where id_dat=?");
   $insert->execute(array($valor,$id_dat));
   return $this->listDatoTec($id_dat);

 }

 public function AgregarDatosTecnicos($id_maq,$caracteristica,$valor){
  $insert = $this->db->prepare("INSERT INTO datos_tecnicos(id_maq,caracteristica,valor) VALUES(?,?,?)");
  $dat_Tec=1;
  $update = $this->db->prepare("update maquina set datos_tecnicos=? where id_maq=?");
  $update->execute(array($dat_Tec,$id_maq));
  $insert->execute(array($id_maq,$caracteristica,$valor));
  //return $this->listDatoTec($id_maq);
}

public function borrarDato($id_dat){
  $delete = $this->db->prepare("delete from datos_tecnicos where id_dat=?");
  $delete->execute(array($id_dat));
  $return['status']= $delete->rowCount()==1 ? 'el dato tecnico fue borrado con exito :)': 'ERROR!';
  return $return;

}



}

?>
