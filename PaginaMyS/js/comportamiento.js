"use strict";
$(document).ready(function(){
handleClick("inicio");

function handleClick(etiqueta) {
    //$("#contenido").html("<h1>Loading 1</h1>");
    $.ajax({
            url:"https://paginamys.herokuapp.com/PaginaMyS/HTML/"+etiqueta+".html",
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
  $("#pag_embutidoras").on("click", function(){handleClick("embutidora")});
  $("#pag_mixer").on("click", function(){handleClick("mixers")});
  $("#pag_moledoras").on("click", function(){handleClick("moledora")});
  $("#form_contacto").on("click", function(){handleClick("contacto")});
});
