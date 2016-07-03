$(document).ready(function(){
function cargadorusados(etiqueta) {
   //event.preventDefault();
    $.ajax({
            method: "GET",
            url:etiqueta,
            error: function () {
                    alert("no cargo");
                    },
            dataType: "HTML",
            success: function (receivedData) {
              $("#cargador").html(receivedData);
            },
          }
        );
  }
});

$("#Btcarga").on("click", function(){alert("entro");
  cargadorusados("HTML/cargausados.html")});

$(function(){
    $("#formuploadajax").on("submit", function(e){
        e.preventDefault();
        var f = $(this);
        var formData = new FormData(document.getElementById("formuploadajax"));
        formData.append("dato", "valor");
        //formData.append(f.attr("name"), $(this)[0].files[0]);
        $.ajax({
            url: "recibe.php",
            type: "post",
            dataType: "html",
            data: formData,
            cache: false,
            contentType: false,
   processData: false
        })
            .done(function(res){
                $("#mensaje").html("Respuesta: " + res);
            });
    });
});


$("#btnGuardar").on("click",function(){
//  event.preventDefault();
  var grupo = 116;
  var informacionGral = {
      Tipo:"",
      Datos: infousados
  };
  var infousados = {
      imagen:"",
      maquina:"",
      marca:"",
      modelo:"",
      email:"",
      tel:""
  };

   informacionGral.infousados.imagen=datos[0].value;
   informacionGral.infousados.imagen=datos[1].value;
   informacionGral.infousados.imagen=datos[2].value;
   informacionGral.infousados.imagen=datos[3].value;
   informacionGral.infousados.imagen=datos[4].value;
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
        $('.table tbody').append(GenerarFila(resultData.information['thing'],resultData.information['_id']));
        BotonEliminar();
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
  html += '<tr>';
  html += '<td>'+caracteristica.Caract+'</td>';
  html += '<td>'+caracteristica.Caract_499+'</td>';
  html += '<td>'+caracteristica.Caract_699+'</td>';
  html += '<td>'+caracteristica.Caract_big+'</td>'
  html += '<td>'+caracteristica.Caract_twin+'</td>';
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
