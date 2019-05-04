
$(document).ready(function(){

  datosUser();

  var id = $("#idinicio").val();

  pantallasUsuario(id);

  var idpantalla = $("#idpant").val();

  pantInicio(idpantalla);

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

function pantallasUsuario(codigo){

  var cod = "cod=" +codigo;

  $.ajax({
    url: "ajax/api.php?accion='obtener-info-pantallas'",
    data: cod,
    dataType: "json",
    method: "POST",
    success: function(respuesta){

      for(var i=0; i<respuesta[0].PANTALLAS_CREADAS; i++){
        $("#pantallas-inicio").append(
          '<img style="width:30px; float:left; margin-rigth:5px" src="img/usr-1.png"><a class="dropdown-item" href="#">'+ respuesta[i].NOMBRE_PANTALLA +'</a>'
        );
      }
    },
    error: function(e){
      console.log("Ocurrio un error!!!: " +e);
    }

  });

}

function pantInicio(id){

  var idPantalla = "id=" +id;

  //alert("Id pant: " +idPantalla);

  $.ajax({
    url: "ajax/api.php?accion='pantalla-inicio'",
    data: idPantalla,
    method: "POST",
    dataType: "json",
    success: function(respuesta){

      $("#btnGroupDrop1").append(
        '<img id="'+respuesta.CODIGO_PANTALLA+'" style="width:30px" src="img/usr-1.png"><a class="dropdown-item" href="#"></a>'
      );

    },
    error: function(e){
      console.log("Ocurrio un error en pantalla-inicio");
    }
  });

}