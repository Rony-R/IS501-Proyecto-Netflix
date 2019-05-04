$(document).ready(function(){
   
//inicio
        $('#portada-inicio').click(function() {
            $('#portada-inicio').replaceWith('<video autoplay id="video-portada" src="img/series/vikingos/vikings.mp4#t=35,68.8" width="100%" height="770px" style="position:absolute"></video>');
            document.getElementById('texto1').innerHTML = `<div style="height:180px"> </div>`;
        });
        
        setInterval(function(){
            $('#video-portada').replaceWith('<img id="portada-inicio" src="img/series/vikingos/9.jpg" style="width:100%; height:800px; position:absolute">')
            $('#texto1').replaceWith('<div id="texto1"><h5><b>Ver la temporada 4</b></h5><p style="text-align : justify;">Seremos testigos del regreso de Ragnar a Wessex. Por otro lado, Lagertha tratará de mantenerse en el poder en Kattegat y comenzará una relación amorosa. Además, veremos a Bjorn surcando el Mediterráneo.</p></div>')
        },37000);
    
//mostrar contenido categoria 1

        
        var codigo = "codCat="+$("#cod-cat-1").val();
                
        console.log(codigo);

                        $.ajax({
                            
                            url: "ajax/contenido.php?accion='obtener-contenido'",
                            data:codigo,
                            dataType: "json",
                            method: "POST",
                            success: function(respuesta){

                                console.log(respuesta);
                                
                                    for(var i=0; i<respuesta[0].CANTIDAD_CONTENIDO; i++){
                                        $("#content").append(`
                                            <li class="card"  id="card-${respuesta[i].CODIGO_CONTENIDO}">
                                            <div class="inside-top"  id="detalle${respuesta[i].CODIGO_CONTENIDO}" >
                                            <img src="${respuesta[i].URL_MINIATURA}" id="img">
                                            </div>
                                            </li> 
                                        `);
                                    }
                                                    
                                    
                                
                            },
                            error: function(e){
                            console.log("Ocurrio un error!!!: " +e);
                            }
                        
                });
});

   
//mostrar contenido categoria 2

        
var codigo2 = "codCat="+$("#cod-cat-2").val();
                
console.log(codigo2);

                $.ajax({
                    
                    url: "ajax/contenido.php?accion='obtener-contenido'",
                    data:codigo2,
                    dataType: "json",
                    method: "POST",
                    success: function(respuesta){

                        console.log(respuesta);
                        
                            for(var i=0; i<respuesta[0].CANTIDAD_CONTENIDO; i++){
                                $("#content2").append(`
                                    <li class="card"  id="card-${respuesta[i].CODIGO_CONTENIDO}">
                                    <div class="inside-top"  id="detalle${respuesta[i].CODIGO_CONTENIDO}" >
                                    <img src="${respuesta[i].URL_MINIATURA}" id="img">
                                    </div>
                                    </li> 
                                `);
                            }
                                            
                            
                        
                    },
                    error: function(e){
                    console.log("Ocurrio un error!!!: " +e);
                    }
                
        });

//mostrar contenido categoria 3

        
var codigo3 = "codCat="+$("#cod-cat-3").val();
                
console.log(codigo3);

                $.ajax({
                    
                    url: "ajax/contenido.php?accion='obtener-contenido'",
                    data:codigo3,
                    dataType: "json",
                    method: "POST",
                    success: function(respuesta){

                        console.log(respuesta);
                        
                            for(var i=0; i<respuesta[0].CANTIDAD_CONTENIDO; i++){
                                $("#content3").append(`
                                    <li class="card"  id="card-${respuesta[i].CODIGO_CONTENIDO}">
                                    <div class="inside-top"  id="detalle${respuesta[i].CODIGO_CONTENIDO}" >
                                    <img src="${respuesta[i].URL_MINIATURA}" id="img">
                                    </div>
                                    </li> 
                                `);
                            }
                                            
                            
                        
                    },
                    error: function(e){
                    console.log("Ocurrio un error!!!: " +e);
                    }
                
        });

//mostrar contenido categoria 4

        
var codigo4 = "codCat="+$("#cod-cat-4").val();
                
console.log(codigo4);

                $.ajax({
                    
                    url: "ajax/contenido.php?accion='obtener-contenido'",
                    data:codigo4,
                    dataType: "json",
                    method: "POST",
                    success: function(respuesta){

                        console.log(respuesta);
                        
                            for(var i=0; i<respuesta[0].CANTIDAD_CONTENIDO; i++){
                                $("#content4").append(`
                                    <li class="card"  id="card-${respuesta[i].CODIGO_CONTENIDO}">
                                    <div class="inside-top"  id="detalle${respuesta[i].CODIGO_CONTENIDO}" >
                                    <img src="${respuesta[i].URL_MINIATURA}" id="img">
                                    </div>
                                    </li> 
                                `);
                            }
                                            
                            
                        
                    },
                    error: function(e){
                    console.log("Ocurrio un error!!!: " +e);
                    }
                
        });


//mostrar contenido categoria 5

        
var codigo5 = "codCat="+$("#cod-cat-5").val();
                
console.log(codigo5);

                $.ajax({
                    
                    url: "ajax/contenido.php?accion='obtener-contenido'",
                    data:codigo5,
                    dataType: "json",
                    method: "POST",
                    success: function(respuesta){

                        console.log(respuesta);
                        
                            for(var i=0; i<respuesta[0].CANTIDAD_CONTENIDO; i++){
                                $("#content5").append(`
                                    <li class="card"  id="card-${respuesta[i].CODIGO_CONTENIDO}">
                                    <div class="inside-top"  id="detalle${respuesta[i].CODIGO_CONTENIDO}" >
                                    <img src="${respuesta[i].URL_MINIATURA}" id="img">
                                    </div>
                                    </li> 
                                `);
                            }
                                            
                            
                        
                    },
                    error: function(e){
                    console.log("Ocurrio un error!!!: " +e);
                    }
                
        });


//mostrar contenido categoria 6

        
var codigo6 = "codCat="+$("#cod-cat-6").val();
                
console.log(codigo6);

                $.ajax({
                    
                    url: "ajax/contenido.php?accion='obtener-contenido'",
                    data:codigo6,
                    dataType: "json",
                    method: "POST",
                    success: function(respuesta){

                        console.log(respuesta);
                        
                            for(var i=0; i<respuesta[0].CANTIDAD_CONTENIDO; i++){
                                $("#content6").append(`
                                    <li class="card"  id="card-${respuesta[i].CODIGO_CONTENIDO}">
                                    <div class="inside-top"  id="detalle${respuesta[i].CODIGO_CONTENIDO}" >
                                    <img src="${respuesta[i].URL_MINIATURA}" id="img">
                                    </div>
                                    </li> 
                                `);
                            }
                                            
                            
                        
                    },
                    error: function(e){
                    console.log("Ocurrio un error!!!: " +e);
                    }
                
        });


//mostrar contenido categoria 7

        
var codigo7 = "codCat="+$("#cod-cat-7").val();
                
console.log(codigo7);

                $.ajax({
                    
                    url: "ajax/contenido.php?accion='obtener-contenido'",
                    data:codigo7,
                    dataType: "json",
                    method: "POST",
                    success: function(respuesta){

                        console.log(respuesta);
                        
                            for(var i=0; i<respuesta[0].CANTIDAD_CONTENIDO; i++){
                                $("#content7").append(`
                                    <li class="card"  id="card-${respuesta[i].CODIGO_CONTENIDO}">
                                    <div class="inside-top"  id="detalle${respuesta[i].CODIGO_CONTENIDO}" >
                                    <img src="${respuesta[i].URL_MINIATURA}" id="img">
                                    </div>
                                    </li> 
                                `);
                            }
                                            
                            
                        
                    },
                    error: function(e){
                    console.log("Ocurrio un error!!!: " +e);
                    }
                
        });

//mostrar contenido categoria 8

        
var codigo8 = "codCat="+$("#cod-cat-8").val();
                
console.log(codigo8);

                $.ajax({
                    
                    url: "ajax/contenido.php?accion='obtener-contenido'",
                    data:codigo8,
                    dataType: "json",
                    method: "POST",
                    success: function(respuesta){

                        console.log(respuesta);
                        
                            for(var i=0; i<respuesta[0].CANTIDAD_CONTENIDO; i++){
                                $("#content8").append(`
                                    <li class="card"  id="card-${respuesta[i].CODIGO_CONTENIDO}">
                                    <div class="inside-top"  id="detalle${respuesta[i].CODIGO_CONTENIDO}" >
                                    <img src="${respuesta[i].URL_MINIATURA}" id="img">
                                    </div>
                                    </li> 
                                `);
                            }
                                            
                            
                        
                    },
                    error: function(e){
                    console.log("Ocurrio un error!!!: " +e);
                    }
                
        });

//mostrar contenido categoria 9

        
var codigo9 = "codCat="+$("#cod-cat-9").val();
                
console.log(codigo9);

                $.ajax({
                    
                    url: "ajax/contenido.php?accion='obtener-contenido'",
                    data:codigo9,
                    dataType: "json",
                    method: "POST",
                    success: function(respuesta){

                        console.log(respuesta);
                        
                            for(var i=0; i<respuesta[0].CANTIDAD_CONTENIDO; i++){
                                $("#content9").append(`
                                    <li class="card"  id="card-${respuesta[i].CODIGO_CONTENIDO}">
                                    <div class="inside-top"  id="detalle${respuesta[i].CODIGO_CONTENIDO}" >
                                    <img src="${respuesta[i].URL_MINIATURA}" id="img">
                                    </div>
                                    </li> 
                                `);
                            }
                                            
                            
                        
                    },
                    error: function(e){
                    console.log("Ocurrio un error!!!: " +e);
                    }
                
        });


//mostrar contenido categoria 10

        
var codigo10 = "codCat="+$("#cod-cat-10").val();
                
console.log(codigo10);

                $.ajax({
                    
                    url: "ajax/contenido.php?accion='obtener-contenido'",
                    data:codigo10,
                    dataType: "json",
                    method: "POST",
                    success: function(respuesta){

                        console.log(respuesta);
                        
                            for(var i=0; i<respuesta[0].CANTIDAD_CONTENIDO; i++){
                                $("#content10").append(`
                                    <li class="card"  id="card-${respuesta[i].CODIGO_CONTENIDO}">
                                    <div class="inside-top"  id="detalle${respuesta[i].CODIGO_CONTENIDO}" >
                                    <img src="${respuesta[i].URL_MINIATURA}" id="img">
                                    </div>
                                    </li> 
                                `);
                            }
                                            
                            
                        
                    },
                    error: function(e){
                    console.log("Ocurrio un error!!!: " +e);
                    }
                
        });

//mostrar contenido categoria 11

        
var codigo11 = "codCat="+$("#cod-cat-11").val();
                
console.log(codigo11);

                $.ajax({
                    
                    url: "ajax/contenido.php?accion='obtener-contenido'",
                    data:codigo11,
                    dataType: "json",
                    method: "POST",
                    success: function(respuesta){

                        console.log(respuesta);
                        
                            for(var i=0; i<respuesta[0].CANTIDAD_CONTENIDO; i++){
                                $("#content11").append(`
                                    <li class="card"  id="card-${respuesta[i].CODIGO_CONTENIDO}">
                                    <div class="inside-top"  id="detalle${respuesta[i].CODIGO_CONTENIDO}" >
                                    <img src="${respuesta[i].URL_MINIATURA}" id="img">
                                    </div>
                                    </li> 
                                `);
                            }
                                            
                            
                        
                    },
                    error: function(e){
                    console.log("Ocurrio un error!!!: " +e);
                    }
                
        });



///////////////////////////////////////////////////////////////////////////////////////////////////////////////
/*
//mostrar detalle del contenido

			var elemento=document.getElementById("card-2");
            
            elemento.onmouseover = function(e) {
                
                $.ajax({
                    url: "ajax/contenido.php?accion='obtener-info-contenido'",
                    dataType: "json",
                    method: "GET",
                    success: function(respuesta){
                
                      alert("Consulta detalle: " +respuesta);
                /*
                      for(var i=0; i<respuesta[0].PANTALLAS_CREADAS; i++){
                        $("#div-pantallas").append(
                          '<div id="pantalla-'+ respuesta[i].CODIGO_PANTALLA +'">'+
                            '<a href="Inicio.php"><img class="min-user" src="img/usr-1.png"></a>'+
                            '<p class="white-text center-text mt-2 mr-3">'+ respuesta[i].NOMBRE_PANTALLA +'</p>'+
                          '</div>'
                        );
                      
            
                     
                
                    },
                    error: function(e){
                      console.log("Ocurrio un error!!!: " +e);
                    }
                
                  });








				// pelicula
 
                 document.getElementById("detalle2").innerHTML=`<div style="position:absolute; margin-top:18%; max-width:400px; padding:5px">
                                                               <div style="float:left; width:200px"> 
                                                               <button id="add-lista" type="button" class="btn btn-link" style="color:red; margin:-1.5% 0;padding:0; font-size:14px;"> <i class="fas fa-play-circle" ></i></i></button>
                                                                <h6 id="nombre-contenido" style="margin:-2.5% 0;">Outlander</h6>
                                                                <p style="color:#38A454;text-shadow:2px gray; float:left; font-size:11px"><b>98% de coincidencia</b></p>
                                                                <div id="cat-edad" style="border:1px solid white; float:left; width:25px;font-size:10px; height:14px; margin-left:5px;padding-bottom:3px"><p>+16</p></div>
                                                                <p id="duracion" style="font-size:9px; width:40px; float:left; margin-left:5px; padding-top:2px"><b>1h 25min</b></p>
                                                                <p id="generos" style="font-size:10px ;float:left;margin:-1.5% 0;">genero1 • genero2 • genero3</p>
                                                               </div>
                                                                <div style="width:15px; height:25px; float:left; margin:15px 0 0 15px">
                                                                    <button id="like" type="button" class="btn btn-link" style="color:white; margin:-2.5% 0; padding:0; font-size:9px;"> <i class="fas fa-thumbs-up"></i></button>
                                                                    <button id="dislike" type="button" class="btn btn-link" style="color:white; margin:-2.5% 0; padding:0; font-size:9px;"> <i class="fas fa-thumbs-down"></i></button>
                                                                    <button id="add-lista" type="button" class="btn btn-link" style="color:white; margin:-2.5% 0;padding:0; font-size:9px;"> <i class="fas fa-plus-circle"></i></button>       
                                                                </div>
                                                                <br><br><br>
                                                                <button id="despliegue" type="button" class="btn btn-link" style="color:white; margin-left:50%;padding:0; font-size:11px;"> <i class="fas fa-chevron-down"></i></button>
                                                                
                                                            </div>
                                                            <img src="img/series/outlander/1.jpg" id="img">`;

                //serie
            /*  document.getElementById("cont2").innerHTML=`<div style="position:absolute; margin-top:18%; max-width:400px; padding:5px" id="contenido" >
                                                               <div style="float:left; width:220px"> 
                                                               <button id="add-lista" type="button" class="btn btn-link" style="color:red; margin:-1.5% 0;padding:0; font-size:14px;"> <i class="fas fa-play-circle" ></i></i></button>
                                                                <h6 id="nombre-contenido" style="margin:-2.5% 0;">Outlander</h6>
                                                                <p style="color:#38A454;text-shadow:2px gray; float:left; font-size:10px"><b>98% de coincidencia</b></p>
                                                                <div id="cat-edad" style="border:1px solid white; float:left; width:25px;font-size:9px; height:14px; margin-left:5px;padding-bottom:3px"><p>+16</p></div>
                                                                <p id="cant-temp" style="font-size:9px; float:left; margin-left:3px; padding-top:2px">4 Temporadas</p>
                                                                <p id="generos" style="font-size:10px ;float:left;margin:-1.5% 0;">genero1 • genero2 • genero3</p>
                                                               </div>
                                                                <div style="width:15px; height:25px; float:left; margin:15px 0 0 1px">
                                                                    <button id="like" type="button" class="btn btn-link" style="color:white; margin:-2.5% 0; padding:0; font-size:9px;"> <i class="fas fa-thumbs-up"></i></button>
                                                                    <button id="dislike" type="button" class="btn btn-link" style="color:white; margin:-2.5% 0; padding:0; font-size:9px;"> <i class="fas fa-thumbs-down"></i></button>
                                                                    <button id="add-lista" type="button" class="btn btn-link" style="color:white; margin:-2.5% 0;padding:0; font-size:9px;"> <i class="fas fa-plus-circle"></i></button>       
                                                                </div>
                                                                <br><br><br>
                                                                <button id="despliegue" type="button" class="btn btn-link" style="color:white; margin-left:50%;padding:0; font-size:11px;"> <i class="fas fa-chevron-down"></i></button>
                                                                
                                                            </div>
                                                            <img src="img/series/outlander/1.jpg" id="img">`;
                                                            
            };
            
  

*/







//mostrar contenido
/*
$("#mostrar").click(function(){
var codigo = "codCat="+$("#cod-cat-1").val();
        
console.log(codigo);

                $.ajax({
                    
                    url: "ajax/contenido.php?accion='obtener-contenido'",
                    data:codigo,
                    dataType: "json",
                    method: "POST",
                    success: function(respuesta){

                        console.log(respuesta);
                        /*
                              for(var i=0; i<respuesta[0].CANTIDAD_CONTENIDO; i++){
                                $("#div-pantallas").append(
                                  '<div id="pantalla-'+ respuesta[i].CODIGO_PANTALLA +'">'+
                                    '<a href="Inicio.php"><img class="min-user" src="img/usr-1.png"></a>'+
                                    '<p class="white-text center-text mt-2 mr-3">'+ respuesta[i].NOMBRE_PANTALLA +'</p>'+
                                  '</div>'
                                );
                              }
                        
                             
                        
                            },
                            error: function(e){
                              console.log("Ocurrio un error!!!: " +e);
                            }
                        
                });

            });*/