"use strict";
$(document).ready(function(){
  $("#add_maq").submit(function(e){
  e.preventDefault();
  var formData = new FormData(this);
  $.ajax({
   method: "POST",
   url: "index.php?action=agregar_maquina",
   data: formData,
   contentType: false,
   cache: false,
   processData:false,
   success: function(receivedData){
       $('#listMaq').html(receivedData);
     }
   });
   });


 });
