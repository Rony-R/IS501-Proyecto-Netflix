$(document).ready(function(){
    //actividad
        $('#btn-visualizacion').click(function() {
            $('#contenedor2').replaceWith(`<div class="container" id="contenedor">
                                            <hr>
                                                <div class="row">
                                                    <div class="col">
                                                        <p>fecha</p>
                                                    </div>
                                                    <div class="col-6 ">
                                                    <button type="button" class="btn btn-link" id="btn-mostrar-contenido">Nombre Serie: Temporada ##: "Nombre Episodio"</button>
                                                    </div>
                                                    <div class="col">
                                                        <button type="button" class="btn btn-link" style="color:black">Informar un problema  <i class="fas fa-ban"></i></button>
                                                    </div>
                                                </div>
                                            </div>`);
        });

    //calificaciones
    $('#btn-calificacion').click(function() {
        $('#contenedor').replaceWith(`<div class="container" id="contenedor2">
                                        <hr>
                                            <div class="row">
                                                <div class="col">
                                                    <p>fecha</p>
                                                </div>
                                                <div class="col-6">
                                                <button type="button" class="btn btn-link" id="btn-mostrar-contenido">Nombre contenido</button>
                                                </div>
                                                <div class="col">
                                                    <button type="button" class="btn btn-link" style="color:black"><i class="fas fa-thumbs-up"></i>   <i class="far fa-thumbs-down"></i> <i class="far fa-thumbs-up"></i>   <i class="fas fa-thumbs-down"></i></button>
                                                </div>
                                            </div>
                                        </div>`);
    });
    
});