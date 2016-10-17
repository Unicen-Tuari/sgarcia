<form action="" method="POST" enctype="multipart/form-data" id="add_dat_tec">
  <div class="form-group">
    <label for="maquina">Maquina</label>
    <select class="form-control">
    {foreach from=$maquinas item=maquina}
     {if !$maquina['datos_tecnicos'] }
     <option value="{$maquina['id_maq']}">{$maquina['id_maq']} -> {$maquina['nombre']}</option>
     {/if}
    {/foreach}
   </select>
 </div>

 <div class="form-group">
  <label for="denominacion">Denominacion Tecnica</label>
  <input type="text" id="denominacion"  class="form-control dato" placeholder="Denominacion" >
  </div>

  <div class="form-group">
    <label for="potencia">Potencia</label>
    <input type="text" id="potencia" class="form-control dato" placeholder="Potencia" >
  </div>

  <div class="form-group">
    <label for="altura">Altura</label>
    <input type="text" id="altura" class="form-control dato" placeholder="Altura (1,7 mts)">
  </div>

  <div class="form-group">
    <label for="ancho">Ancho</label>
    <input type="text" id="ancho" class="form-control dato" placeholder="Ancho (1,7 mts)" >
  </div>

  <div class="form-group">
    <label for="peso">Peso</label>
    <input type="text" id="peso" class="form-control dato" placeholder="Peso">
  </div>

  <div class="form-group">
    <label for="cap">Capacidad de trabajo</label>
    <input type="text" id="cap" class="form-control dato" placeholder="Capacidad Tn/Hr">
  </div>

   <button type="submit" id="guardarDat" class="btn btn-default">Cargar</button>
</form>
</div>
</div>

<div id="listDatTec">
{include file='list_DatTec_Admin.tpl'}
</div>
<script src="js/cargarDatTec.js"></script>
