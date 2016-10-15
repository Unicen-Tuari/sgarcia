<ul class="list-group">
  {foreach from=$maquinas item=maquina}
    <li class="list-group-item">
      <strong>Nombre:{$maquina['nombre']}&nbsp;</strong> <br><strong>Tipo:</strong>{$maquina['tipo']}&nbsp;<br><strong>Precio:$</strong>{$maquina['precio']}
         {if $maquina['imagenes'] }
          {foreach from=$maquina['imagenes'] key=index item=imagen}
            <img src="{$imagen['path']}" alt="{$maquina['nombre']}_image_{$index}" class="img-thumbnail" />
          {/foreach}
        {/if}

      </li>
  {/foreach}
</ul>
