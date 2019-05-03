$(document).ready(function(){

    
});

// //===================================agregar boton para insertar un episodio a una serie========================================================================

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

////==========================================habilitar botones de la ventana modal========================================================================
      $("#agregar-temp").click(function(){
          $("#txt-episodio").prop('disabled', false);
          $("#duracion-ep").prop('disabled', false);
          $("#num-ep").prop('disabled', false);
          $("#descripcion-ep").prop('disabled', false);
          $('#guardar-episodio').attr("disabled", false);
      });

////================================================agregar contenido a la tabla========================================================================
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

 //peticion ajax para guardar contenido
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

//peticion ajax para guardar pelicula
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
  
  });

////================================================agregar una temporada ========================================================================
$("#agregar-temp").click(function(){

  var datos = "numTemp="+$("#txt-temporada").val()+"&"+
              "descripcion="+$("#descripcion-temp").val();


  console.log(datos);


//peticion ajax para guardar la temporada
  $.ajax({
    url: "ajax/administrador.php?accion='agregar-temporada'",
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

});

//================================================agregar un episodio ========================================================================
$("#guardar-episodio").click(function(){

  var datos = "nombre="+$("#txt-episodio").val()+"&"+
              "duracion="+$("#duracion-ep").val()+"&"+
              "numEpisodio="+$("#num-ep").val()+"&"+
              "descripcion="+$("#descripcion-ep").val();


  console.log(datos);


//peticion ajax para guardar la temporada
  $.ajax({
    url: "ajax/administrador.php?accion='agregar-episodio'",
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

});