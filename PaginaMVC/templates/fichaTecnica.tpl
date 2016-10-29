<ul class="list-group col-md-offset-2 col-md-8">
  {foreach from=$maquinas item=maquina}
     <li class="list-group-item">
         {if $maquina['imagenes'] }
         {foreach from=$maquina['imagenes'] item=img}
         <img src="{$img['path']}" alt="{$maquina['nombre']}_image_{$index}" WIDTH=140 HEIGHT=210 class="img-thumbnail" />
         {/foreach}
         {/if}
           <table class="table table-striped">
             <thead>
               <tr>
                 <th>Ficha Tecnica</th>
               </tr>
             </thead>
             <tbody>
                <tr>
                <td>Nombre</td>
                <td>{$maquina['nombre']}</td>
                </tr>
                {foreach from=$maquina['datos'] item=dato}
                  <tr>
                  <td>{$dato['caracteristica']}</td>
                  <td>{$dato['valor']}</td>
                  </tr>
                {/foreach}
             </tbody>
           </table>
     </li>
  {/foreach}
</ul>
