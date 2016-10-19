<ul class="list-group col-md-offset-2 col-md-8">
  {foreach from=$maquinas item=maquina}
    <li class="list-group-item">
      <strong>Nombre:{$maquina['nombre']}&nbsp;</strong> <br><strong>Tipo:</strong>{$maquina['tipo']}&nbsp;<br><strong>Precio:$</strong>{$maquina['precio']}
         {if $maquina['imagenes'] }
          {foreach from=$maquina['imagenes'] key=index item=imagen}
            <img src="../{$imagen['path']}" alt="{$maquina['nombre']}_image_{$index}" WIDTH=210 HEIGHT=315 class="img-thumbnail" />
          {/foreach}
        {/if}

        <a class="deleteAction" id-maq="{$maquina['id_maq']}" href="#">
           <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
        </a>
        <a class="updateAction" id-maq="{$maquina['id_maq']}" href="#">
         <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
        </a>


      </li>
  {/foreach}
</ul>
