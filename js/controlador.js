
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

$("#btn-iniciar-sesion").click(function(){
    window.location.href="sesion.html";
});