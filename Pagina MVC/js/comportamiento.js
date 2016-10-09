"use strict";
$(document).ready(function(){
cargaretiqueta("templates/inicio.tpl");

function cargaretiqueta(etiqueta) {
   //event.preventDefault();
    $.ajax({
            method: "GET",
            url:etiqueta,
            error: function () {
                    alert("no cargo");
                    },
            dataType: "HTML",
            success: function (receivedData) {
              $("#contenido").html(receivedData);
            },
          }
        );
  }
  $("#home").on("click", function(){cargaretiqueta("templates/inicio.tpl")});
  $("#empresa").on("click", function(){cargaretiqueta("templates/empresa.tpl")});
  $("#maquinas").on("click", function(){cargaretiqueta("templates/maquinas.tpl")});
  $("#embutidoras").on("click", function(){cargaretiqueta("templates/embutidora.tpl")});
  $("#mixer").on("click", function(){cargaretiqueta("templates/mixers.tpl")});
  $("#moledoras").on("click", function(){cargaretiqueta("templates/moledora.tpl")});
  $("#contacto").on("click", function(){cargaretiqueta("templates/contacto.tpl")});
  $("#tablas").on("click", function(){cargaretiqueta("templates/tecnica.tpl")});

});
