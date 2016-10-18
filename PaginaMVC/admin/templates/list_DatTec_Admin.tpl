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
             <tbody>
               <tr>
               <td>Denominacion</td>
               <td>{$dato['denominacion']}</td>
               </tr>
               <tr>
               <td>Potencia</td>
               <td>{$dato['potencia']}</td>
               </tr>
               <tr>
               <td>Altura</td>
               <td>{$dato['altura']}</td>
               </tr>
               <tr>
               <td>Ancho</td>
               <td>{$dato['ancho']}</td>
               </tr>
               <tr>
               <td>Peso</td>
               <td>{$dato['peso']}</td>
               </tr>
               <tr>
               <td>Capacidad</td>
               <td>{$dato['capacidad']}</td>
               </tr>
             </tbody>
           </table>
         </div>
     </li>
  {/foreach}
</ul>
