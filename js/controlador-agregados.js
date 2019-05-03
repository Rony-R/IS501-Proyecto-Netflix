$(document).ready(function(){
//agregados recientemente
$('#portada-agregados').click(function() {
    $('#portada-agregados').replaceWith('<video autoplay id="video-portada4" src="img/series/saul/saul.mp4#t=90,110.95" width="100%" height="770px" style="position:absolute"></video>');
    document.getElementById('texto1').innerHTML = `<div style="height:90px"> </div>`;
});

setInterval(function(){
    $('#video-portada4').replaceWith('<img id="portada-agregados" src="img/series/saul/2.jpg" style="width:100%; height:800px; position:absolute">')
    $('#texto1').replaceWith('<div id="texto1"><h5><b>Ver la temporada 1</b></h5><p style="text-align : justify;">Antes de convertirse en Saul Goodman, fue Jimmy McGill. Y si lo llamas es porque estás en serios problemas.</p></div>')
},22000);

});
