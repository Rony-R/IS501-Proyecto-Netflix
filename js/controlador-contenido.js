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
    

});


