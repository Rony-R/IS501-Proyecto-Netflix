$(document).ready(function(){
//peliculas
$('#portada-peliculas').click(function() {
    $('#portada-peliculas').replaceWith('<video autoplay id="video-portada3" src="img/peliculas/bird/bird.mp4#t=113.5,155" width="100%" height="770px" style="position:absolute"></video>');
    document.getElementById('texto1').innerHTML = `<div style="height:190px"> </div>`;
});

setInterval(function(){
    $('#video-portada3').replaceWith('<img id="portada-peliculas" src="img/peliculas/bird/5.jpg" style="width:100%; height:800px; position:absolute">')
    $('#texto1').replaceWith('<div id="texto1"><p style="text-align : justify;">Los sobrevivientes de un planeta diezmado deben evitar encontrarse cara a cara con una entidad que toma la forma de sus peores temores y los mata.</p></div>')
},44500);

});

 
//mostrar contenido categoria 1

        
var codigo = "codCat="+$("#cod-cat-1").val();
                
console.log(codigo);

                $.ajax({
                    
                    url: "ajax/contenido.php?accion='obtener-contenido2'",
                    data:codigo,
                    dataType: "json",
                    method: "POST",
                    success: function(respuesta){

                        console.log(respuesta);
                 //       <video autoplay controls src="${respuesta[i].URL_VIDEO}"></video>

                            for(var i=0; i<respuesta[0].CANTIDAD_CONTENIDO; i++){
                               
                                console.log(respuesta[i].URL_VIDEO)

                                $("#content").append(`
                                    <li class="card"  id="card-${respuesta[i].CODIGO_CONTENIDO}" value="${respuesta[i].URL_VIDEO}"><!--<a href="reproducir-video.html" style="color:white">-->
                                    <div class="inside-top"  id="detalle${respuesta[i].CODIGO_CONTENIDO}" >
                                        <img src="${respuesta[i].URL_MINIATURA}" id="img">
                                        <button id="reproducir" type="button" class="btn btn-link" style="color:red; margin:-1.5% 0;padding:0; font-size:14px;" value="${respuesta[i].URL_VIDEO}"> <i class="fas fa-play-circle" ></i></button>
                                    </div>
                                    </li> 
                                `);
                            

                               var video = $("#card-"+respuesta[i].CODIGO_CONTENIDO); 
                               var url = $("#card-"+respuesta[i].CODIGO_CONTENIDO).val();

                               video.click(function() {   
                                                                                            
                                  console.log(url);
                                /* $("#prueba").html(`
                                    <video autoplay controls src="${url}" style="position:absolute; heigth:100%; width:100%"></video>
                                   `);*/
                                });
                         
                                 

                                if (respuesta[i].CODIGO_TIPO_CONTENIDO = 1) {
                                    
                                    $("#detalle"+respuesta[i].CODIGO_CONTENIDO).html(`<div style="position:absolute; margin-top:18%; max-width:400px; padding:5px">
                                                                                                                <div style="float:left; width:200px"> 
                                                                                                        <!--       <button id="reproducir" type="button" class="btn btn-link" style="color:red; margin:-1.5% 0;padding:0; font-size:14px;" value="${respuesta[i].URL_VIDEO}"> <i class="fas fa-play-circle" ></i></button>
                                                                                                                <a href="reproducir-video.html"style="color:red; margin:-1.5% 0;padding:0; font-size:14px;"><i class="fas fa-play-circle" ></i></a>   
                                                                                                                <h6 id="nombre-contenido" style="margin:-2.5% 0;">${respuesta[i].NOMBRE_CONTENIDO}</h6>
                                                                                                                    <p style="color:#38A454;text-shadow:2px gray; float:left; font-size:11px"><b>98% de coincidencia</b></p>
                                                                                                                    <div id="cat-edad" style="border:1px solid white; float:left; width:25px;font-size:10px; height:14px; margin-left:5px;padding-bottom:3px; text-align:center"><p>${respuesta[i].NOMBRE_CALIF}</p></div>
                                                                                                                    <p id="duracion" style="font-size:9px; width:40px; float:left; margin-left:5px; padding-top:2px"><b>${respuesta[i].DURACION_PELI} min</b></p>
                                                                                                                <!--   <p id="generos" style="font-size:10px ;float:left;margin:-1.5% 0;">genero1 • genero2 • genero3</p>-->
                                                                                                                </div>
                                                                                                                    <div style="width:15px; height:25px; float:left; margin:15px 0 0 15px">
                                                                                                                        <button id="like" type="button" class="btn btn-link" style="color:white; margin:-2.5% 0; padding:0; font-size:9px;"> <i class="fas fa-thumbs-up"></i></button>
                                                                                                                        <button id="dislike" type="button" class="btn btn-link" style="color:white; margin:-2.5% 0; padding:0; font-size:9px;"> <i class="fas fa-thumbs-down"></i></button>
                                                                                                                        <button id="add-lista" type="button" class="btn btn-link" style="color:white; margin:-2.5% 0;padding:0; font-size:9px;"> <i class="fas fa-plus-circle"></i></button>       
                                                                                                                    </div>
                                                                                                                    <br><br><br>
                                                                                                                    <button id="despliegue" type="button" class="btn btn-link" style="color:white; margin-left:50%;padding:0; font-size:11px;"> <i class="fas fa-chevron-down"></i></button>
                                                                                                                    
                                                                                                                </div>
                                                                                                                <img src="${respuesta[i].URL_MINIATURA}" id="img">`);
                                                
                                                
                                }
          
                            }

                    },
                    error: function(e){
                    console.log("Ocurrio un error!!!: " +e);
                    }
                
                });
                

//mostrar contenido categoria 2


var codigo2 = "codCat="+$("#cod-cat-2").val();

       
console.log(codigo2);

        $.ajax({
            
            url: "ajax/contenido.php?accion='obtener-contenido2'",
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
                        if (respuesta[i].CODIGO_TIPO_CONTENIDO = 1) {
                            document.getElementById("detalle"+respuesta[i].CODIGO_CONTENIDO).innerHTML=`<div style="position:absolute; margin-top:18%; max-width:400px; padding:5px">
                                                                                            <div style="float:left; width:200px"> 
                                                                                            <button id="add-lista" type="button" class="btn btn-link" style="color:red; margin:-1.5% 0;padding:0; font-size:14px;"> <i class="fas fa-play-circle" ></i></i></button>
                                                                                                <h6 id="nombre-contenido" style="margin:-2.5% 0;">${respuesta[i].NOMBRE_CONTENIDO}</h6>
                                                                                                <p style="color:#38A454;text-shadow:2px gray; float:left; font-size:11px"><b>98% de coincidencia</b></p>
                                                                                                <div id="cat-edad" style="border:1px solid white; float:left; width:25px;font-size:10px; height:14px; margin-left:5px;padding-bottom:3px; text-align:center"><p>${respuesta[i].NOMBRE_CALIF}</p></div>
                                                                                                <p id="duracion" style="font-size:9px; width:40px; float:left; margin-left:5px; padding-top:2px"><b>${respuesta[i].DURACION_PELI} min</b></p>
                                                                                             <!--   <p id="generos" style="font-size:10px ;float:left;margin:-1.5% 0;">genero1 • genero2 • genero3</p>-->
                                                                                            </div>
                                                                                                <div style="width:15px; height:25px; float:left; margin:15px 0 0 15px">
                                                                                                    <button id="like" type="button" class="btn btn-link" style="color:white; margin:-2.5% 0; padding:0; font-size:9px;"> <i class="fas fa-thumbs-up"></i></button>
                                                                                                    <button id="dislike" type="button" class="btn btn-link" style="color:white; margin:-2.5% 0; padding:0; font-size:9px;"> <i class="fas fa-thumbs-down"></i></button>
                                                                                                    <button id="add-lista" type="button" class="btn btn-link" style="color:white; margin:-2.5% 0;padding:0; font-size:9px;"> <i class="fas fa-plus-circle"></i></button>       
                                                                                                </div>
                                                                                                <br><br><br>
                                                                                                <button id="despliegue" type="button" class="btn btn-link" style="color:white; margin-left:50%;padding:0; font-size:11px;"> <i class="fas fa-chevron-down"></i></button>
                                                                                                
                                                                                            </div>
                                                                                            <img src="${respuesta[i].URL_MINIATURA}" id="img">`;
                        }
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
            
            url: "ajax/contenido.php?accion='obtener-contenido2'",
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
                        if (respuesta[i].CODIGO_TIPO_CONTENIDO = 1) {
                            document.getElementById("detalle"+respuesta[i].CODIGO_CONTENIDO).innerHTML=`<div style="position:absolute; margin-top:18%; max-width:400px; padding:5px">
                                                                                            <div style="float:left; width:200px"> 
                                                                                            <button id="add-lista" type="button" class="btn btn-link" style="color:red; margin:-1.5% 0;padding:0; font-size:14px;"> <i class="fas fa-play-circle" ></i></i></button>
                                                                                                <h6 id="nombre-contenido" style="margin:-2.5% 0;">${respuesta[i].NOMBRE_CONTENIDO}</h6>
                                                                                                <p style="color:#38A454;text-shadow:2px gray; float:left; font-size:11px"><b>98% de coincidencia</b></p>
                                                                                                <div id="cat-edad" style="border:1px solid white; float:left; width:25px;font-size:10px; height:14px; margin-left:5px;padding-bottom:3px; text-align:center"><p>${respuesta[i].NOMBRE_CALIF}</p></div>
                                                                                                <p id="duracion" style="font-size:9px; width:40px; float:left; margin-left:5px; padding-top:2px"><b>${respuesta[i].DURACION_PELI} min</b></p>
                                                                                             <!--   <p id="generos" style="font-size:10px ;float:left;margin:-1.5% 0;">genero1 • genero2 • genero3</p>-->
                                                                                            </div>
                                                                                                <div style="width:15px; height:25px; float:left; margin:15px 0 0 15px">
                                                                                                    <button id="like" type="button" class="btn btn-link" style="color:white; margin:-2.5% 0; padding:0; font-size:9px;"> <i class="fas fa-thumbs-up"></i></button>
                                                                                                    <button id="dislike" type="button" class="btn btn-link" style="color:white; margin:-2.5% 0; padding:0; font-size:9px;"> <i class="fas fa-thumbs-down"></i></button>
                                                                                                    <button id="add-lista" type="button" class="btn btn-link" style="color:white; margin:-2.5% 0;padding:0; font-size:9px;"> <i class="fas fa-plus-circle"></i></button>       
                                                                                                </div>
                                                                                                <br><br><br>
                                                                                                <button id="despliegue" type="button" class="btn btn-link" style="color:white; margin-left:50%;padding:0; font-size:11px;"> <i class="fas fa-chevron-down"></i></button>
                                                                                                
                                                                                            </div>
                                                                                            <img src="${respuesta[i].URL_MINIATURA}" id="img">`;
                        }
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
            
            url: "ajax/contenido.php?accion='obtener-contenido2'",
            data:codigo4,
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
                        if (respuesta[i].CODIGO_TIPO_CONTENIDO = 1) {
                            document.getElementById("detalle"+respuesta[i].CODIGO_CONTENIDO).innerHTML=`<div style="position:absolute; margin-top:18%; max-width:400px; padding:5px">
                                                                                            <div style="float:left; width:200px"> 
                                                                                            <button id="add-lista" type="button" class="btn btn-link" style="color:red; margin:-1.5% 0;padding:0; font-size:14px;"> <i class="fas fa-play-circle" ></i></i></button>
                                                                                                <h6 id="nombre-contenido" style="margin:-2.5% 0;">${respuesta[i].NOMBRE_CONTENIDO}</h6>
                                                                                                <p style="color:#38A454;text-shadow:2px gray; float:left; font-size:11px"><b>98% de coincidencia</b></p>
                                                                                                <div id="cat-edad" style="border:1px solid white; float:left; width:25px;font-size:10px; height:14px; margin-left:5px;padding-bottom:3px; text-align:center"><p>${respuesta[i].NOMBRE_CALIF}</p></div>
                                                                                                <p id="duracion" style="font-size:9px; width:40px; float:left; margin-left:5px; padding-top:2px"><b>${respuesta[i].DURACION_PELI} min</b></p>
                                                                                             <!--   <p id="generos" style="font-size:10px ;float:left;margin:-1.5% 0;">genero1 • genero2 • genero3</p>-->
                                                                                            </div>
                                                                                                <div style="width:15px; height:25px; float:left; margin:15px 0 0 15px">
                                                                                                    <button id="like" type="button" class="btn btn-link" style="color:white; margin:-2.5% 0; padding:0; font-size:9px;"> <i class="fas fa-thumbs-up"></i></button>
                                                                                                    <button id="dislike" type="button" class="btn btn-link" style="color:white; margin:-2.5% 0; padding:0; font-size:9px;"> <i class="fas fa-thumbs-down"></i></button>
                                                                                                    <button id="add-lista" type="button" class="btn btn-link" style="color:white; margin:-2.5% 0;padding:0; font-size:9px;"> <i class="fas fa-plus-circle"></i></button>       
                                                                                                </div>
                                                                                                <br><br><br>
                                                                                                <button id="despliegue" type="button" class="btn btn-link" style="color:white; margin-left:50%;padding:0; font-size:11px;"> <i class="fas fa-chevron-down"></i></button>
                                                                                                
                                                                                            </div>
                                                                                            <img src="${respuesta[i].URL_MINIATURA}" id="img">`;
                        }
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
            
            url: "ajax/contenido.php?accion='obtener-contenido2'",
            data:codigo5,
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
                        if (respuesta[i].CODIGO_TIPO_CONTENIDO = 1) {
                            document.getElementById("detalle"+respuesta[i].CODIGO_CONTENIDO).innerHTML=`<div style="position:absolute; margin-top:18%; max-width:400px; padding:5px">
                                                                                            <div style="float:left; width:200px"> 
                                                                                            <button id="add-lista" type="button" class="btn btn-link" style="color:red; margin:-1.5% 0;padding:0; font-size:14px;"> <i class="fas fa-play-circle" ></i></i></button>
                                                                                                <h6 id="nombre-contenido" style="margin:-2.5% 0;">${respuesta[i].NOMBRE_CONTENIDO}</h6>
                                                                                                <p style="color:#38A454;text-shadow:2px gray; float:left; font-size:11px"><b>98% de coincidencia</b></p>
                                                                                                <div id="cat-edad" style="border:1px solid white; float:left; width:25px;font-size:10px; height:14px; margin-left:5px;padding-bottom:3px; text-align:center"><p>${respuesta[i].NOMBRE_CALIF}</p></div>
                                                                                                <p id="duracion" style="font-size:9px; width:40px; float:left; margin-left:5px; padding-top:2px"><b>${respuesta[i].DURACION_PELI} min</b></p>
                                                                                             <!--   <p id="generos" style="font-size:10px ;float:left;margin:-1.5% 0;">genero1 • genero2 • genero3</p>-->
                                                                                            </div>
                                                                                                <div style="width:15px; height:25px; float:left; margin:15px 0 0 15px">
                                                                                                    <button id="like" type="button" class="btn btn-link" style="color:white; margin:-2.5% 0; padding:0; font-size:9px;"> <i class="fas fa-thumbs-up"></i></button>
                                                                                                    <button id="dislike" type="button" class="btn btn-link" style="color:white; margin:-2.5% 0; padding:0; font-size:9px;"> <i class="fas fa-thumbs-down"></i></button>
                                                                                                    <button id="add-lista" type="button" class="btn btn-link" style="color:white; margin:-2.5% 0;padding:0; font-size:9px;"> <i class="fas fa-plus-circle"></i></button>       
                                                                                                </div>
                                                                                                <br><br><br>
                                                                                                <button id="despliegue" type="button" class="btn btn-link" style="color:white; margin-left:50%;padding:0; font-size:11px;"> <i class="fas fa-chevron-down"></i></button>
                                                                                                
                                                                                            </div>
                                                                                            <img src="${respuesta[i].URL_MINIATURA}" id="img">`;
                        }
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
            
            url: "ajax/contenido.php?accion='obtener-contenido2'",
            data:codigo6,
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
                        if (respuesta[i].CODIGO_TIPO_CONTENIDO = 1) {
                            document.getElementById("detalle"+respuesta[i].CODIGO_CONTENIDO).innerHTML=`<div style="position:absolute; margin-top:18%; max-width:400px; padding:5px">
                                                                                            <div style="float:left; width:200px"> 
                                                                                            <button id="add-lista" type="button" class="btn btn-link" style="color:red; margin:-1.5% 0;padding:0; font-size:14px;"> <i class="fas fa-play-circle" ></i></i></button>
                                                                                                <h6 id="nombre-contenido" style="margin:-2.5% 0;">${respuesta[i].NOMBRE_CONTENIDO}</h6>
                                                                                                <p style="color:#38A454;text-shadow:2px gray; float:left; font-size:11px"><b>98% de coincidencia</b></p>
                                                                                                <div id="cat-edad" style="border:1px solid white; float:left; width:25px;font-size:10px; height:14px; margin-left:5px;padding-bottom:3px; text-align:center"><p>${respuesta[i].NOMBRE_CALIF}</p></div>
                                                                                                <p id="duracion" style="font-size:9px; width:40px; float:left; margin-left:5px; padding-top:2px"><b>${respuesta[i].DURACION_PELI} min</b></p>
                                                                                             <!--   <p id="generos" style="font-size:10px ;float:left;margin:-1.5% 0;">genero1 • genero2 • genero3</p>-->
                                                                                            </div>
                                                                                                <div style="width:15px; height:25px; float:left; margin:15px 0 0 15px">
                                                                                                    <button id="like" type="button" class="btn btn-link" style="color:white; margin:-2.5% 0; padding:0; font-size:9px;"> <i class="fas fa-thumbs-up"></i></button>
                                                                                                    <button id="dislike" type="button" class="btn btn-link" style="color:white; margin:-2.5% 0; padding:0; font-size:9px;"> <i class="fas fa-thumbs-down"></i></button>
                                                                                                    <button id="add-lista" type="button" class="btn btn-link" style="color:white; margin:-2.5% 0;padding:0; font-size:9px;"> <i class="fas fa-plus-circle"></i></button>       
                                                                                                </div>
                                                                                                <br><br><br>
                                                                                                <button id="despliegue" type="button" class="btn btn-link" style="color:white; margin-left:50%;padding:0; font-size:11px;"> <i class="fas fa-chevron-down"></i></button>
                                                                                                
                                                                                            </div>
                                                                                            <img src="${respuesta[i].URL_MINIATURA}" id="img">`;
                        }
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
            
            url: "ajax/contenido.php?accion='obtener-contenido2'",
            data:codigo7,
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
                        if (respuesta[i].CODIGO_TIPO_CONTENIDO = 1) {
                            document.getElementById("detalle"+respuesta[i].CODIGO_CONTENIDO).innerHTML=`<div style="position:absolute; margin-top:18%; max-width:400px; padding:5px">
                                                                                            <div style="float:left; width:200px"> 
                                                                                            <button id="add-lista" type="button" class="btn btn-link" style="color:red; margin:-1.5% 0;padding:0; font-size:14px;"> <i class="fas fa-play-circle" ></i></i></button>
                                                                                                <h6 id="nombre-contenido" style="margin:-2.5% 0;">${respuesta[i].NOMBRE_CONTENIDO}</h6>
                                                                                                <p style="color:#38A454;text-shadow:2px gray; float:left; font-size:11px"><b>98% de coincidencia</b></p>
                                                                                                <div id="cat-edad" style="border:1px solid white; float:left; width:25px;font-size:10px; height:14px; margin-left:5px;padding-bottom:3px; text-align:center"><p>${respuesta[i].NOMBRE_CALIF}</p></div>
                                                                                                <p id="duracion" style="font-size:9px; width:40px; float:left; margin-left:5px; padding-top:2px"><b>${respuesta[i].DURACION_PELI} min</b></p>
                                                                                             <!--   <p id="generos" style="font-size:10px ;float:left;margin:-1.5% 0;">genero1 • genero2 • genero3</p>-->
                                                                                            </div>
                                                                                                <div style="width:15px; height:25px; float:left; margin:15px 0 0 15px">
                                                                                                    <button id="like" type="button" class="btn btn-link" style="color:white; margin:-2.5% 0; padding:0; font-size:9px;"> <i class="fas fa-thumbs-up"></i></button>
                                                                                                    <button id="dislike" type="button" class="btn btn-link" style="color:white; margin:-2.5% 0; padding:0; font-size:9px;"> <i class="fas fa-thumbs-down"></i></button>
                                                                                                    <button id="add-lista" type="button" class="btn btn-link" style="color:white; margin:-2.5% 0;padding:0; font-size:9px;"> <i class="fas fa-plus-circle"></i></button>       
                                                                                                </div>
                                                                                                <br><br><br>
                                                                                                <button id="despliegue" type="button" class="btn btn-link" style="color:white; margin-left:50%;padding:0; font-size:11px;"> <i class="fas fa-chevron-down"></i></button>
                                                                                                
                                                                                            </div>
                                                                                            <img src="${respuesta[i].URL_MINIATURA}" id="img">`;
                        }
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
            
            url: "ajax/contenido.php?accion='obtener-contenido2'",
            data:codigo8,
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
                        if (respuesta[i].CODIGO_TIPO_CONTENIDO = 1) {
                            document.getElementById("detalle"+respuesta[i].CODIGO_CONTENIDO).innerHTML=`<div style="position:absolute; margin-top:18%; max-width:400px; padding:5px">
                                                                                            <div style="float:left; width:200px"> 
                                                                                            <button id="add-lista" type="button" class="btn btn-link" style="color:red; margin:-1.5% 0;padding:0; font-size:14px;"> <i class="fas fa-play-circle" ></i></i></button>
                                                                                                <h6 id="nombre-contenido" style="margin:-2.5% 0;">${respuesta[i].NOMBRE_CONTENIDO}</h6>
                                                                                                <p style="color:#38A454;text-shadow:2px gray; float:left; font-size:11px"><b>98% de coincidencia</b></p>
                                                                                                <div id="cat-edad" style="border:1px solid white; float:left; width:25px;font-size:10px; height:14px; margin-left:5px;padding-bottom:3px; text-align:center"><p>${respuesta[i].NOMBRE_CALIF}</p></div>
                                                                                                <p id="duracion" style="font-size:9px; width:40px; float:left; margin-left:5px; padding-top:2px"><b>${respuesta[i].DURACION_PELI} min</b></p>
                                                                                             <!--   <p id="generos" style="font-size:10px ;float:left;margin:-1.5% 0;">genero1 • genero2 • genero3</p>-->
                                                                                            </div>
                                                                                                <div style="width:15px; height:25px; float:left; margin:15px 0 0 15px">
                                                                                                    <button id="like" type="button" class="btn btn-link" style="color:white; margin:-2.5% 0; padding:0; font-size:9px;"> <i class="fas fa-thumbs-up"></i></button>
                                                                                                    <button id="dislike" type="button" class="btn btn-link" style="color:white; margin:-2.5% 0; padding:0; font-size:9px;"> <i class="fas fa-thumbs-down"></i></button>
                                                                                                    <button id="add-lista" type="button" class="btn btn-link" style="color:white; margin:-2.5% 0;padding:0; font-size:9px;"> <i class="fas fa-plus-circle"></i></button>       
                                                                                                </div>
                                                                                                <br><br><br>
                                                                                                <button id="despliegue" type="button" class="btn btn-link" style="color:white; margin-left:50%;padding:0; font-size:11px;"> <i class="fas fa-chevron-down"></i></button>
                                                                                                
                                                                                            </div>
                                                                                            <img src="${respuesta[i].URL_MINIATURA}" id="img">`;
                        }
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
            
            url: "ajax/contenido.php?accion='obtener-contenido2'",
            data:codigo9,
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

                        if (respuesta[i].CODIGO_TIPO_CONTENIDO = 1) {
                            document.getElementById("detalle"+respuesta[i].CODIGO_CONTENIDO).innerHTML=`<div style="position:absolute; margin-top:18%; max-width:400px; padding:5px">
                                                                                            <div style="float:left; width:200px"> 
                                                                                            <button id="add-lista" type="button" class="btn btn-link" style="color:red; margin:-1.5% 0;padding:0; font-size:14px;"> <i class="fas fa-play-circle" ></i></i></button>
                                                                                                <h6 id="nombre-contenido" style="margin:-2.5% 0;">${respuesta[i].NOMBRE_CONTENIDO}</h6>
                                                                                                <p style="color:#38A454;text-shadow:2px gray; float:left; font-size:11px"><b>98% de coincidencia</b></p>
                                                                                                <div id="cat-edad" style="border:1px solid white; float:left; width:25px;font-size:10px; height:14px; margin-left:5px;padding-bottom:3px; text-align:center"><p>${respuesta[i].NOMBRE_CALIF}</p></div>
                                                                                                <p id="duracion" style="font-size:9px; width:40px; float:left; margin-left:5px; padding-top:2px"><b>${respuesta[i].DURACION_PELI} min</b></p>
                                                                                             <!--   <p id="generos" style="font-size:10px ;float:left;margin:-1.5% 0;">genero1 • genero2 • genero3</p>-->
                                                                                            </div>
                                                                                                <div style="width:15px; height:25px; float:left; margin:15px 0 0 15px">
                                                                                                    <button id="like" type="button" class="btn btn-link" style="color:white; margin:-2.5% 0; padding:0; font-size:9px;"> <i class="fas fa-thumbs-up"></i></button>
                                                                                                    <button id="dislike" type="button" class="btn btn-link" style="color:white; margin:-2.5% 0; padding:0; font-size:9px;"> <i class="fas fa-thumbs-down"></i></button>
                                                                                                    <button id="add-lista" type="button" class="btn btn-link" style="color:white; margin:-2.5% 0;padding:0; font-size:9px;"> <i class="fas fa-plus-circle"></i></button>       
                                                                                                </div>
                                                                                                <br><br><br>
                                                                                                <button id="despliegue" type="button" class="btn btn-link" style="color:white; margin-left:50%;padding:0; font-size:11px;"> <i class="fas fa-chevron-down"></i></button>
                                                                                                
                                                                                            </div>
                                                                                            <img src="${respuesta[i].URL_MINIATURA}" id="img">`;
                        }
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
            
            url: "ajax/contenido.php?accion='obtener-contenido2'",
            data:codigo10,
            dataType: "json",
            method: "POST",
            success: function(respuesta){

                console.log(respuesta);
                
                    for(var i=0; i<respuesta[0].CANTIDAD_CONTENIDO; i++){
                        $("#content12").append(`
                            <li class="card"  id="card-${respuesta[i].CODIGO_CONTENIDO}">
                            <div class="inside-top"  id="detalle${respuesta[i].CODIGO_CONTENIDO}" >
                            <img src="${respuesta[i].URL_MINIATURA}" id="img">
                            </div>
                            </li> 
                        `);
                        if (respuesta[i].CODIGO_TIPO_CONTENIDO = 1) {
                            document.getElementById("detalle"+respuesta[i].CODIGO_CONTENIDO).innerHTML=`<div style="position:absolute; margin-top:18%; max-width:400px; padding:5px">
                                                                                            <div style="float:left; width:200px"> 
                                                                                            <button id="add-lista" type="button" class="btn btn-link" style="color:red; margin:-1.5% 0;padding:0; font-size:14px;"> <i class="fas fa-play-circle" ></i></i></button>
                                                                                                <h6 id="nombre-contenido" style="margin:-2.5% 0;">${respuesta[i].NOMBRE_CONTENIDO}</h6>
                                                                                                <p style="color:#38A454;text-shadow:2px gray; float:left; font-size:11px"><b>98% de coincidencia</b></p>
                                                                                                <div id="cat-edad" style="border:1px solid white; float:left; width:25px;font-size:10px; height:14px; margin-left:5px;padding-bottom:3px; text-align:center"><p>${respuesta[i].NOMBRE_CALIF}</p></div>
                                                                                                <p id="duracion" style="font-size:9px; width:40px; float:left; margin-left:5px; padding-top:2px"><b>${respuesta[i].DURACION_PELI} min</b></p>
                                                                                             <!--   <p id="generos" style="font-size:10px ;float:left;margin:-1.5% 0;">genero1 • genero2 • genero3</p>-->
                                                                                            </div>
                                                                                                <div style="width:15px; height:25px; float:left; margin:15px 0 0 15px">
                                                                                                    <button id="like" type="button" class="btn btn-link" style="color:white; margin:-2.5% 0; padding:0; font-size:9px;"> <i class="fas fa-thumbs-up"></i></button>
                                                                                                    <button id="dislike" type="button" class="btn btn-link" style="color:white; margin:-2.5% 0; padding:0; font-size:9px;"> <i class="fas fa-thumbs-down"></i></button>
                                                                                                    <button id="add-lista" type="button" class="btn btn-link" style="color:white; margin:-2.5% 0;padding:0; font-size:9px;"> <i class="fas fa-plus-circle"></i></button>       
                                                                                                </div>
                                                                                                <br><br><br>
                                                                                                <button id="despliegue" type="button" class="btn btn-link" style="color:white; margin-left:50%;padding:0; font-size:11px;"> <i class="fas fa-chevron-down"></i></button>
                                                                                                
                                                                                            </div>
                                                                                            <img src="${respuesta[i].URL_MINIATURA}" id="img">`;
                        }
                    }
                                    
                    
                
            },
            error: function(e){
            console.log("Ocurrio un error!!!: " +e);
            }
        
});

///////////////////////////////////////////////////////////////////////////////////////////////////////////////
