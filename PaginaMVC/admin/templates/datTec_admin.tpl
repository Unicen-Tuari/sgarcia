<div class="col-md-offset-2 col-md-8 panel panel-default">
<div class="panel-heading">
  <h3 class="panel-title text-center">Datos Tecnicos de Maquina</h3>
</div>
<div class="panel-body">
  <form action="" method="POST" enctype="multipart/form-data" id="add_dat_tec">
    <div class="form-group">
      <label for="id_maq">Maquina</label>
      <select name="id_maq" class="form-control" id="id_maq">
      <option value="" disabled selected> Elija tipo de maquina</option>
      {foreach from=$maquinas item=maquina}
         <option value="{$maquina['id_maq']}">{$maquina['id_maq']} -> {$maquina['nombre']}</option>
      {/foreach}
     </select>
</div>
<div class="form-group">
  <label for="caracteristica">Caracteristica</label>
  <input type="text" id="caracteristica"  class="form-control dato" name="caracteristica" placeholder="Caracteristica" >
</div>
<div class="form-group">
  <label for="valor">Valor</label>
  <input type="text" id="valor" class="form-control dato" name="valor" placeholder="Valor" >
</div>

   <button type="submit" id="guardarDat" class="btn btn-default">Cargar</button>
</form>
</div>
<div id="listDatTec">
{include file='list_DatTec_Admin.tpl'}
</div>
<script src="js/cargaDatTec.js"></script>
