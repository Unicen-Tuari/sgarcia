"use strict";
$("#hom").on("click", handleClick);
function handleClick() {
    $("#contenido").html("<h1>Loading 1</h1>");
    $.ajax("https://paginamys.herokuapp.com/PaginaMyS/HTML",
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
