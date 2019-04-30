
$(document).ready(function(){

  $.ajax({
   url: "ajax/landing.php?accion='door-landing'",
   success: function(respuesta){
     $("#door-icon").html(respuesta);
   },
   error: function(){
     console.log("Ocurrio un error!!!");
   }
 });

 $.ajax({
  url: "ajax/landing.php?accion='footer-landing'",
  success: function(respuesta){
    $("#foot-landing").html(respuesta);
  },
  error: function(){
    console.log("Ocurrio un error!!!");
  }
});

  var p1 = $("#manage-pant1").val();

  var p3 = $("#users-pant1").val();
  var p4 = $("#users-pant2").val();

  htmlPantallas(p3, p4);

  htmlPantallas2(p1);

  imgEditUser();

  tablaHistorial();

});

function phpTabla(){
  $.ajax({
    url: "ajax/landing.php?accion='tabla-landing'",
    success: function(respuesta){
      $("#tag-icon").html(respuesta);
    },
    error: function(){
      console.log("Ocurrio un error!!!");
    }
  });
}

function phpTv(){
  $.ajax({
    url: "ajax/landing.php?accion='tv-landing'",
    success: function(respuesta){
      $("#tv-icon").html(respuesta);
    },
    error: function(){
      console.log("Ocurrio un error!!!");
    }
  });
}

function htmlPantallas(crea, pos){

  var datos = "crea=" +crea+ "&pos=" +pos;

  $.ajax({
    url: "ajax/landing.php?accion='pantallas'",
    data: datos,
    method: "POST",
    success: function(respuesta){
      $("#div-pantallas").html(respuesta);
    },
    error: function(){
      console.log("Ha ocurrido un error!!!");
    }
  });
}

function htmlPantallas2(crea){

  var datos = "crea=" +crea;

  $.ajax({
    url: "ajax/landing.php?accion='pantallas-2'",
    data: datos,
    method: "POST",
    success: function(respuesta){
      $("#div-pantallas-2").html(respuesta);
    },
    error: function(){
      console.log("Ha ocurrido un error!!!");
    }
  });
}

/*function imgEditUser(){
  $.ajax({
    url: "ajax/landing.php?accion='imgEdit'",
    success: function(respuesta){
      $("#img-edit").append(respuesta);
    },
    error: function(){
      console.log("Ha ocurrido un error!!!");
    }
  });
}*/

function tablaHistorial(){
  $.ajax({
    url: "ajax/landing.php?accion='tablaHist'",
    success: function(respuesta){
      $("#contenedor-hist").append(respuesta);
    }
  });
}

function cerrarSesion(){
  $.ajax({
    url: "ajax/api.php?accion='cerrar-sesion'",
    success: function(respuesta){
      if(respuesta = 1)
        window.location = "sesion.html";
      else 
        window.location.reload();
    }
  });
}

function contenidoIcono(idContenido){
    
  if(idContenido == "door-icon")
  {
      $("#" + idContenido).addClass("d-flex");
      $("#" + idContenido).removeClass("d-none");
      $("#tv-icon").addClass("d-none");
      $("#tag-icon").addClass("d-none");
      $("#tv-icon").removeClass("d-block");
      $("#tag-icon").removeClass("d-block");
  }
  else
  {
      if(idContenido == "tv-icon")
      {
        phpTv();
        $("#" + idContenido).addClass("d-block");
        $("#door-icon").addClass("d-none");
        $("#tag-icon").addClass("d-none");
        $("#door-icon").removeClass("d-flex");
        $("#tag-icon").removeClass("d-block");
      }
      else
      {
        phpTabla();
        $("#" + idContenido).addClass("d-block");
        $("#door-icon").addClass("d-none");
        $("#tv-icon").addClass("d-none");
        $("#door-icon").removeClass("d-flex");
        $("#tv-icon").removeClass("d-block");
      }
  }
}

function crearSesion(correo, contra){

  var datos = "correo=" + correo + "&contra=" + contra;

  $.ajax({
    url: "ajax/api.php?accion='crearLogin'",
    data: datos,
    method: "POST",
    success: function(respuesta){

      var codigo = respuesta;

      if(codigo == 1)
        //console.log("Se creo la sesion!!!");
        window.location = "users.php";
      else
        alert("NO se creo la sesion!!!");
    },
    error: function(e){
      console.log(e);
    }
  });
}

function validarSesion(){
  $("#correo-incorrecto2").addClass("d-block");
  $("#input-contra-contra-incorrecta2").addClass("d-block");
  $("#correo-correcto").removeClass("d-block");
  $("#input-contra-contra-correcta").removeClass("d-block");
  $("#correo-correcto").addClass("d-none");
  $("#input-contra-contra-correcta").addClass("d-none");
  $("#input-correo").addClass("invalido");
  $("#input-correo").removeClass("valido");
}

function sesionPantallas(creadas, posibles, usuario){

  var datos = "creadas=" +creadas+ "&posibles=" +posibles+ "&usuario=" +usuario;

  $.ajax({
    url:"ajax/api.php?accion='sesion-pantallas'",
    data: datos,
    method: "POST",
    success: function(respuesta){
      //alert(respuesta);
      console.log(respuesta);
    }
  });
}

function pantallasUsuario(usuario){ //Obtengo los dos valores!!!!

  var dato = "user=" +usuario;

  $.ajax({
    url:"ajax/api.php?accion='pantallas-usuario'",
    data: dato,
    dataType: "json",
    method: "POST",
    success: function(respuesta){
      //alert("Hola3");
      //alert("Cod Usuario= " +respuesta.CODIGO_USUARIO + " Correo= " +respuesta.CORREO + " Pantallas Creadas= " +respuesta.NUMERO_DE_PANTALLAS + " Pantallas Disponibles: "+respuesta.NUMERO_PANTALLAS_POSIBLES);

      var idUser = respuesta.CODIGO_USUARIO;
      var pantCreadas = respuesta.NUMERO_DE_PANTALLAS;
      var pantPosibles = respuesta.NUMERO_PANTALLAS_POSIBLES;

      //nombrePantallas(idUser);

      sesionPantallas(pantCreadas, pantPosibles, idUser);

    },
    error: function(){
      alert("Ocurrio un error!!!");
      console.log("Error "+ respuesta);
    }
  });
}

function nombrePantallas(id){

  var dato = "idUser=" +id;

  $.ajax({
    url: "ajax/api.php?accion='nombre-pantallas'",
    data: dato,
    method: "POST",
    success: function(respuesta){
      console.log("La consulta del nombre es: " +respuesta);

      var datos = "";

      for(var i=0; i<respuesta.length; i++){
        datos = "&nombrePantalla" + i + "=" + respuesta[i].NOMBRE_PANTALLA+
                "&codPantalla=" +respuesta[i].CODIGO_PANTALLA;
      }
      console.log("Nombres Pantallas:" + datos);
    },
    error: function(){
      alert("Ocurrio un Error!!!");
    }
  });

}

function verificarCorreo(correoNuevo, correoActual){

  var c1 = "nuevoCorreo=" +correoNuevo;

  var c2 = "correoActual=" +correoActual;

  $.ajax({
    url: "ajax/api.php?accion='verificarCorreo'",
    data: c1,
    method: "POST",
    success: function(respuesta){
      if(respuesta == 1){
        $("#correo-update").addClass("invalido");
        $("#upd-correo-incorrecto").removeClass("d-none");
        $("#upd-correo-incorrecto").addClass("d-block");
        $("#correo-correcto").removeClass("d-block");
        $("#correo-correcto").addClass("d-none");

      }
      else{
        updtCorreo(c1, c2);
        //alert("0"); //Aqui iria el procedimiento para actualizar el correo!!!
      }

    },
    error: function(){
      alert("Ocurrio un error!!!");
    }
  });

}

function updtCorreo(nuevo, viejo){

  //var datos = "nuevo=" +nuevo+ "&viejo=" +viejo;

  var datos = nuevo + "&" + viejo;

  $.ajax({
    url: "ajax/api.php?accion='actualizar-correo'",
    data: datos,
    method: "POST",
    success: function(respuesta){
      if(respuesta ==1)
      cerrarSesion();
      else
        window.location.reload();
    },
    error: function(){
      alert("Ocurrio un error!!!!");
    }
  });

}

$("#btn-iniciar-sesion").click(function(){
  window.location.href="sesion.html";
});

function validarContrasena(etiqueta){

  if (etiqueta.value.length < 8)
  {
    etiqueta.classList.remove("valido");
    etiqueta.classList.add("invalido");
    $("#contra-correcta").addClass("d-none");
    $("#contra-incorrecta").removeClass("d-none");
  }
  else
  {
    etiqueta.classList.remove("invalido");
    etiqueta.classList.add("valido");
    $("#contra-correcta").removeClass("d-none");
    $("#contra-incorrecta").addClass("d-none");
  }
}

function validarEmail(id){

  var patron = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  
  if (patron.test($("#" + id).val()))
  {
    $("#" + id).addClass("valido");
    $("#" + id).removeClass("invalido");
    $("#correo-correcto").addClass("d-block");
    $("#correo-incorrecto").removeClass("d-block");
    $("#correo-incorrecto2").removeClass("d-block");
    $("#correo-incorrecto2").addClass("d-none");
    return true;
  }
  else
  {
    $("#" + id).addClass("invalido");
    $("#" + id).removeClass("valido");
    $("#correo-incorrecto").addClass("d-block");
    $("#correo-correcto").removeClass("d-block");
    return false;
  }
}

$("#btn-iniciar-sesion-2").click(function(){

  var v1 = validarCampoVacio2("input-correo");
  var v2 = validarCampoVacio2("input-contra");

  if(v1){
    $("#correo-incorrecto").removeClass("d-block");
    $("#correo-correcto").addClass("d-block");
  }
  else{
    $("#correo-incorrecto").addClass("d-block");
    $("#correo-correcto").removeClass("d-block");
  }
  if(v2){
    $("#input-contra-contra-incorrecta").removeClass("d-block");
    $("#input-contra-contra-correcta").addClass("d-block");
  }
  else{
    $("#input-contra-contra-incorrecta").addClass("d-block");
    $("#input-contra-contra-correcta").removeClass("d-block");
  }

  if(v1 && v2){
    //alert(1); //Valido
    var parametros = "correo=" + $("#input-correo").val() + "&contra=" + $("#input-contra").val();

    var correo = $("#input-correo").val();
    var contrasenia = $("#input-contra").val();

    $.ajax({
      url: "ajax/api.php?accion='verificar-usuario'",
      data: parametros,
      method: "POST",
      success: function(respuesta){

        var v1 = respuesta;
       
        if(v1 == 1){
          pantallasUsuario(correo);
          crearSesion(correo, contrasenia);
        }
        else{
          validarSesion();
        }
      },
      error: function(){
        console.log("Ocurrio un error!!!");
      }
    });
    
  }
  else{
    //alert(2); //Invalido
    console.log("Los campos no pueden estar vacios!!!");
  }

});

function validarCampoVacio2(id){
  if(document.getElementById(id).value == ""){
      return false;
  }else{
      return true;
  }
}

$("#btn-manage-profiles").click(function(){
window.location.href="manage.php";
});

$("#btn-done").click(function(){
window.location.href="users.php";
});

$("#btn-prueba-gratuita").click(function(){ 
  window.location = "selec-plan.html";
});

$("#save-upd-corr").click(function(){
  
  var v1 = validarCampoVacio2("correo-update");
  var v2 = validarCampoVacio2("password-update");

  if(v1){
    $("#correo-incorrecto").removeClass("d-block");
    $("#correo-correcto").addClass("d-block");
    validarEmail("correo-update");
  }
  else{
    $("#correo-incorrecto").addClass("d-block");
    $("#correo-correcto").removeClass("d-block");
    $("#correo-update").addClass("invalido");
    $("#correo-update").removeClass("valido");
  }
  if(v2){
    $("#contra-upd-corr2").removeClass("d-block");
    $("#contra-upd-corr1").addClass("d-block");
    $("#password-update").removeClass("invalido");
  }
  else{
    $("#contra-upd-corr2").addClass("d-block");
    $("#contra-upd-corr1").removeClass("d-block");
    $("#password-update").addClass("invalido");
    $("#password-update").removeClass("valido");
  }

  if(v1 && v2){

    var datos = "correo="+$("#correo-actual").val() + "&contra=" +$("#password-update").val();

    var correoact = $("#correo-actual").val();

    var correonue = $("#correo-update").val();

    $.ajax({
      url: "ajax/api.php?accion='verificar-usuario'",
      data: datos,
      method: "POST",
      success: function(respuesta){

        var v1 = respuesta;
       
        if(v1 == 1){ //si existe
          //alert(respuesta);
         verificarCorreo(correonue, correoact);
        }
        else{ //no existe
          $("#contra-upd-corr2").addClass("d-block");
          $("#contra-upd-corr1").removeClass("d-block");
          $("#password-update").addClass("invalido");
          $("#password-update").removeClass("valido");
        }
      },
      error: function(){
        console.log("Ocurrio un error!!!");
      }
    });

  }

});

$("#cancel-upd-corr").click(function(){
  window.location ="account.html";
});

$("#save-upd-contra").click(function(){
  var v1 = validarCampoVacio2("contra-update1");
  var v2 = validarCampoVacio2("contra-update2");
  var v3 = validarCampoVacio2("contra-update3");

  if(v1){
    $("#contra-update1-contra-correcta").addClass("d-block");
    $("#val-contra-act").removeClass("d-block");
  }
  else{
    $("#contra-update1-contra-correcta").removeClass("d-block");
    $("#val-contra-act").addClass("d-block");
    $("#contra-update1").addClass("invalido");
  }
  if(v2){
    $("#contra-update2-contra-correcta2").addClass("d-block");
    $("#contra-update2-contra-incorrecta2").removeClass("d-block");
  }
  else{
    $("#contra-update2-contra-correcta2").removeClass("d-block");
    $("#contra-update2-contra-incorrecta2").addClass("d-block");
    $("#contra-update2").addClass("invalido");
  }
  if(v3){
    $("#contra-update3-contra-correcta3").addClass("d-block");
    $("#contra-update3-contra-incorrecta3").removeClass("d-block");
  }
  else{
    $("#contra-update3-contra-correcta3").removeClass("d-block");
    $("#contra-update3-contra-incorrecta3").addClass("d-block");
    $("#contra-update3").addClass("invalido");
  }

  var datos2 = "correo=" +$("#correo-actual2").val()+ "&contra=" +$("#contra-update1").val();

  var c1 = $("#contra-update2").val();
  var c2 = $("#contra-update3").val();
  var c3 = $("#contra-update1").val();

  $.ajax({
    url: "ajax/api.php?accion='verificar-usuario'",
    data: datos2,
    method: "POST",
    success: function(respuesta){

      var v1 = respuesta;
     
      if(v1 == 1){ //si existe
        //alert(respuesta);
        if(c1 == c2){
          //alert("Son iguales"); //Aqui iria el procedimiento para actualizar la contraseña!!!
          updtContrasenia(c3, c2);
        }
        else{
          $("#contra-update1").removeClass("invalido");
          $("#contra-update1").addClass("valido");
          $("#val-contras1").addClass("d-block");
          $("#val-contras2").addClass("d-block");
          $("#contra-update2-contra-correcta2").removeClass("d-block");  
          $("#contra-update3-contra-correcta3").removeClass("d-block");
          $("#contra-update2").addClass("invalido");
          $("#contra-update3").addClass("invalido");
          $("#contra-update2-contra-correcta2").removeClass("d-block");  
          $("#contra-update3-contra-correcta3").removeClass("d-block");
        }
      }
      else{ //no existe
        $("#val-contra-act").addClass("d-block");
        $("#contra-update1-contra-correcta").removeClass("d-block");
        $("#contra-update1").addClass("invalido");
      }
    },
    error: function(){
      console.log("Ocurrio un error!!!");
    }
  });

});

function updtContrasenia(vieja, nueva){

  var contras = "vieja=" +vieja+ "&nueva=" +nueva;

  $.ajax({
    url: "ajax/api.php?accion='actulizar-contra'",
    data: contras,
    method: "POST",
    success: function(respuesta){
      if(respuesta == 1)
        cerrarSesion();
      else
        window.location.reload();
    },
    error: function(){
      alert("Ocurrio un error!!!");
    }
  });

}


$("#save-upd-pone").click(function(){
  var v1 = validarCampoVacio2("new-phone");
  var v2 = validarCampoVacio2("contra-phone");

  if(v1){
    $("#val-phone1").addClass("d-block");
    $("#val-phone2").removeClass("d-block");
    $("#new-phone").removeClass("invalido");
    $("#new-phone").addClass("valido");
  }
  else{
    $("#val-phone1").removeClass("d-block");
    $("#val-phone2").addClass("d-block");
    $("#new-phone").addClass("invalido");
  }
  if(v2){
    $("#val-contra-phone1").addClass("d-block");
    $("#val-contra-phone3").removeClass("d-block");
  }
  else{
    $("#val-contra-phone1").removeClass("d-block");
    $("#val-contra-phone3").addClass("d-block");
    $("#contra-phone").addClass("invalido");
  }

  var datos = "correo=" +$("#correo-actual3").val()+ "&contra=" +$("#contra-phone").val();

  var datos2 = "usuario="+$("#correo-actual3").val()+"&telefono=" +$("#new-phone").val();

  $.ajax({
    url: "ajax/api.php?accion='verificar-usuario'",
    data: datos,
    method: "POST",
    success: function(respuesta){

      var v1 = respuesta;
     
      if(v1 == 1){ //si existe
        //alert("Hello"); Aqui iria el procedimiento para actualizar el telefono!!!!
        updtTelefono(datos2);
      }
      else{ //no existe
        //alert("No existe el usuario!!!");
        $("#val-contra-phone3").addClass("d-block");
        $("#val-contra-phone1").removeClass("d-block");
      }
    },
    error: function(){
      console.log("Ocurrio un error!!!");
    }
  });

});

function updtTelefono(datos){

  $.ajax({
    url: "ajax/api.php?accion='actualizar-telefono'",
    data: datos,
    method: "POST",
    success: function(respuesta){
      if(respuesta == 1)
        window.location = "account.html";
      else
        window.location.reload();

    },
    error: function(){
      alert("Ocurrio un error!!!");
    }
  });

}

$("#insert-pantalla").click(function(){

  var datos = "codusuario=" +$("#idUsuario").val() +
              "&nombre=" +$("#nombre-pantalla").val() +
              "&idioma=" +$("#slc-idiomas").val() +
              "&madurez=" +$("#slc-madurez").val() +
              "&estiloSub=" +$("#estiloSub").val() +
              "&confiRepro=" +$("#repro").val();

  console.log("Datos pantalla: " +datos);

  $.ajax({
    url: "ajax/api.php?accion='insertar-pantalla'",
    data: datos,
    method: "POST",
    success: function(respuesta){
      console.log("Resultado insert pantallas: " +respuesta);

      pantallasUsuario($("#idUsuario").val());
      
      window.location.reload();

    },
    error: function(){
      alert("Ocurrio un error insertando la pantalla");
    }
  });

});

$("#actualizar-pantalla").click(function(){

  var datos = "nombre=" +$("#nombre-pantalla").val() +
              "&idioma=" +$("#slc-idiomas").val() +
              "&madurez=" +$("#slc-madurez").val() +
              "&usuario=" +$("#idUsuario").val() +
              "&estiloSub=" +$("#estiloSub").val() +
              "&confiRepro=" +$("#repro").val();

  alert("Datos pantalla=" +datos);

  $.ajax({
    url: "ajax/api.php?accion='actualizar-pantalla'",
    data: datos,
    method: "POST",
    success: function(respuesta){
      alert("Consulta pantallas: " +respuesta);

    },
    error: function(){
      alert("Ocurrio un error insertando la pantalla");
    }
  });

});

$("#save-upd-info-pago").click(function(){
  var v1 = validarCampoVacio2("input-nombre");
  var v2 = validarCampoVacio2("input-apellido");
  var v3 = validarCampoVacio2("input-numero-tarjeta");
  var v4 = validarCampoVacio2("input-fecha-vencimiento");
  var v5 = validarCampoVacio2("input-codigo-CVV");

  if(v1){
    $("#val-nomb1").addClass("d-block");
    $("#val-nomb2").removeClass("d-block");
    $("#input-nombre").addClass("valido");
    $("#input-nombre").removeClass("invalido");
  }
  else{
    $("#val-nomb1").removeClass("d-block");
    $("#val-nomb2").addClass("d-block");
    $("#input-nombre").removeClass("valido");
    $("#input-nombre").addClass("invalido");
  }
  if(v2){
    $("#val-ap1").addClass("d-block");
    $("#val-ap2").removeClass("d-block");
    $("#input-apellido").addClass("valido");
    $("#input-apellido").removeClass("invalido");
  }
  else{
    $("#val-ap1").removeClass("d-block");
    $("#val-ap2").addClass("d-block");
    $("#input-apellido").removeClass("valido");
    $("#input-apellido").addClass("invalido");
  }
  if(v3){
    $("#val-tarj1").addClass("d-block");
    $("#val-tarj2").removeClass("d-block");
    $("#input-numero-tarjeta").addClass("valido");
    $("#input-numero-tarjeta").removeClass("invalido");
  }
  else{
    $("#val-tarj1").removeClass("d-block");
    $("#val-tarj2").addClass("d-block");
    $("#input-numero-tarjeta").removeClass("valido");
    $("#input-numero-tarjeta").addClass("invalido");
  }
  if(v4){
    $("#val-fech1").addClass("d-block");
    $("#val-fech2").removeClass("d-block");
    $("#input-fecha-vencimiento").addClass("valido");
    $("#input-fecha-vencimiento").removeClass("invalido");
  }
  else{
    $("#val-fech1").removeClass("d-block");
    $("#val-fech2").addClass("d-block");
    $("#input-fecha-vencimiento").removeClass("valido");
    $("#input-fecha-vencimiento").addClass("invalido");
  }
  if(v5){
    $("#val-codSeg1").addClass("d-block");
    $("#val-codSeg2").removeClass("d-block");
    $("#input-codigo-CVV").addClass("valido");
    $("#input-codigo-CVV").removeClass("invalido");
  }
  else{
    $("#val-codSeg1").removeClass("d-block");
    $("#val-codSeg2").addClass("d-block");
    $("#input-codigo-CVV").removeClass("valido");
    $("#input-codigo-CVV").addClass("invalido");
  }

  if(v1 && v2 &&v3 && v4 && v5){

    var datos = "nuevoNombre=" +$("#input-nombre").val()+
                "&nuevoApellido=" +$("#input-apellido").val()+
                "&nuevaTarjeta=" +$("#input-numero-tarjeta").val()+
                "&nuevaFecha=" +$("#input-fecha-vencimiento").val()+
                "&nuevoCodigo=" +$("#input-codigo-CVV").val();
    alert(datos);

    /*$.ajax({
      url: "",
      data: datos,
      method: "POST",
      success: function(respuesta){

      },
      error: function(){
        alert("Ocurrio un error!!!");
      }
    });*/

  }
  else{

  }

});