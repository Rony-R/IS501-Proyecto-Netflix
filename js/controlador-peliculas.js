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