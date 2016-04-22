"use strict";
var saldo=100;
var numeroApuesta=-1;
var cantPerdidas=0;
var i=0;
function descontarSaldo(){
//esta funcion deberia descontar saldo del apostador
//debe utilizar:
//document.getElementById(id_saldo)-=valor a descontar
//de esta manera actualizamos el valir de la pantalla
if (cantPerdidas>=3){
    saldo-=2;
    cantPerdidas+=1;}
   {
     saldo-=1;
     cantPerdidas+=1;
   }
}
function getRadioButtonSelectedValue(ctrl)
{
    for(i=0;i<ctrl.length;i++)
        if(ctrl[i].checked) return ctrl[i].value;
}

function NoSetRadioButton(ctrl)
{
      for(i=0;i<ctrl.length;i++)
        if(ctrl[i].checked) return false;
        else {
          return true;
        }
}


function acreditarSaldo(){
//esta funcion deberia descontar saldo del apostador
//debe utilizar:
//document.getElementById(id_saldo)+=valor a sumar
//de esta manera actualizamos el valir de la pantalla

cantPerdidas=0;
}
function generarJugada(){
  //esta funcion me genera un valor de 0 a 9 (10 posibles valores)
return Math.floor(Math.random() * 9);
}
function Apostar(){
  // llama al generador de numeroApuesta
  //consulta por el valor ingresado y el valor salido
  // muestra el resultado -- estaria bueno agregar una imagen con el numero salido
  // llamar a la funccion que acredita o quita saldo
}
function tirarRuleta(){
  if (NoSetRadioButton(document.botonesApuesta.valorApuesta))
  alert("seleccione un valor");
}
