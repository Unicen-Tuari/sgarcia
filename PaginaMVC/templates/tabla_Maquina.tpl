<ul class="list-group">
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
               <td>Nombre</td>
               <td>{$maquina['nombre']}</td>
               </tr>
               <tr>
               <td>Tipo</td>
               <td>{$maquina['tipo']}</td>
               </tr>
               <tr>
               <td>Precio</td>
               <td>{$maquina['precio']}</td>
               </tr>
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
             <button type="submit" id="volver" class="btn btn-default">Volver</button>
           </table>
         </div>
         {/if}
     </li>

</ul>
