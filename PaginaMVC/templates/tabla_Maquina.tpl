<ul class="list-group col-md-offset-2 col-md-8">
     <li class="list-group-item">
         {if $maquina[0]['imagenes'] }
         <img src="{$maquina[0]['imagenes'][0]['path']}" alt="{$maquina[0]['nombre']}_image_{$index}" WIDTH=140 HEIGHT=210 class="img-thumbnail" />
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
               <tr>
               <td>Denominacion</td>
               <td>{$dato[0]['denominacion']}</td>
               </tr>
               <tr>
               <td>Potencia</td>
               <td>{$dato[0]['potencia']}</td>
               </tr>
               <tr>
               <td>Altura</td>
               <td>{$dato[0]['altura']}</td>
               </tr>
               <tr>
               <td>Ancho</td>
               <td>{$dato[0]['ancho']}</td>
               </tr>
               <tr>
               <td>Peso</td>
               <td>{$dato[0]['peso']}</td>
               </tr>
               <tr>
               <td>Capacidad</td>
               <td>{$dato[0]['capacidad']}</td>
               </tr>
              {/if}
             </tbody>
             <button type="submit" id="volver" class="btn btn-default">Volver</button>
           </table>
         </div>
         {/if}
     </li>

</ul>
