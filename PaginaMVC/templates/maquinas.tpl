<ul class="list-group col-md-offset-2 col-md-8">
  {foreach from=$maquinas item=maquina}
    <li class="list-group-item">
      <strong>Nombre: </strong> {$maquina['nombre']}
         {if $maquina['imagenes'] }
          {foreach from=$maquina['imagenes'] key=index item=imagen}
            <a class="mostrarMaquina" id-maq="{$maquina['id_maq']}" href="#"><img src="{$imagen['path']}" alt="{$maquina['nombre']}_image_{$index}" WIDTH=300 HEIGHT=450 class="img-thumbnail" /></a>
          {/foreach}
        {/if}

      </li>
  {/foreach}
</ul>
<script src="js/visualizadorMaquina.js"></script>
