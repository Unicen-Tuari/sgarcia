
<form action="" method="POST" enctype="multipart/form-data" id="upd_dat">
<input type="text" id="id_dat"  class="form-control " name="id_dat" value="{$dato['dat_tec'][0]['id_dat']}" style="display:none">
<input type="text" id="id_maq"  class="form-control " name="id_maq" value="{$dato['dat_tec'][0]['id_maq']}" style="display:none">
<td>
  <input type="text" id="caracteristica"  class="form-control"  name="caracteristica" value="{$dato['dat_tec'][0]['caracteristica']}">
</td>
<td>
  <input type="text" id="valor"  class="form-control" name="valor" value="{$dato['dat_tec'][0]['valor']}">
</td>
<td>
  <button type="submit" id="Guardar_upd_dat" class="btn btn-default" >Cargar</button>
</td>
</form>
