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

   $(".deleteAction").on("click",function(e){
     e.preventDefault();
     var id_maq = $(this).attr("id-maq");
      //alert("le da bola al boton "+id_maq);
     $.get("index.php?action=delete_maq",
        { maquina: id_maq },
        function(data){
          $('#listMaq').html(data);
        });

     });


 });
