"use strict";
function recargarListaDat(data) {
  $('#listDatTec').html(data);

}

function borrarDatTec() {
$(".deleteAction").on("click",function(e){
  e.preventDefault();
  var id_maq = $(this).attr("id-maq");
   //alert("le da bola al boton "+id_maq);
  $.get("index.php?action=delete_dat",
     { maquina: id_maq },
     function(data){
       recargarListaDat(data);
     });

  });
}

$(document).ready(function(){
 $("#add_dat_tec").submit(function(e){
   e.preventDefault();
   var formData = new FormData(this);
   $.ajax({
    method: "POST",
    url: "index.php?action=agregar_Dat_Tec",
    data: formData,
    contentType: false,
    cache: false,
    processData:false,
    success: function(receivedData){
      console.log(receivedData);
        recargarListaDat(receivedData);
      }
    });
    });
    borrarDatTec();

 });
