
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
            $("#" + idContenido).addClass("d-block");
            $("#door-icon").addClass("d-none");
            $("#tag-icon").addClass("d-none");
            $("#door-icon").removeClass("d-flex");
            $("#tag-icon").removeClass("d-block");
        }
        else
        {
            $("#" + idContenido).addClass("d-block");
            $("#door-icon").addClass("d-none");
            $("#tv-icon").addClass("d-none");
            $("#door-icon").removeClass("d-flex");
            $("#tv-icon").removeClass("d-block");
        }
    }
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
  validar();
});
  
function validar()
{

    var resultado = true;

    validarCampoVacio("input-correo");
    validarCampoVacio("input-contra");

}
  
var validarCampoVacio = function(id){

  var r1 = false;
  var r2 = false;

  if(id == "input-correo")
  {
    if($("#" + id).val() == "")
    {
      $("#" + id).addClass("invalido");
      $("#" + id).removeClass("valido");
      $("#correo-incorrecto").addClass("d-block");
      $("#correo-correcto").removeClass("d-block");
      r1 = false;
    }
    else
    {
      r1 = true;
      //alert("Correo lleno");
    }
  }
  else
  {
    if($("#" + id).val() == "")
    {
      $("#" + id).addClass("invalido");
      $("#" + id).removeClass("valido");
      $("#contra-incorrecta").removeClass("d-none");
      $("#contra-correcta").addClass("d-none");
      r2 = false;
    }
    else
    {
      r2 = true;
      //alert("Contraseña llena");
    }
  }

  if(r1 == true && r2 == true)
  {
    alert(r1 + " " + r2);
  }
  else
  {
    alert("Hola");
  }

};

$("#btn-manage-profiles").click(function(){
  window.location.href="manage.html";
});

$("#btn-done").click(function(){
  window.location.href="users.html";
});

$("#btn-prueba-gratuita").click(function(){ 
  window.location ="registro.html";
});