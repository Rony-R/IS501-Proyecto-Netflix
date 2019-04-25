

$("#btn-tam-peq").click(function(){ 
    document.getElementById("lbl-tam-text").innerHTML= "Pequeño";  
    document.getElementById("div-text").style.fontSize = "10pt";
});
$("#btn-tam-med").click(function(){ 
    document.getElementById("lbl-tam-text").innerHTML= "Media";  
    document.getElementById("div-text").style.fontSize = "15pt";
});
$("#btn-tam-grand").click(function(){
    document.getElementById("lbl-tam-text").innerHTML= "Grande";  
    document.getElementById("div-text").style.fontSize = "20pt";

});


/*color fuente*/

$("#color-fuente-blanco").click(function(){
    document.getElementById("color-fuente").style.backgroundColor="#fff";
    document.getElementById("div-text").style.color = "#fff";
});

$("#color-fuente-negro").click(function(){
    document.getElementById("color-fuente").style.backgroundColor="#000";
    document.getElementById("div-text").style.color = "#000";
});

$("#color-fuente-rojo").click(function(){ 
    document.getElementById("color-fuente").style.backgroundColor="#c80000";
    document.getElementById("div-text").style.color = "#c80000";
});

$("#color-fuente-verde").click(function(){
    document.getElementById("color-fuente").style.backgroundColor="#00c800";
    document.getElementById("div-text").style.color = "#00c800";
});

$("#color-fuente-azul").click(function(){
    document.getElementById("color-fuente").style.backgroundColor="#0000c8";
    document.getElementById("div-text").style.color = "#0000c8";
});

$("#color-fuente-amarillo").click(function(){ 
    document.getElementById("color-fuente").style.backgroundColor="#eedc00";
    document.getElementById("div-text").style.color = "#eedc00";
});

$("#color-fuente-magenta").click(function(){ 
    document.getElementById("color-fuente").style.backgroundColor="#d60080";
    document.getElementById("div-text").style.color = "#d60080";
});

$("#color-fuente-azul-turquesa").click(function(){ 
    document.getElementById("color-fuente").style.backgroundColor="#009fda";
    document.getElementById("div-text").style.color = "#009fda";
});


/*color fuente*/

$("#color-sombra-blanco").click(function(){
    document.getElementById("color-sombra").style.backgroundColor="#fff";
    
});

$("#color-sombra-negro").click(function(){
    document.getElementById("color-sombra").style.backgroundColor="#000";

});

$("#color-sombra-rojo").click(function(){ 
    document.getElementById("color-sombra").style.backgroundColor="#c80000";

});

$("#color-sombra-verde").click(function(){
    document.getElementById("color-sombra").style.backgroundColor="#00c800";

});

$("#color-sombra-azul").click(function(){
    document.getElementById("color-sombra").style.backgroundColor="#0000c8";

});

$("#color-sombra-amarillo").click(function(){ 
    document.getElementById("color-sombra").style.backgroundColor="#eedc00";

});

$("#color-sombra-magenta").click(function(){ 
    document.getElementById("color-sombra").style.backgroundColor="#d60080";

});

$("#color-sombra-azul-turquesa").click(function(){ 
    document.getElementById("color-sombra").style.backgroundColor="#009fda";

});


/*color fuente*/

$("#color-fuente-blanco").click(function(){
    document.getElementById("color-fuente").style.backgroundColor="#fff";
    document.getElementById("div-text").style.color = "#fff";
});

$("#color-fuente-negro").click(function(){
    document.getElementById("color-fuente").style.backgroundColor="#000";
    document.getElementById("div-text").style.color = "#000";
});

$("#color-fuente-rojo").click(function(){ 
    document.getElementById("color-fuente").style.backgroundColor="#c80000";
    document.getElementById("div-text").style.color = "#c80000";
});

$("#color-fuente-verde").click(function(){
    document.getElementById("color-fuente").style.backgroundColor="#00c800";
    document.getElementById("div-text").style.color = "#00c800";
});

$("#color-fuente-azul").click(function(){
    document.getElementById("color-fuente").style.backgroundColor="#0000c8";
    document.getElementById("div-text").style.color = "#0000c8";
});

$("#color-fuente-amarillo").click(function(){ 
    document.getElementById("color-fuente").style.backgroundColor="#eedc00";
    document.getElementById("div-text").style.color = "#eedc00";
});

$("#color-fuente-magenta").click(function(){ 
    document.getElementById("color-fuente").style.backgroundColor="#d60080";
    document.getElementById("div-text").style.color = "#d60080";
});

$("#color-fuente-azul-turquesa").click(function(){ 
    document.getElementById("color-fuente").style.backgroundColor="#009fda";
    document.getElementById("div-text").style.color = "#009fda";
});


/*SOMBRA*/


$("#a-sombra-ninguna").click(function(){ 
    document.getElementById("div-text").style.textShadow = "transparent 0em 0em 0em";
    document.getElementById("dp-sombras").innerHTML = "Ninguno";

});

$("#a-sombra-paralela").click(function(){ 
    document.getElementById("dp-sombras").innerHTML = "Sombra paralela";
    var color = document.getElementById("color-sombra").style.backgroundColor;
    document.getElementById("div-text").style.textShadow =  color+" 0.1em 0.1em 0.2em"; 
});


$("#a-sombra-uniforme").click(function(){ 
    document.getElementById("dp-sombras").innerHTML = "Uniforme";
    var color_2 = document.getElementById("color-sombra").style.backgroundColor;
    document.getElementById("div-text").style.textShadow = "-1px 0 "+color_2+" , 0 1px "+color_2+" ,  1px 0 "+color_2+", 0 -1px "+color_2;
});





$("#color-sombra-blanco").click(function(){
    document.getElementById("color-sombra").style.backgroundColor="#fff";
    if(document.getElementById("dp-sombras").innerHTML == "Ninguno"){
        document.getElementById("div-text").style.textShadow ="transparent 0em 0em 0em";
    }
    if(document.getElementById("dp-sombras").innerHTML == "Sombra paralela"){
        document.getElementById("div-text").style.textShadow =  "#fff 0.1em 0.1em 0.2em";
    }
    if(document.getElementById("dp-sombras").innerHTML == "Uniforme"){
        document.getElementById("div-text").style.textShadow = "-1px 0 #fff , 0 1px #fff ,  1px 0 #fff, 0 -1px #fff ";
    }
  
});

$("#color-sombra-negro").click(function(){
    document.getElementById("color-sombra").style.backgroundColor="#000";
    if(document.getElementById("dp-sombras").innerHTML == "Ninguno"){
        document.getElementById("div-text").style.textShadow ="transparent 0em 0em 0em";
    }
    if(document.getElementById("dp-sombras").innerHTML == "Sombra paralela"){
        document.getElementById("div-text").style.textShadow =  "#000 0.1em 0.1em 0.2em";
    }
    if(document.getElementById("dp-sombras").innerHTML == "Uniforme"){
        document.getElementById("div-text").style.textShadow = "-1px 0 #000 , 0 1px #000 ,  1px 0 #000, 0 -1px #000";
    }

});

$("#color-sombra-rojo").click(function(){ 
    document.getElementById("color-sombra").style.backgroundColor="#c80000";
    if(document.getElementById("dp-sombras").innerHTML == "Ninguno"){
        document.getElementById("div-text").style.textShadow ="transparent 0em 0em 0em";
    }
    if(document.getElementById("dp-sombras").innerHTML == "Sombra paralela"){
        document.getElementById("div-text").style.textShadow =  "#c80000 0.1em 0.1em 0.2em";
    }
    if(document.getElementById("dp-sombras").innerHTML == "Uniforme"){
        document.getElementById("div-text").style.textShadow = "-1px 0 #c80000, 0 1px #c80000 ,  1px 0 #c80000, 0 -1px #c80000";
    }

});

$("#color-sombra-verde").click(function(){
    document.getElementById("color-sombra").style.backgroundColor="#00c800";
    if(document.getElementById("dp-sombras").innerHTML == "Ninguno"){
        document.getElementById("div-text").style.textShadow ="transparent 0em 0em 0em";
    }
    if(document.getElementById("dp-sombras").innerHTML == "Sombra paralela"){
        document.getElementById("div-text").style.textShadow =  "#00c800 0.1em 0.1em 0.2em";
    }
    if(document.getElementById("dp-sombras").innerHTML == "Uniforme"){
        document.getElementById("div-text").style.textShadow = "-1px 0 #00c800, 0 1px #00c800,  1px 0 #00c800, 0 -1px #00c800";
    }

});

$("#color-sombra-azul").click(function(){
    document.getElementById("color-sombra").style.backgroundColor="#0000c8";
    if(document.getElementById("dp-sombras").innerHTML == "Ninguno"){
        document.getElementById("div-text").style.textShadow ="transparent 0em 0em 0em";
    }
    if(document.getElementById("dp-sombras").innerHTML == "Sombra paralela"){
        document.getElementById("div-text").style.textShadow =  "#0000c8 0.1em 0.1em 0.2em";
    }
    if(document.getElementById("dp-sombras").innerHTML == "Uniforme"){
        document.getElementById("div-text").style.textShadow = "-1px 0 #0000c8, 0 1px #0000c8,  1px 0 #0000c8, 0 -1px #0000c8";
    }


});

$("#color-sombra-amarillo").click(function(){ 
    document.getElementById("color-sombra").style.backgroundColor="#eedc00";
    if(document.getElementById("dp-sombras").innerHTML == "Ninguno"){
        document.getElementById("div-text").style.textShadow ="transparent 0em 0em 0em";
    }
    if(document.getElementById("dp-sombras").innerHTML == "Sombra paralela"){
        document.getElementById("div-text").style.textShadow =  "#eedc00 0.1em 0.1em 0.2em";
    }
    if(document.getElementById("dp-sombras").innerHTML == "Uniforme"){
        document.getElementById("div-text").style.textShadow = "-1px 0 #eedc00, 0 1px #eedc00,  1px 0 #eedc00, 0 -1px #eedc00";
    }

});

$("#color-sombra-magenta").click(function(){ 
    document.getElementById("color-sombra").style.backgroundColor="#d60080";
    if(document.getElementById("dp-sombras").innerHTML == "Ninguno"){
        document.getElementById("div-text").style.textShadow ="transparent 0em 0em 0em";
    }
    if(document.getElementById("dp-sombras").innerHTML == "Sombra paralela"){
        document.getElementById("div-text").style.textShadow =  "#d60080 0.1em 0.1em 0.2em";
    }
    if(document.getElementById("dp-sombras").innerHTML == "Uniforme"){
        document.getElementById("div-text").style.textShadow = "-1px 0 #d60080, 0 1px #d60080,  1px 0 #d60080, 0 -1px #d60080";
    }


});

$("#color-sombra-azul-turquesa").click(function(){ 
    document.getElementById("color-sombra").style.backgroundColor="#009fda";
    if(document.getElementById("dp-sombras").innerHTML == "Ninguno"){
        document.getElementById("div-text").style.textShadow ="transparent 0em 0em 0em";
    }
    if(document.getElementById("dp-sombras").innerHTML == "Sombra paralela"){
        document.getElementById("div-text").style.textShadow =  "#009fda 0.1em 0.1em 0.2em";
    }
    if(document.getElementById("dp-sombras").innerHTML == "Uniforme"){
        document.getElementById("div-text").style.textShadow = "-1px 0 #009fda, 0 1px #009fda,  1px 0 #009fda, 0 -1px #009fda";
    }

});


/*Tipos Fuentes*/

$("#a-fuente-inconsolata").click(function(){ 
    document.getElementById("div-text").style.fontFamily ="inconsolata";
    document.getElementById("dp-fuentes").style.fontFamily ="inconsolata";
    document.getElementById("dp-fuentes").innerHTML ="Inconsolata";
});

$("#a-fuente-lora").click(function(){ 
    document.getElementById("div-text").style.fontFamily ="lora";
    document.getElementById("dp-fuentes").style.fontFamily ="lora";
    document.getElementById("dp-fuentes").innerHTML ="Lora";
});
$("#a-fuente-openSans").click(function(){ 
    document.getElementById("div-text").style.fontFamily ="openSans";
    document.getElementById("dp-fuentes").style.fontFamily ="openSans";
    document.getElementById("dp-fuentes").innerHTML ="OpenSans";
});
$("#a-fuente-oswald").click(function(){ 
    document.getElementById("div-text").style.fontFamily ="oswald";
    document.getElementById("dp-fuentes").style.fontFamily ="oswald";
    document.getElementById("dp-fuentes").innerHTML ="Oswald";
});
$("#a-fuente-slabo").click(function(){ 
    document.getElementById("div-text").style.fontFamily ="slabo";
    document.getElementById("dp-fuentes").style.fontFamily =="slabo";
    document.getElementById("dp-fuentes").innerHTML ="Slabo";
});
$("#a-fuente-staatliche").click(function(){ 
    document.getElementById("div-text").style.fontFamily ="staatliche";
    document.getElementById("dp-fuentes").style.fontFamily = "staatliche";
    document.getElementById("dp-fuentes").innerHTML ="Staatliche";
});



/*color fondo */
$("#color-fondo-ninguno").click(function(){ 
    document.getElementById("color-fondo").style.backgroundColor="transparent";
    document.getElementById("span-text").style.backgroundColor ="transparent";
});

$("#color-fondo-blanco").click(function(){
    document.getElementById("color-fondo").style.backgroundColor="#fff";
    document.getElementById("span-text").style.backgroundColor ="#fff";
    
});

$("#color-fondo-negro").click(function(){
    document.getElementById("color-fondo").style.backgroundColor="#000";
    document.getElementById("span-text").style.backgroundColor ="#000";
});

$("#color-fondo-rojo").click(function(){ 
    document.getElementById("color-fondo").style.backgroundColor="#c80000";
    document.getElementById("span-text").style.backgroundColor ="#c80000";

});

$("#color-fondo-verde").click(function(){
    document.getElementById("color-fondo").style.backgroundColor="#00c800";
    document.getElementById("span-text").style.backgroundColor ="#00c800";

});

$("#color-fondo-azul").click(function(){
    document.getElementById("color-fondo").style.backgroundColor="#0000c8";
    document.getElementById("span-text").style.backgroundColor="#0000c8";

});

$("#color-fondo-amarillo").click(function(){ 
    document.getElementById("color-fondo").style.backgroundColor="#eedc00";
    document.getElementById("span-text").style.backgroundColor="#eedc00";

});

$("#color-fondo-magenta").click(function(){ 
    document.getElementById("color-fondo").style.backgroundColor="#d60080";
    document.getElementById("span-text").style.backgroundColor="#d60080";

});

$("#color-fondo-azul-turquesa").click(function(){ 
    document.getElementById("color-fondo").style.backgroundColor="#009fda";
    document.getElementById("span-text").style.backgroundColor="#009fda";

});


/*color ventana */
$("#color-ventana-ninguno").click(function(){ 
    document.getElementById("color-ventana").style.backgroundColor="transparent";
    document.getElementById("div-ventana-text").style.backgroundColor = "transparent";

});

$("#color-ventana-blanco").click(function(){
    document.getElementById("color-ventana").style.backgroundColor="#fff";
    document.getElementById("div-ventana-text").style.backgroundColor="#fff";
  
    
});

$("#color-ventana-negro").click(function(){
    document.getElementById("color-ventana").style.backgroundColor="#000";
    document.getElementById("div-ventana-text").style.backgroundColor = "#000";

});

$("#color-ventana-rojo").click(function(){ 
    document.getElementById("color-ventana").style.backgroundColor="#c80000";
    document.getElementById("div-ventana-text").style.backgroundColor = "#c80000";

});

$("#color-ventana-verde").click(function(){
    document.getElementById("color-ventana").style.backgroundColor="#00c800";
    document.getElementById("div-ventana-text").style.backgroundColor = "#00c800";

});

$("#color-ventana-azul").click(function(){
    document.getElementById("color-ventana").style.backgroundColor="#0000c8";
    document.getElementById("div-ventana-text").style.backgroundColor = "#0000c8";

});

$("#color-ventana-amarillo").click(function(){ 
    document.getElementById("color-ventana").style.backgroundColor="#eedc00";
    document.getElementById("div-ventana-text").style.backgroundColor = "#eedc00";

});

$("#color-ventana-magenta").click(function(){ 
    document.getElementById("color-ventana").style.backgroundColor="#d60080";
    document.getElementById("div-ventana-text").style.backgroundColor = "#d60080";

});

$("#color-ventana-azul-turquesa").click(function(){ 
    document.getElementById("color-ventana").style.backgroundColor="#009fda";
    document.getElementById("div-ventana-text").style.backgroundColor = "#009fda";
});

