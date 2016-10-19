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
     {if !$maquina['datos_tecnicos'] }
     <option value="{$maquina['id_maq']}">{$maquina['id_maq']} -> {$maquina['nombre']}</option>
     {/if}
    {/foreach}
   </select>
</div>
<div class="form-group">
    <label for="denominacion">Denominacion Tecnica</label>
    <input type="text" id="denominacion"  class="form-control dato" name="denominacion" placeholder="Denominacion" >
</div>
<div class="form-group">
    <label for="potencia">Potencia</label>
    <input type="text" id="potencia" class="form-control dato" name="potencia" placeholder="Potencia" >
</div>
<div class="form-group">
    <label for="altura">Altura</label>
    <input type="text" id="altura" class="form-control dato" name="altura" placeholder="Altura (1,7 mts)">
</div>
<div class="form-group">
    <label for="ancho">Ancho</label>
    <input type="text" id="ancho" class="form-control dato" name="ancho" placeholder="Ancho (1,7 mts)" >
</div>
<div class="form-group">
    <label for="peso">Peso</label>
    <input type="text" id="peso" class="form-control dato" name="peso" placeholder="Peso">
</div>
<div class="form-group">
    <label for="capacidad">Capacidad de trabajo</label>
    <input type="text" id="capacidad" class="form-control dato" name="capacidad" placeholder="Capacidad Tn/Hr">
  </div>

   <button type="submit" id="guardarDat" class="btn btn-default">Cargar</button>
</form>
</div>
<div id="listDatTec">
{include file='list_DatTec_Admin.tpl'}
</div>
<script src="js/cargaDatTec.js"></script>
