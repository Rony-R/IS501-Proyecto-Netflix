

$(document).ready(function(){
    $("#body").hide();
    $("#body").show(1000);
    if(document.getElementById("input-pag").value == "1"){
        var parametros= "estado=1"+"&peticion=estado";
        console.log(parametros);
        $.ajax({
          url:"ajax/procesamiento-reg.php",
          data:parametros,
          method:"POST",
          dataType:"json",
          success:function(respuesta){
            console.log(respuesta.codigo);   
           },
           error:function(error){
             console.log(error);
           }
       });
    }
    if(document.getElementById("input-pag").value == "2"){
        document.getElementById("div-basico").style.opacity = "0.5";
        document.getElementById("div-estandar").style.opacity = "0.5";
        document.getElementById("div-premium").style.opacity = "1";
        document.getElementById("e-1-1").style.color = "#a6a6a6";
        document.getElementById("e-2-1").style.color = "#a6a6a6";
        document.getElementById("e-3-1").style.color = "#a6a6a6";
        document.getElementById("e-4-1").style.color = "#a6a6a6";
        document.getElementById("e-5-1").style.color = "#a6a6a6";
        document.getElementById("e-6-1").style.color = "#a6a6a6";
        document.getElementById("e-7-1").style.color = "#a6a6a6";
        document.getElementById("e-8-1").style.color = "#a6a6a6";
        
        document.getElementById("e-1-2").style.color = "#a6a6a6";
        document.getElementById("e-2-2").style.color = "#a6a6a6";
        document.getElementById("e-3-2").style.color = "#a6a6a6";
        document.getElementById("e-4-2").style.color = "#a6a6a6";
        document.getElementById("e-5-2").style.color = "#a6a6a6";
        document.getElementById("e-6-2").style.color = "#a6a6a6";
        document.getElementById("e-7-2").style.color = "#a6a6a6";
        document.getElementById("e-8-2").style.color = "#a6a6a6";
      
        document.getElementById("e-1-3").style.color ="red";
        document.getElementById("e-2-3").style.color ="red";
        document.getElementById("e-3-3").style.color ="red";
        document.getElementById("e-4-3").style.color ="red";
        document.getElementById("e-5-3").style.color ="red";
        document.getElementById("e-6-3").style.color ="red";
        document.getElementById("e-7-3").style.color ="red";
        document.getElementById("e-8-3").style.color ="red";
        document.getElementById("slc-plan").value = "3";

        var parametros= "tipo-plan="+$("#slc-plan").val()+ "&peticion=establecer-tipo-plan";
        console.log(parametros);
        $.ajax({
          url:"ajax/procesamiento-reg.php",
          data:parametros,
          method:"POST",
          dataType:"json",
          success:function(respuesta){
            console.log(respuesta.codigo);   
           },
           error:function(error){
             console.log(error);
           }
       });
       
    }

    if(document.getElementById("input-pag").value == "6"){
        
        if(document.getElementById("input-tipo-plan").value==1){
            document.getElementById("span-descripcion-plan").innerHTML = "Streaming ilimitado en SD por USD7.99 al mes.";
    
        }
        if(document.getElementById("input-tipo-plan").value==2){
            document.getElementById("span-descripcion-plan").innerHTML= "Streaming ilimitado en HD por USD10.99 al mes.";  
        }
        if(document.getElementById("input-tipo-plan").value==3){
            document.getElementById("span-descripcion-plan").innerHTML= "Streaming ilimitado en HD y Ultra HD por USD13.99 al mes.";
        } 
    
    }
 
});


$("#div-basico").click(function(){ 
    document.getElementById("div-basico").style.opacity = "1";
    document.getElementById("div-estandar").style.opacity = "0.5";
    document.getElementById("div-premium").style.opacity = "0.5";
    document.getElementById("e-1-1").style.color ="red";
    document.getElementById("e-2-1").style.color ="red";
    document.getElementById("e-3-1").style.color ="red";
    document.getElementById("e-4-1").style.color ="red";
    document.getElementById("e-5-1").style.color ="red";
    document.getElementById("e-6-1").style.color ="red";
    document.getElementById("e-7-1").style.color ="red";
    document.getElementById("e-8-1").style.color ="red";
    
    document.getElementById("e-1-2").style.color = "#a6a6a6";
    document.getElementById("e-2-2").style.color = "#a6a6a6";
    document.getElementById("e-3-2").style.color = "#a6a6a6";
    document.getElementById("e-4-2").style.color = "#a6a6a6";
    document.getElementById("e-5-2").style.color = "#a6a6a6";
    document.getElementById("e-6-2").style.color = "#a6a6a6";
    document.getElementById("e-7-2").style.color = "#a6a6a6";
    document.getElementById("e-8-2").style.color = "#a6a6a6";
  
    document.getElementById("e-1-3").style.color = "#a6a6a6";
    document.getElementById("e-2-3").style.color = "#a6a6a6";
    document.getElementById("e-3-3").style.color = "#a6a6a6";
    document.getElementById("e-4-3").style.color = "#a6a6a6";
    document.getElementById("e-5-3").style.color = "#a6a6a6";
    document.getElementById("e-6-3").style.color = "#a6a6a6";
    document.getElementById("e-7-3").style.color = "#a6a6a6";
    document.getElementById("e-8-3").style.color = "#a6a6a6";
    document.getElementById("slc-plan").value = "1";
    
});
  
$("#div-estandar").click(function(){ 
    document.getElementById("div-basico").style.opacity = "0.5";
    document.getElementById("div-estandar").style.opacity = "1";
    document.getElementById("div-premium").style.opacity = "0.5";
    document.getElementById("e-1-1").style.color = "#a6a6a6";
    document.getElementById("e-2-1").style.color = "#a6a6a6";
    document.getElementById("e-3-1").style.color = "#a6a6a6";
    document.getElementById("e-4-1").style.color = "#a6a6a6";
    document.getElementById("e-5-1").style.color = "#a6a6a6";
    document.getElementById("e-6-1").style.color = "#a6a6a6";
    document.getElementById("e-7-1").style.color = "#a6a6a6";
    document.getElementById("e-8-1").style.color = "#a6a6a6";
    
    document.getElementById("e-1-2").style.color ="red";
    document.getElementById("e-2-2").style.color ="red";
    document.getElementById("e-3-2").style.color ="red";
    document.getElementById("e-4-2").style.color ="red";
    document.getElementById("e-5-2").style.color ="red";
    document.getElementById("e-6-2").style.color ="red";
    document.getElementById("e-7-2").style.color ="red";
    document.getElementById("e-8-2").style.color ="red";
  
    document.getElementById("e-1-3").style.color = "#a6a6a6";
    document.getElementById("e-2-3").style.color = "#a6a6a6";
    document.getElementById("e-3-3").style.color = "#a6a6a6";
    document.getElementById("e-4-3").style.color = "#a6a6a6";
    document.getElementById("e-5-3").style.color = "#a6a6a6";
    document.getElementById("e-6-3").style.color = "#a6a6a6";
    document.getElementById("e-7-3").style.color = "#a6a6a6";
    document.getElementById("e-8-3").style.color = "#a6a6a6";
    document.getElementById("slc-plan").value = "2";
});
  
$("#div-premium").click(function(){ 
    document.getElementById("div-basico").style.opacity = "0.5";
    document.getElementById("div-estandar").style.opacity = "0.5";
    document.getElementById("div-premium").style.opacity = "1";
    document.getElementById("e-1-1").style.color = "#a6a6a6";
    document.getElementById("e-2-1").style.color = "#a6a6a6";
    document.getElementById("e-3-1").style.color = "#a6a6a6";
    document.getElementById("e-4-1").style.color = "#a6a6a6";
    document.getElementById("e-5-1").style.color = "#a6a6a6";
    document.getElementById("e-6-1").style.color = "#a6a6a6";
    document.getElementById("e-7-1").style.color = "#a6a6a6";
    document.getElementById("e-8-1").style.color = "#a6a6a6";
    
    document.getElementById("e-1-2").style.color = "#a6a6a6";
    document.getElementById("e-2-2").style.color = "#a6a6a6";
    document.getElementById("e-3-2").style.color = "#a6a6a6";
    document.getElementById("e-4-2").style.color = "#a6a6a6";
    document.getElementById("e-5-2").style.color = "#a6a6a6";
    document.getElementById("e-6-2").style.color = "#a6a6a6";
    document.getElementById("e-7-2").style.color = "#a6a6a6";
    document.getElementById("e-8-2").style.color = "#a6a6a6";
  
    document.getElementById("e-1-3").style.color ="red";
    document.getElementById("e-2-3").style.color ="red";
    document.getElementById("e-3-3").style.color ="red";
    document.getElementById("e-4-3").style.color ="red";
    document.getElementById("e-5-3").style.color ="red";
    document.getElementById("e-6-3").style.color ="red";
    document.getElementById("e-7-3").style.color ="red";
    document.getElementById("e-8-3").style.color ="red";
    document.getElementById("slc-plan").value = "3";
});

$("#btn-continuar").click(function(){ 
    window.location ="registro-cuenta-1.html";
});

function validarCampoVacio(id){
    if(document.getElementById(id).value == ""){
        document.getElementById(id).classList.remove("is-valid");
        document.getElementById(id).classList.add("is-invalid");
        return false;
    }else{
        document.getElementById(id).classList.remove("is-invalid");
        document.getElementById(id).classList.add("is-valid");
        return true;
    }
}

function validarGenero(name){
    var campo = $("input[name=\""+name+"\"]:checked").val();    
    console.log("---"+campo+"----"+name);

    if(campo == undefined || campo == null || campo=="" || !campo){                
            $("#invalid-gen").css("display","block");
        return false;        
    }

    else{        
        $("#invalid-gen").css("display","none");                                
        return true;
    }        
}

function validarEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (re.test(email)) {
        //console.log("Correo valido " + email); 
        document.getElementById("txt-correo").classList.remove("is-invalid");
        document.getElementById("txt-correo").classList.add("is-valid");
    }
    else {
        //console.log("Correo invalido " + email);
        document.getElementById("txt-correo").classList.remove("is-valid");
        document.getElementById("txt-correo").classList.add("is-invalid");
    }
}

/*SELECT-VER 1.1*/ 

$("#btn-ver").click(function(){ 
    window.location ="planes.php";
});

/*PLANES 1.2*/ 

$("#btn-continuar-1").click(function(){
     var parametros= "tipo-plan="+$("#slc-plan").val()+ "&peticion=establecer-tipo-plan";
     console.log(parametros);
     //alert(parametros);
     $.ajax({
       url:"ajax/procesamiento-reg.php",
       data:parametros,
       method:"POST",
       dataType:"json",
       success:function(respuesta){
         console.log(respuesta.codigo);   
         window.location ="paso-2.html";
        },
        error:function(error){
          console.log(error);
          window.location ="planes.php";
        }
    });

});


/*PASO 2.1*/ 
  
$("#btn-continuar").click(function(){ 
    window.location ="regis-user.php";
});

/*REG-USER 2.2*/ 

$("#btn-continuar-2").click(function(){

    var v1 = validarCampoVacio("txt-correo");
    var v2 = validarCampoVacio("txt-contrasenia");
    var v3 = validarCampoVacio("txt-telefono");
    var v4 = validarGenero("genero");

    if (v1 && v2 && v3 && v4){

      var parametros= "correo="+$("#txt-correo").val() +
                      "&contra="+ $("#txt-contrasenia").val() +
                      "&telefono="+ $("#txt-telefono").val() +
                      "&genero="+ $("input[name='genero']:checked").val() +
                      "&peticion=info-usuario";

      console.log(parametros);
      //alert(parametros);

      $.ajax({
        url:"ajax/procesamiento-reg.php",
        data:parametros,
        method:"POST",
        dataType:"json",
        success:function(respuesta){
          console.log(respuesta.codigo);   
          window.location ="tipo-tarjeta.html";
         },
         error:function(error){
           console.log(error);
           window.location ="regis-user.php";
          
         }
       });
    }
    else{
        console.log("Los campos no pueden estar vacios!!!");
    }
});



/*TIPO-TAR 3.1*/ 

$("#btn-tar-1").click(function(){ 
    window.location ="regis-tarjeta.php";
});

/*REG-TAR 3.2*/ 
$("#btn-iniciar-membresia").click(function(){

    var v1 = validarCampoVacio("txt-nombre");
    var v2 = validarCampoVacio("txt-apellido");
    var v3 = validarCampoVacio("txt-numero-tarjeta");
    var v4 = validarCampoVacio("txt-fecha-vencimiento");
    var v5 = validarCampoVacio("txt-codigo-CVV");
    
    if (v1 && v2 && v3 && v4 && v5){

        var parametrosUsuarios = "tipo-plan="+$("#input-tipo-plan").val() + 
                                 "&genero="+$("#input-genero").val() + 
                                 "&correo="+$("#input-correo").val() + 
                                 "&contra="+$("#input-contra").val() +
                                 "&telefono="+$("#input-telefono").val();

        var parametrosTarjeta = "&tipo-tarj="+ $("#slc-tipo-tarjeta").val() + 
                                "&nombre-tarj="+ $("#txt-nombre").val() + 
                                "&apellido-tarj="+ $("#txt-apellido").val() + 
                                "&num-tarj="+ $("#txt-numero-tarjeta").val() + 
                                "&codigo-cvv="+ $("#txt-codigo-CVV").val() + 
                                "&fecha-venc-tarj="+ $("#txt-fecha-vencimiento").val();

        alert("Parametros Usuario: " + parametrosUsuarios)
        alert("Parametros Tarjeta" + parametrosTarjeta);

        /*$.ajax({
            url: "ajax/api.php?accion='insertar-usuario'",
            method: "POST",
            data:parametrosUsuarios,
            dataType: "json",
            success: function(respuesta){
                alert(respuesta);
            },
            error: function(e){
                alert("Ocurrio un error!!!");
                console.log(e);
            }
        });*/

        /*$.ajax({
            url: "ajax/api.php?accion='insertar-registro-tarjeta'",
            method: "POST",
            data:parametrosTarjeta,
            dataType: "json",
            success: function(respuesta){
                alert(respuesta.mensaje);
            },
            error: function(e){
                console.log(e);
            }
        });*/

    }
    else{
        console.log("Los campos no pueden estar vacios!!!");
    }  

});