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
  $("#enviar").on("click", function(){cargaretiqueta("../HTML/contacto.html")});
});
