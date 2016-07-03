function cargausados(etiqueta) {
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
$("#Btcarga").on("click", function(){cargausados("../HTML/cargausados.html")});
