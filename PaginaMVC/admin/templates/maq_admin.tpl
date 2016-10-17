<form action="" method="POST" enctype="multipart/form-data" id="add_maq">
   <div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="text" id="nombre"  class="form-control dato" name="nombre" placeholder="Denominacion" >

    <label for="tipo">Tipo</label>
    <select name="tipo" class="form-control" id="tipo">
    <option value="" disabled selected> Elija tipo de maquina</option>
    <option value="Embutidora">Embutidora</option>
    <option value="Moledora Embutidora">Moledora Embutidora</option>
     <option value="Mixer">Mixer</option>
     <option value="Mixer-Dual">Mixer-Dual</option>
    </select>

    <label for="precio">Precio</label>
    <input type="text" id="precio" class="form-control dato" name="precio" placeholder="Valor en pesos">

    <label for="image">Imagenes</label>
    <input type="file" name="image[]" id="image" multiple>
    </div>

     <button type="submit" id="btnGuardar" class="btn btn-default">Cargar</button>
</form>

<div id="listMaq">
{include file='list_Maq_Admin.tpl'}
</div>
<script src="js/cargaMaquina.js"></script>
