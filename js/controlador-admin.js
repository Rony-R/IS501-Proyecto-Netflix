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
    

    var datosContenido = "tipo="+$("#slc-tipo").val() +"&"+
                "estudio=" +$("#slc-estudio").val() +"&"+
                "idioma=" +$("#slc-idiomas").val() +"&"+
                "edad=" +$("#slc-edad").val() +"&"+
                "nombre=" +$("#txt-nombre").val() +"&"+
                "urlcontenido=img/"+$("#slc-tipo").val()+"/videos/"+$("#url-contenido").val() +"&"+
                "urlimg=img/"+$("#slc-tipo").val()+"/miniaturas/min-"+$("#url-img").val() +"&"+
                "descripcion=" +$("#txt-descripcion").val() +"&"+
                "fechaSubida=" + fechaa ;

    var datosPeli = "unidad=5"+"&"+
                    "duracion="+$("#txt-duracion").val();

    var nombreContenido = "nombre=" +$("#txt-nombre").val();

    if($("#slc-tipo").val() == 1){//PELICULAS

      //peticion ajax para guardar contenido
    $.ajax({
      url: "ajax/api.php?accion='insert-contenido'",
      data: datosContenido,
      method: "POST",
      success: function(respuesta){

        if(respuesta == 1){

          $.ajax({
            url: "ajax/api.php?accion='obtener-id-conteido'",
            data: nombreContenido,
            method: "POST",
            dataType: "json",
            success: function(respuesta){
              var idCont = "&idContenido=" +respuesta.CODIGO_CONTENIDO;

              insertarPelicula(datosPeli, idCont);
            }
          });

        }
        
      },
      error: function(){
        console.error(error);
      }
    });

    }
    else{//SERIES

      $.ajax({
        url: "ajax/api.php?accion='insert-contenido'",
        data: datosContenido,
        method: "POST",
        success: function(respuesta){
  
          if(respuesta == 1){
  
            $.ajax({
              url: "ajax/api.php?accion='obtener-id-conteido'",
              data: nombreContenido,
              method: "POST",
              dataType: "json",
              success: function(respuesta){
                var idCont = "&idContenido=" +respuesta.CODIGO_CONTENIDO;
  
                insertarTemporada(idCont);
              }
            });
  
          }
          
        },
        error: function(){
          console.error(error);
        }
      });

    }
  
  });

//peticion ajax para guardar pelicula
function insertarPelicula(data, id){

  var param = data + id;

  $.ajax({
    url: "ajax/api.php?accion='insert-pelicula'",
    data: param,
    method: "POST",
    success: function(respuesta){
      console.log(respuesta);
      window.location.reload();
    },
    error: function(){
      console.error(error);
    }
  });
  
}
function insertarTemporada(id){

  ////================================================agregar una temporada ========================================================================
    $("#agregar-temp").click(function(){

      var datosTemporada = "numTemp="+$("#txt-temporada").val()+"&"+
                  "descripcion="+$("#descripcion-temp").val()+ id;

      //alert("Datos temporada= " +datosTemporada);

    //peticion ajax para guardar la temporada
      $.ajax({
        url: "ajax/api.php?accion='insert-temporada'",
        data: datosTemporada,
        method: "POST",
        success: function(respuesta){

          $.ajax({
            url: "ajax/api.php?accion='obtener-id-temporada'",
            data: datosTemporada,
            method: "POST",
            dataType: "json",
            success: function(respuesta){
              //alert("El codigo de la temporada es: " +respuesta.CODIGO_REGISTRO_TEMPORADA);
              var codTemporada = "&codtemp=" +respuesta.CODIGO_REGISTRO_TEMPORADA;

              insertarEpisodio(codTemporada);

            }
          });
          
        },
        error: function(){
          console.error(error);
        }
      });

    });

}

function insertarEpisodio(cod){

  //================================================agregar un episodio ========================================================================
  $("#guardar-episodio").click(function(){

    var datosEpisodio = "nombre="+$("#txt-episodio").val()+"&"+
                "duracion="+$("#duracion-ep").val()+"&"+
                "numEpisodio="+$("#num-ep").val()+"&"+
                "descripcion="+$("#descripcion-ep").val()+ cod;


    //alert("Datos episodios: " +datosEpisodio);

  //peticion ajax para guardar un episodio
    $.ajax({
      url: "ajax/api.php?accion='insertar-episodio'",
      data: datosEpisodio,
      method: "POST",
      success: function(respuesta){
        console.log(respuesta);
        window.location.reload();
      },
      error: function(){
        console.error(error);
      }
    });


  });

}
