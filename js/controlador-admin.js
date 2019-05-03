$(document).ready(function(){
  
    
});

$("#btn-agregar").click(function(){
    var fecha = new Date();
     fechaa = (fecha.getDate() + "/" + (fecha.getMonth() +1) + "/" + fecha. getFullYear());
    

    var datos = "tipo="+$("#slc-tipo").val() +"&"+
                "nombre=" +$("#txt-nombre").val() +"&"+
                "idioma=" +$("#slc-idiomas").val() +"&"+
                "duracion=" +$("#txt-duracion").val() +"&"+
                "edad=" +$("#slc-edad").val() +"&"+
                "urlimg=" +$("#url-img").val() +"&"+
                "urlcontenido=" +$("#url-contenido").val() +"&"+
                "descripcion=" +$("#txt-descripcion").val() +"&"+
                "fechaSubida=" + fechaa +"&"+
                "estudio=" +$("#slc-estudio").val();
  
    console.log(datos);
  
    $.ajax({
      url: "ajax/administrador.php?accion='agregar-contenido'",
      data: datos,
      method: "POST",
      success: function(respuesta){
        console.log(respuesta);
  
      },
      error: function(){
        alert("Ocurrio un error insertando la pantalla");
      }
    });
  
  });