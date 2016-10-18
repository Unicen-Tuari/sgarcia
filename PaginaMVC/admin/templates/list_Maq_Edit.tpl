<form action="" method="POST" enctype="multipart/form-data" id="upd_maq">
  <div class="form-group">
    <label for="nombre">id</label>
    <input type="text" id="id_maq"  class="form-control dato" name="id_maq" value="{$maquina[0]['id_maq']}" placeholder="Denominacion" >

    <label for="nombre">Nombre</label>
    <input type="text" id="nombre"  class="form-control dato" name="nombre" value="{$maquina[0]['nombre']}" placeholder="Denominacion" >

    <label for="tipo">Tipo</label>
    <select name="tipo" class="form-control" id="tipo">
    <option value="{$maquina[0]['tipo']}"> {$maquina[0]['tipo']} - Valor Actual </option>
    <option value="Embutidora">Embutidora</option>
    <option value="Moledora Embutidora">Moledora Embutidora</option>
     <option value="Mixer">Mixer</option>
     <option value="Mixer-Dual">Mixer-Dual</option>
    </select>

    <label for="precio">Precio</label>
    <input type="text" id="precio" class="form-control dato" name="precio" value="{$maquina[0]['precio']}"placeholder="Valor en pesos">

    <label for="image">Agregar Imagenes</label>
    <input type="file" name="image[]" id="image" multiple>
    </div>

     <button type="submit" id="Guardar_upd_maq" class="btn btn-default">Cargar</button>
</form>
