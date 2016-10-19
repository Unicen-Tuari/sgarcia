<div class="col-md-offset-2 col-md-8 panel panel-default">
<div class="panel-heading">
  <h3 class="panel-title text-center">Editor Datos Tecnicos de Maquina</h3>
</div>
<div class="panel-body">
<form action="" method="POST" enctype="multipart/form-data" id="upd_dat">
  <div class="form-group">
    <label for="id_maq">id</label>
    <input type="text" id="id_maq"  class="form-control dato" name="id_maq" value="{$dato[0]['id_maq']}" >
</div>
<div class="form-group">
    <label for="denominacion">Denominacion</label>
    <input type="text" id="denominacion"  class="form-control dato" name="denominacion" value="{$dato[0]['denominacion']}">
</div>
<div class="form-group">
    <label for="potencia">Potencia</label>
    <input type="text" id="potencia" class="form-control dato" name="potencia" value="{$dato[0]['potencia']}">
</div>
<div class="form-group">
    <label for="altura">Altura</label>
    <input type="text" id="altura" class="form-control dato" name="altura" value="{$dato[0]['altura']}">
</div>
<div class="form-group">
    <label for="ancho">Ancho</label>
    <input type="text" id="ancho" class="form-control dato" name="ancho" value="{$dato[0]['ancho']}">
</div>
<div class="form-group">
    <label for="peso">Peso</label>
    <input type="text" id="peso" class="form-control dato" name="peso" value="{$dato[0]['peso']}">
</div>
<div class="form-group">
    <label for="capacidad">Capacidad</label>
    <input type="text" id="capacidad" class="form-control dato" name="capacidad" value="{$dato[0]['capacidad']}">

    </div>

     <button type="submit" id="Guardar_upd_dat" class="btn btn-default">Cargar</button>
</form>
</div>
