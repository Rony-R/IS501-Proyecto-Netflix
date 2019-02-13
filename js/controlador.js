
$("#btn-icon0").click(function(){



/*funcion para los iconos del index
para ello encerrar el i y p en un a y darle la clase btn i asignarle el id btn-icono
ya dsps darle la funcionalidad de agregar o quitar el display

la funcion podria ser algo como:

funcion(id-del-contenido-a-ocultar/mostrar)

if(id==tal)

ocultar estos dos y mostrar el del id

y asi con los demas ids

*/

});

function contenidoIcono(idContenido){
    
    if(idContenido == "door-icon")
    {
        $("#" + idContenido).addClass("d-flex");
        $("#" + idContenido).removeClass("d-none");
        $("#tv-icon").addClass("d-none");
        $("#tag-icon").addClass("d-none");
        $("#tv-icon").removeClass("d-block");
        $("#tag-icon").removeClass("d-block");
    }
    else
    {
        if(idContenido == "tv-icon")
        {
            $("#" + idContenido).addClass("d-block");
            $("#door-icon").addClass("d-none");
            $("#tag-icon").addClass("d-none");
            $("#door-icon").removeClass("d-flex");
            $("#tag-icon").removeClass("d-block");
        }
        else
        {
            $("#" + idContenido).addClass("d-block");
            $("#door-icon").addClass("d-none");
            $("#tv-icon").addClass("d-none");
            $("#door-icon").removeClass("d-flex");
            $("#tv-icon").removeClass("d-block");
        }
    }
}

function contenidoIcono2(idContenido2){

    $("#" + idContenido2).addClass("d-flex");
    $("#tv-icon").addClass("d-none");
    $("#tag-icon").addClass("d-none");
    $("#tv-icon").removeClass("d-block");
    $("#tag-icon").removeClass("d-block");

}