<div class="col-md-offset-2 col-md-8 panel panel-default">
<div class="panel-heading">
  <h3 class="panel-title text-center">Maquinas</h3>
</div>
<div class="panel-body">
<form action="" method="POST" enctype="multipart/form-data" id="add_maq">
   <div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="text" id="nombre"  class="form-control dato" name="nombre" placeholder="Denominacion" >
    </div>

    <div class="form-group">
    <label for="tipo">Tipo</label>
    <select name="tipo" class="form-control" id="tipo">
    <option value="" disabled selected> Elija tipo de maquina</option>
    <option value="Embutidora">Embutidora</option>
    <option value="Moledora Embutidora">Moledora Embutidora</option>
     <option value="Mixer">Mixer</option>
     <option value="Mixer-Dual">Mixer-Dual</option>
    </select>
     </div>

     <div class="form-group">
    <label for="precio">Precio</label>
    <input type="text" id="precio" class="form-control dato" name="precio" placeholder="Valor en pesos">
     </div>
    <div class="form-group">
    <label for="image">Imagenes</label>
    <input type="file" name="image[]" id="image" multiple>
    </div>

     <button type="submit" id="btnGuardar" class="btn btn-default">Cargar</button>
</form>
</div>
<div id="listMaq">
{include file='list_Maq_Admin.tpl'}
</div>
<script src="js/cargaMaquina.js"></script>
