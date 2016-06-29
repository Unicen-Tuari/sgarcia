"use strict";
$(document).ready(function(){
cargaretiqueta("HTML/inicio.html");

function cargaretiqueta(etiqueta) {
    //$("#contenido").html("<h1>Loading 1</h1>");
    //event.preventDefault();
    $.ajax({
            url:etiqueta,
            error: function () {
                    alert("no cargo");
                    },
            dataType: "HTML",
            success: function (receivedData) {
              $("#contenido").html(receivedData);
              //console.log("Lenght: "+ $(".js-comportamiento").length);
              //$(".js-comportamiento").html("Borrar");
            },
            method: "GET"
          }
        );
  }
  $("#hom").on("click", function(){cargaretiqueta("HTML/inicio.html")});
  $("#empresa").on("click", function(){cargaretiqueta("HTML/empresa.html")});
  $("#maquinas").on("click", function(){cargaretiqueta("HTML/maquinas.html")});
  $("#embutidoras").on("click", function(){cargaretiqueta("HTML/embutidora.html")});
  $("#mixer").on("click", function(){cargaretiqueta("HTML/mixers.html")});
  $("#moledoras").on("click", function(){cargaretiqueta("HTML/moledora.html")});
  $("#contacto").on("click", function(){cargaretiqueta("HTML/contacto.html")});
  $("#tablas").on("click", function(){cargaretiqueta("HTML/tecnica.html")});
  $("#btnGuardarInfo").on('click',CargarRenglon);

  /*function CargarRenglon() {
  event.preventDefault();
  var grupo = 16;
  var informacion = {
      Caract="";
      Caract_499="";
      Caract_699="";
      Caract_big="";
      Caract_twin="";
  }
  var info = {
     "group": grupo,
     "thing": informacion
   };
   var lista =$('.entradas');
   for (var i = 0; i < lista.length; i++) {
     if (lista[i].value == "") {
       alert('debe llenar todos los campos');
       return;
     }
   }
   informacion.Caract="";
   informacion.Caract_499="";
   informacion.Caract_699="";
   informacion.Caract_big="";
   informacion.Caract_twin="";
  $.ajax({
      url:"http://web-unicen.herokuapp.com/api/create",
      method:"POST",
      dataType: 'JSON',
      contentType: "application/json; charset=utf-8",
      data: JSON.stringify(info),
      success: function(resultData){
        $('#aviso').html('Se guardo con exito ID:'+resultData.information._id);
        $('#aviso').addClass('alert-success');
        mostrarrenglon(informacion);
      },
      error:function(jqxml, status, errorThrown){
        $('#aviso').html('Error intente mas tarde');
        $('#aviso').addClass('alert-danger');
      }
    });
};
function mostrarrenglon(info) {
  var renglon= GenerarRenglon(info)
  $("#tabla_caract").html(renglon);
};

function GenerarRenglones(info) {
    var html = "";
    html += '<tr>';
    html += '<td class="warning">'+info[i].codigo+'</td>';
    html += '<td class="warning">'+info[i].descripcion+'</td>';
    html += '<td class="warning">$'+info[i].precio+'</td>'
    html += '<td class="warning">'+info[i].descripcion+'</td>';
    html += '<td class="warning">$'+info[i].precio+'</td>'
    html += '<td class="active"><button type="button" class="btn btn-danger">Borrar</button></td>'
    html += '</tr>';
    return html;
};
*/
});
