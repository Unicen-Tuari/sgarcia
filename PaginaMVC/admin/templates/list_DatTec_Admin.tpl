<ul class="list-group">
  {foreach from=$datos item=dato}
     <li class="list-group-item">
         {if $dato['imagenes'] }
         <img src="../{$dato['imagenes'][0]['path']}" alt="{$maquina['nombre']}_image_{$index}" WIDTH=140 HEIGHT=210 class="img-thumbnail" />
         {/if}
           <table class="table table-striped">
             <thead>
               <tr>
                 <th>Ficha Tecnica</th>
               </tr>
             </thead>
             <tbody >
               {foreach from=$dato['dat_tec'] item=dat}
                 <tr >
                   <div id="{$dat['id_dat']}">
                    <td>{$dat['caracteristica']}</td>
                    <td>{$dat['valor']}</td>
                    <td>
                      <a class="deleteAction" id-dat="{$dat['id_dat']}" href="#">
                      <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                      </a>
                    </td>
                    <td>
                      <a class="updateAction" id-dat="{$dat['id_dat']}" href="#">
                      <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                      </a>
                    </td>
                  </div>
                 </tr>

         </tbody>
             {/foreach}
           </table>
     </li>

  {/foreach}
</ul>
