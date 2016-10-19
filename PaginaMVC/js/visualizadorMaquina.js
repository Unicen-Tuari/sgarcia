"use strict";
function volver() {
  $("#volver").on("click",function(e){
      e.preventDefault();
      $.get("index.php?action=mostrar_maquinas",
            function(data){
              $("#contenido").html(data);
            });

      });
}

$(document).ready(function(){

$(".mostrarMaquina").on("click",function(e){
    e.preventDefault();
    var id_maq = $(this).attr("id-maq");
    $.get("index.php?action=mostrar_maquina",
       { maquina: id_maq },
         function(data){
         $("#contenido").html(data);
          volver();
       });

    });


 });
