"use strict";
$(document).ready(function(){
handleClick("inicio");

function handleClick(etiqueta) {
    //$("#contenido").html("<h1>Loading 1</h1>");
    $.ajax({
            url:"HTML/"+etiqueta+".html",
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
  $("#empresa").on("click", function(){handleClick("empresa")});
  $("#maquinas").on("click", function(){handleClick("maquinas")});
  $("#embutidoras").on("click", function(){handleClick("embutidora")});
  $("#mixer").on("click", function(){handleClick("mixers")});
  $("#moledoras").on("click", function(){handleClick("moledora")});
  $("#contacto").on("click", function(){handleClick("contacto")});
});
