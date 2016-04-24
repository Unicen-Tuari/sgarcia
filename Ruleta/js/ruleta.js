"use strict";
var saldo=100;
var numeroApuesta=-1;
var cantPerdidas=0;
var NumeroSalio=0;
var i=0;
//#dcdcdc
function mostrarSaldo(){
document.getElementById("saldoDisp").value = saldo;
}
function acreditarSaldo(){
//document.getElementById(id_saldo)+=valor a sumar
//de esta manera actualizamos el valir de la pantalla
saldo+=10;
cantPerdidas=0;
mostrarSaldo();
}
function descontarSaldo(){
//esta funcion deberia descontar saldo del apostador
//debe utilizar:
//document.getElementById(id_saldo)-=valor a descontar
//de esta manera actualizamos el valir de la pantalla
cantPerdidas+=1;
if (cantPerdidas ==3){
    saldo-=2;
    cantPerdidas=0;
    mostrarSaldo();
    return;
  }
saldo-=1;
mostrarSaldo();
}
function getRadioButtonSelectedValue(ctrl)
{
    for(i=0;i<ctrl.length;i++)
        if(ctrl[i].checked) return ctrl[i].value;
}

function NoSetRadioButton(ctrl)
{
      for(i=0;i<ctrl.length;i++)
        if(ctrl[i].checked) {
          return false}
        return true;
}
function generarJugada(){
  //esta funcion me genera un valor de 0 a 9 (10 posibles valores)
return Math.floor(Math.random() * 9);
}
function Apostar(){
  // llama al generador de numeroApuesta
  NumeroSalio=generarJugada();
  //consulta por el valor ingresado y el valor salido
  if (NumeroSalio==getRadioButtonSelectedValue(document.botonesApuesta.valorApuesta))
  // muestra el resultado
    {alert("ganador");
    acreditarSaldo();}
  else{

    alert("perdedor");
    descontarSaldo();
  }
  // llamar a la funccion que acredita o quita saldo
}
function tirarRuleta(){
  if (NoSetRadioButton(document.botonesApuesta.valorApuesta)) {
    alert("Por favor seleccione su apuesta");
  return;
  }
  if (saldo<=0) {
    alert("No puede seguir jugando te quedaste si guita papaaaaaa!!!!");
    return;
  }
  Apostar();
}
