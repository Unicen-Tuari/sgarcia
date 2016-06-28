////---------------------------------------------------------------------------------------
////---------------------------------------------------------------------------------------
////---------------     INICIALIZACION DE OJBETOS Y EVENTOS                 ---------------
////---------------------------------------------------------------------------------------
////---------------------------------------------------------------------------------------
$(document).ready(function(){
  "use strict";
  const ganancia=10;
  const costoAp=1;
  const proporcionapdoble=1;
  const cantBolas = 11;
  const prob_cero = 0.3;
  ////---------------------------------------------------------------------------------------
  ////---------------------------------------------------------------------------------------
  ////-------------------------------    Clase apueta    -----------------------------------
  ////---------------------------------------------------------------------------------------
  ////---------------------------------------------------------------------------------------
  function apuesta() {
    var numeros=[0,0,0,0,0,0,0,0,0,0,0];
    var colorrojo=0;
    var colornegro=0;
    var mayor=0;
    var menor=0;
    var par=0;
    var impar=0;
    return{
      tableroapuestas: function(pos,cant){
        var cadena='<span class= "badge">'+cant+"</span>"+pos;
        document.getElementById(pos).innerHTML = cadena;
      },
      reiniciarapuesta: function(){
        colorrojo=0;
        colornegro=0;
        mayor=0;
        menor=0;
        par=0;
        impar=0;
        for (var i = 0; i < numeros.length; i++) {
          numeros[i]=0;
          var renglones=$('.badge');
          for (var i = 0; i < renglones.length; i++) {
            $(renglones[i]).html("");
          }
        }
      },
      apuestanumero:function(valor,increm) {
        numeros[valor]+=increm;
        this.tableroapuestas(valor,numeros[valor]);
      },
      apuestacolor:function(valor){
        if (valor=='NEGRO'){
          colornegro++;
          this.tableroapuestas('NEGRO',colornegro);
        }
        else{
          colorrojo++;
          this.tableroapuestas('ROJO',colorrojo);
        }
      },
      apuestamayor:function(){
        mayor++;
        this.tableroapuestas('MAYOR',mayor);
      },
      apuestamenor:function(){
        menor++;
        this.tableroapuestas('MENOR',menor);
      },
      apuestapar:function(){
        par++;
        this.tableroapuestas('PAR',par);
      },
      apuestaimpar:function(){
        impar++;
        this.tableroapuestas('IMPAR',impar);
      },
      getapuestamayor: function(){
        return mayor;
      },
      getapuestamenor: function(){
        return menor;
      },
      getapuestarojo: function(){
        return colorrojo;
      },
      getapuestanegro: function(){
        return colornegro;
      },
      getapuestaplenos: function(bola){
        return numeros[bola];
      },
      getapuestapar: function(){
        return par;
      },
      getapuestaimpar: function(){
        return impar;
      }
    }
  }
  ////---------------------------------------------------------------------------------------
  ////---------------------------------------------------------------------------------------
  ////-----------------------------     Clase Ruleta   --------------------------------------
  ////---------------------------------------------------------------------------------------
  ////---------------------------------------------------------------------------------------

  var ruleta = function(){
    return{
      tirarBola:function(){
        var tirada = Math.random();
        if (tirada <= prob_cero){
          return 0;
        }
        else {
          return Math.floor(Math.random()*(cantBolas-1))+1;
        }
      },
      getColorBola:function(valor){
        if (valor!=0) {
          if (valor < cantBolas/2){
            if (valor % 2 == 0 ) {
              return "NEGRO";
            }
            else {
              return "ROJO";
            }
          }
          else {
            if (valor % 2 == 0 ) {
              return "ROJO";
            }
            else {
              return "NEGRO";
            }
          }
        }
        else {
          return "VERDE"
        }
      }

    }
  };


  ////---------------------------------------------------------------------------------------
  ////---------------------------------------------------------------------------------------
  ////-------------------------------    Clase jugador    -----------------------------------
  ////---------------------------------------------------------------------------------------
  ////---------------------------------------------------------------------------------------

  function jugador(){
    var apuestas=new apuesta();
    var credito=100;
    return{
      contadorsaldo: function(){

      },
      nuevajugada: function() {
        apuestas.reiniciarapuesta();
      },
      getsaldo: function(){
        return credito;
      },
      tengosaldo: function(valor){
        if ((this.getsaldo()-costoAp) < 0){
          alert("saldo insuficiente para la apuesta");
          return false;
        }
        return true;
      },
      apostar: function(valor){
        if (this.tengosaldo()){
          switch (valor) {
            case "0":
            case "1":
            case "2":
            case "3":
            case "4":
            case "5":
            case "6":
            case "7":
            case "8":
            case "9":
            case "10":
            case "11":this.apostarnumero(valor);
            break;
            case "NEGRO":
            case "ROJO":this.apostarcolor(valor);
            break;
            case "PAR":
            case "IMPAR":this.apostarparimpar(valor);
            break;
            case "MAYOR":
            case "MENOR":this.apostarmayormenor(valor);
            break;
            case 'APUESTADOBLE':this.apostardoble();
            break;
            default:

          }

        }
      },
      apostarnumero:function(valor){
        if($('.otrasapuestas').attr("disabled")){
          apuestas.apuestanumero(valor,proporcionapdoble);
          if (valor=="10") {
            apuestas.apuestanumero('0',proporcionapdoble)
            this.descontarSaldo();
          }
          else {
            apuestas.apuestanumero(++valor,proporcionapdoble)
            this.descontarSaldo();
          }}
          else {
            apuestas.apuestanumero(valor,1);
            this.descontarSaldo();
          }
          $('.otrasapuestas').attr("disabled", false);
        },
        apostarcolor:function(valor){
          apuestas.apuestacolor(valor);
          this.descontarSaldo();
        },
        apostardoble:function(){
          var val;
          $('.otrasapuestas').attr("disabled", true);
        },
        apostarmayormenor:function(valor){
          if (valor=='MAYOR'){
            apuestas.apuestamayor();
          }
          else {
            apuestas.apuestamenor();
          }
          this.descontarSaldo();
        },
        apostarparimpar:function(valor){
          if (valor=='PAR'){
            apuestas.apuestapar();
          }
          else{
            apuestas.apuestaimpar();
          }
          this.descontarSaldo();
        },
        calcularaciertos: function(bola,color){
          var pegadas;
          pegadas=apuestas.getapuestaplenos(bola);
          if (bola!= 0){
            if  (color='black'){
              pegadas+=apuestas.getapuestanegro();
            }
            else {
              pegadas+=apuestas.getapuestarojo();
            }
            if (bola <= Math.floor(cantBolas/2)){
              pegadas+=apuestas.getapuestamenor();
            }
            else {
              pegadas=apuestas.getapuestamayor();
            }
            if ((bola%2) == 0)
            pegadas+=apuestas.getapuestapar();
            else {
              pegadas+=apuestas.getapuestaimpar();
            }
          }
          return pegadas;
        },
        descontarSaldo: function(){
          credito-=costoAp;
          document.getElementById("credit").innerHTML = this.getsaldo();
          // aca va la parte que me actualiza el saldo en el html
        },
        AumentarCredito: function(aciertos){
          credito+=aciertos*ganancia;
          document.getElementById("credit").innerHTML = this.getsaldo();
          // aca va la parte que me actualiza el saldo en el html
        },
      }
    };
    ////---------------------------------------------------------------------------------------
    ////---------------------------------------------------------------------------------------
    ////-------------------------------    Clase juego    -----------------------------------
    ////---------------------------------------------------------------------------------------
    ////---------------------------------------------------------------------------------------
    function Juego() {
      var bola;
      var colorsalido;
      var aciertos
      return{
        actualizarsaldo: function(jugador,aciertos){
          jugador.AumentarCredito(aciertos);
        },
        reanudarpartida: function(jug){
          jug.reanudar();
        },
        jugar:function(jugador,ruleta) {
          bola=ruleta.tirarBola();
          colorsalido=ruleta.getColorBola(bola);
          aciertos=jugador.calcularaciertos(bola,colorsalido);
          if (aciertos>0){
            alert("NO VA MAS!!!! "+colorsalido+ " el "+bola+" BIEN!!!! USTED TUVO "+aciertos+" ACIERTOS --- WINNER!!! ---")
          }
          else {
            alert("NO VA MAS!!!! "+colorsalido+ " el "+bola+" MALLLLL!!!! USTED TUVO "+aciertos+" ACIERTOS --- LOOSEER!!!")
          }
          this.actualizarsaldo(jugador,aciertos);
          jugador.nuevajugada();
        }
      }
    };


    ////---------------------------------------------------------------------------------------
    ////---------------------------------------------------------------------------------------
    ////---------------------------------------------------------------------------------------
    ////---------------------------------------------------------------------------------------
    var apostador = new jugador();
    var RuletaJuego= new ruleta();
    var game= new Juego();
    document.getElementById("credit").innerHTML = apostador.getsaldo();
    $(".apuesta").on("click",function(){apostador.apostar(this.value)});
    $("#jugar").on("click",function(){game.jugar(apostador,RuletaJuego)});
  });
