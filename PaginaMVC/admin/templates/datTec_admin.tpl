<div class="panel panel-default">
  <div class="panel-body">
    <div id="alerta" class="alert  hidden" role="alert"></div>
    <form>
      <div class="form-group">

      <label for="denominacion">Denominacion</label>
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

      <button id="btnGuardar" type="button" class="btn btn-success">Guardar</button>
  </form>
  </div>
</div>

<div id="listDatTec">
  {include file='list_DatTec_Admin.tpl'}
</div>
