"use strict";
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
        $('#listDatTec').html(receivedData);
      }
    });
    });

 });
