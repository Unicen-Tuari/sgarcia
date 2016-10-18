"use strict";

$(document).ready(function(){
cargarAdmin("index.php?action=mostrar_maquinas_admin");

function cargarAdmin(etiqueta) {
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

  

  $("#maq_admin").on("click", function(e){
    e.preventDefault();
    cargarAdmin("index.php?action=mostrar_maquinas_admin")
  });

  $("#tablas_admin").on("click", function(e){
      e.preventDefault();

      cargarAdmin("index.php?action=mostrar_dattec_admin")
    });


});
