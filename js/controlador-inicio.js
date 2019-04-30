
$(document).ready(function(){
  tblAccount();
  datosUser();
});

function tblAccount(){
  $.ajax({
    url: "ajax/landing.php?accion='table-account'",
    success: function(respuesta){
      $("#main-container").html(respuesta);
    },
    error: function(){
      console.log("Ocurrio un error!!!");
    }
  });
}

function datosUser(){

  var usuario = "correo=" +$("#usuario").val();

  $.ajax({
    url: "ajax/api.php?accion='datos-cuenta'",
    data: usuario,
    method: "POST",
    success: function(respuesta){
      alert("Los datos son: " + "correo: " +respuesta.CORREO+ " contrasenia: " +respuesta.CONTRASENIA+ " telefono: " +respuesta.TELEFONO+ " tarjeta: " +respuesta.NUMERO_DE_TARJETA+ " plan: " +respuesta.NOMBRE_TIPO_PLAN);
    },
    error: function(){
      alert("Ocurrio un error!!!");
    }
  });

}

$('#controlR').click(function() {
    event.preventDefault();
    $('#content').animate({
      marginLeft: "-=400px"
    }, "fast");
 });

$('#controlL').click(function() {
    event.preventDefault();
    $('#content').animate({
      marginLeft: "+=400px"
    }, "fast");
});