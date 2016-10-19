"use strict";
function recargarContenido(receivedData){
  $("#contenido").html(receivedData)
}

$(document).ready(function(){
cargaretiqueta("index.php?action=mostrar_home");


function cargaretiqueta(etiqueta) {
    $.ajax({
            method: "GET",
            url:etiqueta,
            error: function () {
                    alert("no cargo");
                    },
            dataType: "HTML",
            contentType: false,
            cache: false,
            processData:false,
            success: function (receivedData) {
              recargarContenido(receivedData);
              //mostrarLaMaquina();
            },
          }
        );
  }
/*
  $('#login').submit(function(e){
  e.preventDefault();
  var claveIng = $('#clav').value;
  $.ajax({
   method: "POST",
   url: "index.php?action=mostrar_admin",
   data: claveIng,
   contentType: false,
   cache: false,
   processData:false,
   success: function(){
     //cargaretiqueta("index.php?action=mostrar_home")
    $('#login').trigger("reset");
   }
 });

 });
*/

  $("#home").on("click", function(e){
    e.preventDefault();
    cargaretiqueta("index.php?action=mostrar_home")
  }
  );
  $("#empresa").on("click", function(e){
    e.preventDefault();
    cargaretiqueta("index.php?action=mostrar_nosotros")}
  );
  $("#maquinas").on("click", function(e){
    e.preventDefault();
    cargaretiqueta("index.php?action=mostrar_maquinas")});

  $("#contacto").on("click", function(e){
    e.preventDefault();
    cargaretiqueta("index.php?action=formulario_contacto")});

  $("#tablas").on("click", function(e){
    e.preventDefault();
    cargaretiqueta("index.php?action=mostrar_datos_tecnicos")});

});
