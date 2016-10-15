<ul class="list-group">
  {foreach from=$maquinas item=maquina}
     <li class="list-group-item">
         {if $maquina['imagenes'] }
         <img src="{$maquina['imagenes'][0]['path']}" alt="{$maquina['nombre']}_image_{$index}" WIDTH=140 HEIGHT=210 class="img-thumbnail" />
           <table class="table table-striped">
             <thead>
               <tr>
                 <th>Ficha Tecnica</th>
               </tr>
             </thead>
             <tbody>
               <tr>
               <td>Denominacion</td>
               <td>{$maquina['denominacion']}</td>
               </tr>
               <tr>
               <td>Potencia</td>
               <td>{$maquina['potencia']}</td>
               </tr>
               <tr>
               <td>Altura</td>
               <td>{$maquina['altura']}</td>
               </tr>
               <tr>
               <td>Ancho</td>
               <td>{$maquina['ancho']}</td>
               </tr>
               <tr>
               <td>Peso</td>
               <td>{$maquina['peso']}</td>
               </tr>
               <tr>
               <td>Capacidad</td>
               <td>{$maquina['capacidad']}</td>
               </tr>
             </tbody>
           </table>
         </div>
         {/if}
     </li>
  {/foreach}
</ul>
