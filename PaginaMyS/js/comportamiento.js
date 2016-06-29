"use strict";
$(document).ready(function(){
handleClick("HTML/inicio.html");

function handleClick(etiqueta) {
    //$("#contenido").html("<h1>Loading 1</h1>");
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
  $("#empresa").on("click", function(){handleClick("../HTML/empresa.html")});
  $("#maquinas").on("click", function(){handleClick("../HTML/maquinas.html")});
  $("#embutidoras").on("click", function(){handleClick("../HTML/embutidora.html")});
  $("#mixer").on("click", function(){handleClick("../HTML/mixers.html")});
  $("#moledoras").on("click", function(){handleClick("../HTML/moledora.html")});
  $("#contacto").on("click", function(){handleClick("../HTML/contacto.html")});
});
