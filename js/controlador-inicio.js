
$(document).ready(function(){

  datosUser();

});

function tblAccount(data){

  $.ajax({
    url: "ajax/landing.php?accion='table-account'",
    data: data,
    method: "POST",
    success: function(respuesta){
      $("#main-container").html(respuesta);
    },
    error: function(){
      console.log("Ocurrio un error!!!");
    }
  });
}

function datosUser(){

  var usuario = "correo=" +$("#corrusuario").val();

  $.ajax({
    url: "ajax/api.php?accion='datos-cuenta'",
    data: usuario,
    dataType: "json",
    method: "POST",
    success: function(respuesta){

      var datos = "corr=" +respuesta.CORREO+ "&con=" +respuesta.CONTRASENIA+
                  "&tel=" +respuesta.TELEFONO+ "&tarj=" +respuesta.NUMERO_DE_TARJETA+
                  "&plan=" +respuesta.NOMBRE_TIPO_PLAN;

      tblAccount(datos);

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