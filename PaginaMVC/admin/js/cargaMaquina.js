"use strict";
function recargarListaMaq(data) {
  $('#listMaq').html(data);
  borrarMaquina();
  actualizarMaquina();

}

function recargarListaMaqAct(data) {
  $('#contenido').html(data);
  borrarMaquina();
  actualizarMaquina();
}

function borrarMaquina() {
$(".deleteAction").on("click",function(e){
  e.preventDefault();
  var id_maq = $(this).attr("id-maq");
   //alert("le da bola al boton "+id_maq);
  $.get("index.php?action=delete_maq",
     { maquina: id_maq },
     function(data){
       recargarListaMaq(data);
     });

  });
}

function cargarMaqActualizada(){
  $("#upd_maq").submit(function(e){
    e.preventDefault();
    var formData = new FormData(this);
    $.ajax({
     method: "POST",
     url: "index.php?action=agregar_maquina_modificada",
     data: formData,
     contentType: false,
     cache: false,
     processData:false,
     success: function(receivedData){
         recargarListaMaqAct(receivedData);

              }
     });
     });
}

function actualizarMaquina() {
$(".updateAction").on("click",function(e){
  e.preventDefault();
  var id_maq = $(this).attr("id-maq");
  $.get("index.php?action=editar_maquina",
     { maquina: id_maq },
       function(data){
       $("#contenido").html(data);
       cargarMaqActualizada();
     });

  });
}


$(document).ready(function(){
  $("#add_maq").submit(function(e){
  e.preventDefault();
  var formData = new FormData(this);
  $.ajax({
   method: "POST",
   url: "index.php?action=agregar_maquina",
   data: formData,
   contentType: false,
   cache: false,
   processData:false,
   success: function(receivedData){
       recargarListaMaq(receivedData);

            }
   });
   });

     borrarMaquina();
     actualizarMaquina();

 });
