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
    
//mostrar contenido

			var elemento=document.getElementById("c2");
			elemento.onmouseover = function(e) {
 
				// pelicula
 
                document.getElementById("cont2").innerHTML=`<div style="position:absolute; margin-top:18%; max-width:400px; padding:5px">
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
          /*      document.getElementById("cont2").innerHTML=`<div style="position:absolute; margin-top:25%; max-width:400px; padding:5px">
                                                                <p style="color:red; margin:-1.5% 0;"><i class="fas fa-play-circle" ></i></p>
                                                                <h6 id="nombre-contenido" style="margin:-2.5% 0;">Outlander</h6>
                                                                <p style="color:#38A454;text-shadow:2px gray; float:left; font-size:11px"><b>98% de coincidencia</b></p>
                                                                <div id="cat-edad" style="border:1px solid white; float:left; width:25px;font-size:10px; height:14px; margin-left:5px"><p>+16</p></div>
                                                                <p id="num-temp" style="font-size:9px; width:60px; float:left; margin-left:5px; padding-top:2px"><b></b>4 temporadas</p>
                                                            </div>
                                                            <img src="img/series/outlander/1.jpg" id="img">`;*/
                                                            
            };
            
            elemento.onmouseout = function(e) {
                $('#cont2').replaceWith(`<div class="inside-top"  id="cont2">
                                                    <img src="img/series/outlander/4.jpg" id="img">
                                                  </div>`);
			};




});


