var  var_tipo_plan = 0;
var var_correo = "";
var var_contrasenia = "";




  
$(document).ready(function(){
    $("#body").hide();
    $("#body").show(1000);
   
    
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
        var_tipo_plan=3; 
    
    
    }
    
    if(document.getElementById("input-pag").value == "6"){
        if(var_tipo_plan ==1){
            document.getElementById("span-descripcion-plan").innerHTML = "Streaming ilimitado en SD por USD7.99 al mes.";
           
        }
        if(var_tipo_plan == 2){
            document.getElementById("span-descripcion-plan").innerHTML= "Streaming ilimitado en HD por USD10.99 al mes.";  
        }
        if(var_tipo_plan == 3){
            document.getElementById("span-descripcion-plan").innerHTML= "Streaming ilimitado en HD y Ultra HD por USD13.99 al mes.";
        } 
        console.log(var_tipo_plan);
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
    var_tipo_plan=1;
    console.log(var_tipo_plan);
    
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
    var_tipo_plan=2;


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
    var_tipo_plan=3;
    console.log(var_tipo_plan);
});


$("#btn-continuar").click(function(){ 
    window.location ="registro-cuenta-1.html";
});


/*VALIDAR*/

function validarCampoVacio(id) {
    if (document.getElementById(id).value == "") {
        document.getElementById(id).classList.remove("is-valid");
        document.getElementById(id).classList.add("is-invalid");
        return false;
    } else {
        document.getElementById(id).classList.remove("is-invalid");
        document.getElementById(id).classList.add("is-valid");
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
    window.location ="planes.html";
});

/*PLANES 1.2*/ 

$("#btn-continuar-1").click(function(){
    window.location ="paso-2.html";
});


/*PASO 2.1*/ 
  
$("#btn-continuar").click(function(){ 
    window.location ="regis-user.html";
});

/*REG-USER 2.2*/ 

$("#btn-continuar-2").click(function(){ 
    if ( validarCampoVacio("txt-correo") && validarCampoVacio("txt-contrasenia") )
    {   
        var_correo = document.getElementById("txt-correo").value ;
        var_contrasenia = document.getElementById("txt-contrasenia").value ; 
        window.location ="tipo-tarjeta.html";
    }
});



/*TIPO-TAR 3.1*/ 

$("#btn-tar-1").click(function(){ 
    window.location ="regis-tarjeta.html";
});

/*REG-TAR 3.2*/ 
$("#btn-iniciar-membresia").click(function(){
    
    if ( validarCampoVacio("txt-nombre") && validarCampoVacio("txt-apellido") && 
         validarCampoVacio("txt-numero-tarjeta") && validarCampoVacio("txt-fecha-vencimiento") && 
         validarCampoVacio("txt-codigo-CVV" ))
    {   
        var parametros= "&tipo-plan="+var_tipo_plan+"&correo="+var_correo+ 
        "&contra="+var_contrasenia+"&nombre-tarj="+ $("#txt-nombre").val()+
        "&apellido-tarj="+ $("#txt-apellido").val()+"&num-tarj="+ $("#txt-numero-tarjeta").val()+
        "&fecha-venc-tarj="+ $("#txt-fecha-vencimiento").val()+"&codigo-cvv="+ $("#txt-codigo-CVV").val()+
        "&tipo-tarj="+ $("#slc-tipo-tarjeta").val() ; 

        console.log(parametros);
    /*
        $.ajax({
          url:"ajax/registro-usuario.php",
          method:"POST",
          data:parametros,
          dataType:"json",
          success:function(respuesta){ 
             console.log(respuesta);
          }
        });
       */
    }  

});





 

