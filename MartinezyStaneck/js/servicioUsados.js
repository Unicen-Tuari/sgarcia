$("#btncargar").on("click",function(){
  //event.preventDefault();
  var grupo = 166;
  var formulario = new FormData();
  $('#formcarga').find(':input').each(function() {
       var elemento= this;
       if(elemento.type === 'file'){
           if(elemento.value !== ''){
              var file_data = $('input[type="file"]')[0].files;
              for (var i = 0; i < file_data.length; i++) {
                 Formulario.append(elemento.name, file_data[i]);
              }
           }
        }
    };
  var informacion = {
      imagen:"",
      maquina:"",
      marca:"",
      modelo:"",
      email:"",
      tel:""
  };
   var datos =$('.dato');
   informacion.imagen=
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
        $('.tableusado tbody').append(GenerarFila(resultData.information['thing'],resultData.information['_id']));
        BotonEliminarUsado();
      },
      error:function(jqxml, status, errorThrown){
        alert("error carga")
      }
    });
});

//Obtiene del servicio las Caracteristicas de las maquinarias y las carga
function CargarMaqUsadas(){
  var grupo = 166;
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
        BotonEliminarUsado();
       },
      error:function(jqxml, status, errorThrown){
        alert('error');
      }
    });
}

//Genera el HTML Para crear una fila
function GenerarFila(caracteristica,id) {
  var html = "";
  html += '<tr>';
  html += '<th>Maquina</th>';
  html += '<th>'+caracteristica.maquina+'</th>';
  html += '</tr>';
  html += '<tr>';
  html += '<th>Marca</th>';
  html += '<th>'+caracteristica.marca+'</th>';
  html += '</tr>';
  html += '<tr>';
  html += '<th>Modelo</th>';
  html += '<th>'+caracteristica.modelo+'</th>';
  html += '</tr>';
  html += '<tr>';
  html += '<th>e-mail</th>';
  html += '<th>'+caracteristica.email+'</th>';
  html += '</tr>';
  html += '<tr>';
  html += '<th>Telefono contacto</th>';
  html += '<th>'+caracteristica.tel+'</th>';
  html += '</tr>';
  html += '<tr><th><button type="button" id="'+id+'" class="btn btn-danger borrador">Borrar</button></th></tr>';
  html += '</tr>';
  return html;
};
// genera el boton eliminar
function BotonEliminarUsado(){
$('.borrador').on("click",function(){
    borrarPublicacion($(this).attr("id"))
    CargarMaqUsadas();
  });
}
function borrarPublicacion(id) {
  $.ajax({
    url:"https://web-unicen.herokuapp.com/api/delete/"+id,
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
CargarMaqUsadas();
