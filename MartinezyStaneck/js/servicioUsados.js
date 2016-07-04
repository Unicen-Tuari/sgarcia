$("#btncargar").on("click",function(){
  //event.preventDefault();
  var grupo = 166;
  //var formData = new FormData(document.getElementById("formuploadajax"));
  var informacion = {
      imagen:"", //formData,
      maquina:"",
      marca:"",
      modelo:"",
      email:"",
      tel:""
  };
   var datos =$('.dato');
   informacion.imagen="nada";
   informacion.maquina=datos[0].value;
   informacion.marca=datos[1].value;
   informacion.modelo=datos[2].value;
   informacion.email=datos[3].value;
   informacion.tel=datos[4].value;
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
        alert("cargado")
      },
      error:function(jqxml, status, errorThrown){
        alert("error carga")
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
        var tabla = $('.tableusado tbody');
        tabla.html("");
        for (var i = 0; i < resultData.information.length; i++) {
              tabla.append(GenerarFila(resultData.information[i]['thing'],resultData.information[i]['_id']));
        }
        BotonEliminar();
       },
      error:function(jqxml, status, errorThrown){
        alert('error');
      }
    });
}

//Genera el HTML Para crear una fila
function GenerarFila(caracteristica,id) {
  var html = "";
  html += '<tr><td>'+caracteristica.Caract+'</td></tr>';
  html += '<tr><td>'+caracteristica.Caract_499+'</td></tr>';
  html += '<tr><td>'+caracteristica.Caract_699+'</td></tr>';
  html += '<tr><td>'+caracteristica.Caract_big+'</td></tr>'
  html += '<tr><td>'+caracteristica.Caract_twin+'</td></tr>';
  html += '<td><button type="button" id="'+id+'" class="btn btn-danger borrador">Borrar</button></td>'
  html += '</tr>';
  return html;
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
    url:"https://web-unicen.herokuapp.com/api/delete/"+id,
    method:"DELETE",
    success: function(resultData){
      console.log(resultData);
      $('#alerta').html('Caracteristica eliminada con exito!');
      $('#alerta').removeClass('hidden');
      $('#alerta').addClass('alert-danger');
      },
    error:function(jqxml, status, errorThrown){
      alert('No se puede eliminar la linea'+id);
      console.log(errorThrown);
    }
  });
}

//Cuando se carga el JS, se carga la tabla
//CargarCaracteristicasMaquinas();
