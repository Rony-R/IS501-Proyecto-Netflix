$(document).ready(function(){
  
    
});

$("#btn-agregar").click(function(){
    var fecha = new Date();
     fechaa = (fecha.getDate() + "/" + (fecha.getMonth() +1) + "/" + fecha. getFullYear());
    

    var datos = "tipo="+$("#slc-tipo").val() +"&"+
                "estudio=" +$("#slc-estudio").val() +"&"+
                "idioma=" +$("#slc-idiomas").val() +"&"+
                "edad=" +$("#slc-edad").val() +"&"+
                "nombre=" +$("#txt-nombre").val() +"&"+
                "urlcontenido=img/"+$("#slc-tipo").val()+"/videos/"+$("#url-contenido").val() +"&"+
                "urlimg=img/"+$("#slc-tipo").val()+"/miniaturas/min-"+$("#url-img").val() +"&"+
                "descripcion=" +$("#txt-descripcion").val() +"&"+
                "fechaSubida=" + fechaa ;



    console.log(datos);
  
    $.ajax({
      url: "ajax/administrador.php?accion='agregar-contenido'",
      data: datos,
      method: "POST",
      success: function(respuesta){
        console.log(respuesta);
  
      },
      error: function(){
        console.error(error);
      }
    });
  
  });