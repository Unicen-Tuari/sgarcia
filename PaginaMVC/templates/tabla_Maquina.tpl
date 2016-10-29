<ul class="list-group col-md-offset-2 col-md-8">
     <li class="list-group-item">

       {if $maquina[0]['imagenes'] }
       {foreach from=$maquina[0]['imagenes'] item=img}
       <img src="{$img['path']}" alt="{$maquina[0]['nombre']}_image_{$index}" WIDTH=140 HEIGHT=210 class="img-thumbnail" />
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
               <td>{$maquina[0]['nombre']}</td>
               </tr>
               <tr>
               <td>Tipo</td>
               <td>{$maquina[0]['tipo']}</td>
               </tr>
               <tr>
               <td>Precio</td>
               <td>{$maquina[0]['precio']}</td>
               </tr>
               {if $maquina[0]['datos_tecnicos'] }
               {foreach from=$maquina[0]['dat_tec'] key=index item=dato}
                 <tr>
                 <td>{$dato['caracteristica']}</td>
                 <td>{$dato['valor']}</td>
                 </tr>
               {/foreach}
              {/if}
             </tbody>
             <button type="submit" id="volver" class="btn btn-default">Volver</button>
           </table>
         </div>
     </li>

</ul>
