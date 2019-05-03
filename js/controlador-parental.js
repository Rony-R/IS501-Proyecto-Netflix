$(document).ready(function(){
  

});

$("#continuar").click(function(){
    var parametros = "pantalla="+$("#codigo-pantalla").val() + "&password="+$("#pass").val();
      console.log(parametros);
       $.ajax({
           url:"ajax/control-parental.php",
           data:parametros,
           dataType:"json",
           method:"POST",
           success:function(respuesta){
               console.log(respuesta);
               if (respuesta.estatus == 1){
                 $('#parte1').replaceWith(``);

               }else 
                document.getElementById(validacion).innerHTML(`<div class="invalid-feedback">
                                                                   contraseña incorrecta.
                                                                </div>`)
               
           },
           error:function(error){
               console.error(error);
               $("#advertencia").append(error.responseText);
           }
       });

       $('#parte1').replaceWith(``);
   });