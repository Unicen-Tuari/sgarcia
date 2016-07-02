$("#btnGuardar").on("click",function(){
//  event.preventDefault();
  var grupo = 16;
  var informacion = {
      Caract:"",
      Caract_499:"",
      Caract_699:"",
      Caract_big:"",
      Caract_twin:""
  };
   var datos =$('.dato');
   for (var i = 0; i < datos.length; i++) {
     if (datos[i].value == "") {
       alert('Debe llenar todos los campos');
       return;
     }
   }
   informacion.Caract=datos[0].value;
   informacion.Caract_499=datos[1].value;
   informacion.Caract_699=datos[2].value;
   informacion.Caract_big=datos[3].value;
   informacion.Caract_twin=datos[4].value;
   var info = {
     "group": grupo,
     "thing": informacion
   };
  $.ajax({
      url:"https://web-unicen.herokuapp.com/api/create",
      method:"POST",
      dataType: 'JSON',
      contentType: "application/json; charset=utf-8",
      data: JSON.stringify(info),
      success: function(resultData){
        $('.table tbody').append(GenerarFila(resultData.information['thing']));
        $('#alerta').html('Caracteristica agregada con exito!');
        $('#alerta').removeClass('hidden');
        $('#alerta').addClass('alert-success');
      },
      error:function(jqxml, status, errorThrown){
        $('#alerta').html('Error Intente mas tarde!');
        $('#alerta').removeClass('hidden');
        $('#alerta').addClass('alert-danger');
      }
    });
});

//Obtiene del servicio las Caracteristicas de las maquinarias y las carga
function CargarCaracteristicasMaquinas(){
  var grupo = 16;
  $.ajax({
      url:"https://web-unicen.herokuapp.com/api/group/"+grupo,
      method:"GET",
      dataType: 'JSON',
      contentType: "application/json; charset=utf-8",
      success: function(resultData){
        var tabla = $('.table tbody');
        for (var i = 0; i < resultData.information.length; i++) {
              tabla.append(GenerarFila(resultData.information[i]));
        }
      },
      error:function(jqxml, status, errorThrown){
        alert('error');
      }
    });

}

//Genera el HTML Para crear una fila
function GenerarFila(caracteristica) {
  var html = "";
  html += '<tr>';
  html += '<td>'+caracteristica['thing'].Caract+'</td>';
  html += '<td>'+caracteristica['thing'].Caract_499+'</td>';
  html += '<td>'+caracteristica['thing'].Caract_699+'</td>';
  html += '<td>'+caracteristica['thing'].Caract_big+'</td>'
  html += '<td>'+caracteristica['thing'].Caract_twin+'</td>';
  // aca creo el boton de eliminar , este boton tiene como id el id del objeto que despues quiero borrar
  html += '<td><button type="button" id="'+caracteristica['_id'].+'" class="btn btn-danger">Borrar</button></td>';
  html += '</tr>';
  return html;
};

//Cuando se carga el JS, se carga la tabla
CargarCaracteristicasMaquinas();
