"use strict";
$(document).ready(function(){
cargaretiqueta("index.php?action=mostrar_home");

function cargaretiqueta(etiqueta) {
  // event.preventDefault();
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
             $("#contenido").html(receivedData);
            },
          }
        );
  }

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



  $("#home").on("click", function(e){
    e.preventDefault();
    cargaretiqueta("index.php?action=mostrar_home")
  }
  );
  $("#empresa").on("click", function(e){
    e.preventDefault();
    cargaretiqueta("index.php?action=mostrar_nosotros")}
  );
  //$("#maquinas").on("click", function(){cargaretiqueta("templates/maquinas.tpl")});
  //$("#embutidoras").on("click", function(){cargaretiqueta("templates/embutidora.tpl")});
  //$("#mixer").on("click", function(){cargaretiqueta("templates/mixers.tpl")});
  //$("#moledoras").on("click", function(){cargaretiqueta("templates/moledora.tpl")});
  $("#contacto").on("click", function(e){
    e.preventDefault();
    cargaretiqueta("index.php?action=formulario_contacto")});
  //$("#tablas").on("click", function(){cargaretiqueta("templates/tecnica.tpl")});

});
