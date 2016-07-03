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
        //$('.table tbody').append(GenerarFila(resultData.information['thing'],resultData.information['_id']));
        CargarCaracteristicasMaquinas();
        //BotonEliminar();
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
        //var tabla = $('.table tbody');
      //  tabla.html("");
      //  for (var i = 0; i < resultData.information.length; i++) {
      //        tabla.append(GenerarFila(resultData.information[i]['thing'],resultData.information[i]['_id']));
        GenerarFila(resultData.information[i]['thing'],resultData.information[i]['_id'])
      //  }
        BotonEliminar();
       },
      error:function(jqxml, status, errorThrown){
        alert('error');
      }
    });
}

//Genera el HTML Para crear una fila
function GenerarFila(caracteristicas,id) {
  var html = "";
  for (var i = 0; i < caracteristicas.length; i++){
  html += '<tr>';
  html += '<td>'+caracteristicas[i].Caract+'</td>';
  html += '<td>'+caracteristicas[i].Caract_499+'</td>';
  html += '<td>'+caracteristicas[i].Caract_699+'</td>';
  html += '<td>'+caracteristicas[i].Caract_big+'</td>'
  html += '<td>'+caracteristicas[i].Caract_twin+'</td>';
  html += '<td><button type="button" id="'+id+'" class="btn btn-danger borrador">Borrar</button></td>'
  html += '</tr>';
  }
  $('.table tbody').html(html);
};
// genera el boton eliminar
function BotonEliminar(){
$('.borrador').on("click",function(){
    borrarCaract($(this).attr("id"))
    CargarCaracteristicasMaquinas();
  });
}
function borrarCaract(id) {
  $.ajax({
    url:"http://web-unicen.herokuapp.com/api/delete/"+id,
    method:"DELETE",
    success: function(resultData){
      console.log(resultData);
      },
    error:function(jqxml, status, errorThrown){
      alert('No se puede eliminar la linea'+id);
      console.log(errorThrown);
    }
  });
}

//Cuando se carga el JS, se carga la tabla
CargarCaracteristicasMaquinas();
