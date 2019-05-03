$(document).ready(function(){

    
});

$("#slc-tipo").change(function(){
	//Esta funcion se ejecuta cada vez que el usuario selecciona o cambia un elemento de la lista.
  if(document.getElementById("slc-tipo").value == "1"){
    $("#txt-duracion").prop('disabled', false);
    document.getElementById("agregar-episodio").style.display ='none';
    return false;
  }
  
  if(document.getElementById("slc-tipo").value == "2"){
    document.getElementById("agregar-episodio").innerHTML = `<button type="button" id="btn-agregar-episodio" class="btn btn-dark" style="margin-left:500px" disabled data-toggle="modal" data-target="#myModal" >Agregar Episodio</button>`;
  
    $("#txt-duracion").prop('disabled', true);
    return false;
  }


  console.log("codigo: " + $("#slc-tipo").val());
});

$("#agregar-temp").click(function(){
    $("#txt-episodio").prop('disabled', false);
    $("#duracion-ep").prop('disabled', false);
    $("#num-ep").prop('disabled', false);
    $("#descripcion-ep").prop('disabled', false);
    $('#agregar-episodio').attr("disabled", false);
});


$("#btn-agregar").click(function(){
 
    $('#btn-agregar-episodio').attr("disabled", false);

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

    var parametro = "unidad=5"+"&"+
                    "duracion="+$("#txt-duracion").val();


    console.log(datos);
    console.log(parametro);
 
    $.ajax({
      url: "ajax/administrador.php?accion='agregar-contenido'",
      data: datos,
      method: "POST",
      success: function(respuesta){
        console.log(respuesta);
        alert("consulta:"+respuesta);
      },
      error: function(){
        console.error(error);
      }
    });
/*
    $.ajax({
      url: "ajax/administrador.php?accion='agregar-pelicula'",
      data: parametro,
      method: "POST",
      success: function(respuesta){
        console.log(respuesta);
  
      },
      error: function(){
        console.error(error);
      }
    });
  */
  });