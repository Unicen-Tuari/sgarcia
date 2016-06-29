"use strict";
$( document ).ready(function() {
  cargarInicio();
});

//function cargarContenido(html, btn){
//  $("#contenido").html(html);
//  }

//$("#btnCargar").on("click", clicketiqueta);
function cargarInicio() {
    $.ajax({
            url:"../html/inicio.html",
            error: function () {
              alert("no cargo");
            },
            dataType: "HTML",
            success: function (receivedData) {
              $("#contenido").html(receivedData);
            },
            method: "GET"
          }
        );
  }
