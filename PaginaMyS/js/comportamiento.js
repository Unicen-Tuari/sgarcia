"use strict";
$(document).ready(function(){
cargaretiqueta("HTML/inicio.html");

function cargaretiqueta(etiqueta) {
    event.preventDefault();
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
  $("#home").on("click", function(){cargaretiqueta("HTML/inicio.html")});
  $("#empresa").on("click", function(){cargaretiqueta("HTML/empresa.html")});
  $("#maquinas").on("click", function(){cargaretiqueta("HTML/maquinas.html")});
  $("#embutidoras").on("click", function(){cargaretiqueta("HTML/embutidora.html")});
  $("#mixer").on("click", function(){cargaretiqueta("HTML/mixers.html")});
  $("#moledoras").on("click", function(){cargaretiqueta("HTML/moledora.html")});
  $("#contacto").on("click", function(){cargaretiqueta("HTML/contacto.html")});
  $("#tablas").on("click", function(){cargaretiqueta("HTML/tecnica.html")});
});
