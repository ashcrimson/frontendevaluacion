$(document).ready(function(){
    $("#siguiente").click(function(){
        $("#cuestionario").load("cuestionario-dos.php");
    });
    $("#anterior-dos").click(function(){
        $("#cuestionario").load("cuestionario.php");
    });
    $("#siguiente-dos").click(function(){
        $("#cuestionario").load("cuestionario-tres.php");
    });
    $("#anterior-tres").click(function(){
        $("#cuestionario").load("cuestionario-dos.php");
    });
    $("#siguiente-tres").click(function(){
        $("#cuestionario").load("cuestionario-cuatro.php");
    });
    $("#anterior-cuatro").click(function(){
        $("#cuestionario").load("cuestionario-tres.php");
    });
    $("#siguiente-cuatro").click(function(){
        $("#cuestionario").load("metasyobjetivos.php");
    });
     $("#ver-diagrama").click(function(){
        $("#imagen-evaluacion").slideToggle("slow");
    });
     $("#volver-cuestionario").click(function(){
       console.log("correcto"); $("#cuestionario").load("cuestionario.php");
    });
     $(".miembroequipo").hover(function(){
        $(this).css("background-color", "#e0e0e0");
        }, function(){
        $(this).css("background-color", "initial");
    });
      $("#next").click(function(){
        $("#cuestionario-clima").load("cuestionario-clima-dos.php");
    });
      $("#prev-dos").click(function(){
        $("#cuestionario-clima").load("cuestionario-clima.php");
    });
      $("#next-dos").click(function(){
        $("#cuestionario-clima").load("cuestionario-clima-tres.php");
    });
    $("#prev-tres").click(function(){
        $("#cuestionario-clima").load("cuestionario-clima-dos.php");
    });
     $("#next-tres").click(function(){
        $("#cuestionario-clima").load("cuestionario-clima-cuatro.php");
    });
     $("#prev-cuatro").click(function(){
        $("#cuestionario-clima").load("cuestionario-clima-tres.php");
    });
     $("#next-cuatro").click(function(){
        $("#cuestionario-clima").load("cuestionario-clima-cinco.php");
    });
     $("#prev-cinco").click(function(){
        $("#cuestionario-clima").load("cuestionario-clima-cuatro.php");
    });
     $("#next-cinco").click(function(){
        $("#cuestionario-clima").load("cuestionario-clima-seis.php");
    });
     $("#prev-seis").click(function(){
        $("#cuestionario-clima").load("cuestionario-clima-cinco.php");
    });
     $("#next-seis").click(function(){
        $("#cuestionario-clima").load("cuestionario-clima-siete.php");
    });
     $("#prev-siete").click(function(){
        $("#cuestionario-clima").load("cuestionario-clima-seis.php");
    });
     $("#next-siete").click(function(){
        $("#cuestionario-clima").load("cuestionario-clima-ocho.php");
    });
     $("#prev-ocho").click(function(){
        $("#cuestionario-clima").load("cuestionario-clima-siete.php");
    });
     $("#next-ocho").click(function(){
        $("#cuestionario-clima").load("cuestionario-clima-nueve.php");
    });
     $("#prev-nueve").click(function(){
        $("#cuestionario-clima").load("cuestionario-clima-ocho.php");
    });
     $("#next-nueve").click(function(){
        $("#cuestionario-clima").load("cuestionario-clima-diez.php");
    });
     $("#prev-diez").click(function(){
        $("#cuestionario-clima").load("cuestionario-clima-nueve.php");
    });
     $("#next-diez").click(function(){
        $("#cuestionario-clima").load("felicitaciones.php");
    });
     $("#next-desempeno").click(function(){
        console.log("click");
        $("#cuestionario-desempeno").load("cuestionario-desempeno-dos.php");
    });
      $("#prev-desempeno-dos").click(function(){
        $("#cuestionario-desempeno").load("cuestionario-desempeno.php");
    });
      $("#next-desempeno-dos").click(function(){
        $("#cuestionario-desempeno").load("cuestionario-desempeno-tres.php");
    });
        $("#prev-desempeno-tres").click(function(){
        $("#cuestionario-desempeno").load("cuestionario-desempeno-dos.php");
    });
      $("#next-desempeno-tres").click(function(){
        $("#cuestionario-desempeno").load("cuestionario-desempeno-cuatro.php");
    });
        $("#prev-desempeno-cuatro").click(function(){
        $("#cuestionario-desempeno").load("cuestionario-desempeno-tres.php");
    });
      $("#next-desempeno-cuatro").click(function(){
        $("#cuestionario-desempeno").load("cuestionario-desempeno-cinco.php");
    });
      $("#prev-desempeno-cinco").click(function(){
        $("#cuestionario-desempeno").load("cuestionario-desempeno-cuatro.php");
    });
      $("#next-desempeno-cinco").click(function(){
        $("#cuestionario-desempeno").load("felicitaciones.php");
    });

console.log("PICO");
});