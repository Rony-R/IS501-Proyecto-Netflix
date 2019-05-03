$(document).ready(function(){
//series
$('#portada-series').click(function() {
    $('#portada-series').replaceWith('<video autoplay id="video-portada2" src="img/series/umbrella/umbrella.mp4#t=39.7,118" width="100%" height="770px" style="position:absolute"></video>');
    document.getElementById('texto1').innerHTML = `<div style="height:180px"> </div>`;
});

setInterval(function(){
    $('#video-portada2').replaceWith('<img id="portada-series" src="img/series/umbrella/3.jpg" style="width:100%; height:800px; position:absolute">')
    $('#texto1').replaceWith('<div id="texto1"><h5><b>Ver la temporada 1</b></h5><p style="text-align : justify;">Una familia disfuncional de superhéroes se reúne para resolver el misterio de la muerte de su padre y la amenaza del apocalipsis.</p></div>')
},80500);
});