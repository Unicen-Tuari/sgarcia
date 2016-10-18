"use strict";
function recargarListaDat(data) {
  $('#listDatTec').html(data);
  
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
        recargarListaDat(receivedData);
      }
    });
    });

 });
