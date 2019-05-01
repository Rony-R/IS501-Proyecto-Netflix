$(document).ready(function(){
    //peliculas
        $('#btn-peliculas').click(function() {
            $('#form2').replaceWith(`<form id="form1">
                                        <div class="form-group">
                                                <div class="row" style="margin-left:auto; margin-right:auto">         
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12" style="margin-bottom:5px">
                                                    <input class="form-control" type="text" placeholder="Nombre Película" id="txt-nombre">
                                                </div>
                    
                                                <div class="col-xl-2 col-lg-2 col-md-6 col-sm-12 col-12" style="margin-bottom:5px">
                                                    <input type="number" class="form-control" placeholder="Duración" id="txt-duracion">
                                                </div>
            
                                                <div class="col-xl-2 col-lg-2 col-md-6 col-sm-12 col-12" style="margin-bottom:5px">                  
                                                    <select name="idioma" id="idioma" class="form-control"></select>
                                                </div>
            
                                                <div class="col-xl-2 col-lg-2 col-md-6 col-sm-12 col-12" style="margin-bottom:5px">
                                                    <input class="form-control" type="text" placeholder="Edad Público" id="txt-edad">
                                                </div>
            
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12" style="margin-bottom:5px">
                                                    <input class="form-control" type="text" placeholder="Nombre Director" id="txt-director">
                                                </div>
            
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12" style="margin-bottom:5px">
                                                    <input class="form-control" type="text" placeholder="URL imagen miniatura" id="url-img">
                                                </div>
            
            
            
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12" style="margin-bottom:5px">                  
                                                    <select  name="estudio" id="estudio" class="form-control"></select>
                                                </div>
            
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12" style="margin-bottom:5px">
                                                    <input class="form-control" type="text" placeholder="URL" id="txt-url">
                                                </div>
            
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12" style="margin-bottom:5px">
                                                    <textarea name="descripcion" id="descripcion" cols="30" rows="3" class="form-control">Descripción</textarea><br>
                                                </div> 
                    
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12" style="margin-bottom:5px">                  
                                                    <select size=4 name="categoria" id="categoria" class="form-control"></select>
                                                </div>
                                        
                                                
                    
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12" style="margin-bottom:5px; float:right">
                                                    <select size=4 name="genero" id="genero" class="form-control" placeholder="Duración"></select> 
                                                </div>
                                                                    
                                            </div>
                                        </div>

                                    </form>`);
        });

    //series
    $('#btn-series').click(function() {
        $('#form1').replaceWith(`<form id="form2" style="width:90%">
                                    <div class="form-group">

                                        <div class="row" style="margin-left:auto; margin-right:auto"> 
                                          
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12" style="margin-bottom:5px">
                                                <input class="form-control" type="text" placeholder="Nombre Episodio" id="txt-nombre">
                                            </div>

                                            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-12 col-12" style="margin-bottom:5px">
                                                <input class="form-control" type="number" placeholder="nº temporada" id="txt-temporada">
                                            </div>

                

                                            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-12 col-12" style="margin-bottom:5px">
                                                <input type="number" class="form-control" placeholder="Duración min" id="txt-duracion">
                                            </div>

                                            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-12 col-12" style="margin-bottom:5px">
                                                    <input class="form-control" type="text" placeholder="Edad Público" id="txt-edad">
                                            </div>
                                    

                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12" style="margin-bottom:5px">
                                                <input class="form-control" type="text" placeholder="URL episodio" id="txt-url">
                                            </div>

                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12" style="margin-bottom:5px">
                                                <input class="form-control" type="text" placeholder="URL imagen miniatura" id="url-img">
                                            </div>

                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12" style="margin-bottom:5px">
                                                <textarea name="descripcion" id="descripcion" cols="30" rows="3" class="form-control">Descripción</textarea><br>
                                            </div> 

                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12" style="margin-bottom:5px">                  
                                                <select size=4 name="categoria" id="categoria" class="form-control"></select>
                                            </div>
                                    
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12" style="margin-bottom:5px">
                                                <select size=4 name="genero" id="genero" class="form-control" ></select> 
                                            </div>

                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12" style="margin-bottom:5px">
                                                <select size=4 name="personas" id="personas" class="form-control" ></select> 
                                            </div>
                                        
                                                                
                                        </div>
                                    </div>

                                </form>`);
    });
    
});