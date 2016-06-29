"use strict";
$("#hom").on("click", handleClick("inicio"));
$("#empresa").on("click", handleClick('empresa'));
$("#maquinas").on("click", handleClick('maquinas'));
$("#pag_embutidoras").on("click", handleClick('embutidora'));
$("#pag_mixer").on("click", handleClick('mixers'));
$("#pag_moledoras").on("click", handleClick('moledora'));
$("#form_contacto").on("click", handleClick('contacto'));


function handleClick(etiqueta) {
    $("#contenido").html("<h1>Loading 1</h1>");
    $.ajax("https://paginamys.herokuapp.com/PaginaMyS/HTML/"+etiqueta+".html",
          {
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
