"use strict";
$(document).ready(function(){
function cargadorusados(etiqueta) {
   //event.preventDefault();
    $.ajax({
            method: "GET",
            url:etiqueta,
            error: function () {
                    alert("no cargo");
                    },
            dataType: "HTML",
            success: function (receivedData) {
              $("#cargador").html(receivedData);
            },
          }
        );
  }
$("#Btcarga").on("click", function(){cargadorusados("HTML/cargausados.html")});
});
