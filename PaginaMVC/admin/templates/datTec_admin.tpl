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

    <label for="denominacion">Denominacion Tecnica</label>
    <input type="text" id="denominacion"  class="form-control dato" name="denominacion" placeholder="Denominacion" >

    <label for="potencia">Potencia</label>
    <input type="text" id="potencia" class="form-control dato" name="potencia" placeholder="Potencia" >

    <label for="altura">Altura</label>
    <input type="text" id="altura" class="form-control dato" name="altura" placeholder="Altura (1,7 mts)">

    <label for="ancho">Ancho</label>
    <input type="text" id="ancho" class="form-control dato" name="ancho" placeholder="Ancho (1,7 mts)" >

    <label for="peso">Peso</label>
    <input type="text" id="peso" class="form-control dato" name="peso" placeholder="Peso">

    <label for="capacidad">Capacidad de trabajo</label>
    <input type="text" id="capacidad" class="form-control dato" name="capacidad" placeholder="Capacidad Tn/Hr">
  </div>

   <button type="submit" id="guardarDat" class="btn btn-default">Cargar</button>
</form>

<div id="listDatTec">
{include file='list_DatTec_Admin.tpl'}
</div>
<script src="js/cargaDatTec.js"></script>
