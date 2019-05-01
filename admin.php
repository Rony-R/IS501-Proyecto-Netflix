<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Administrador</title>
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
    <link href="css/lista.css" type="text/css" rel="stylesheet">
    <link href="css/all.css" type="text/css" rel="stylesheet">
    <link rel="icon" type="image/png" href="img/favicon.ico">

</head>
<body>
          <header>
                <nav class="navbar navbar-expand-md navbar-dark  fixed-top " style="background-color:black" role="navigation">
                 <div class="container">
                             
                            <ul class="navbar-nav ">
                                <li class="nav-item active">
                                        <a class="nav-item"  href="#">
                                        <img class="letras" src="img/letras.png">
                                        </a>
                                </li>
                            </ul>


                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                              <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarCollapse" style="float=left">
                              <ul class="navbar-nav nav-margen">
                                <li class="nav-item active">
                                     <a class="nav-link" href="inicio.php">Inicio</a>      
                                </li>

                                <li class="nav-item active">
                                     <a class="nav-link" href="series.php">Series</a>      
                                </li>

                                <li class="nav-item active">
                                     <a class="nav-link" href="peliculas.php">Películas</a>      
                                </li>

                                <li class="nav-item active">
                                     <a class="nav-link" href="agregados.php">Agregados recientemente</span></a>      
                                </li>

                                <li class="nav-item active">
                                     <a class="nav-link" href="">Mi lista</span></a>      
                                </li>

                                
                              </ul>
                              
                            </div>


                            <ul class="navbar-nav  nav-margen">
                                <li class="nav-item active">
                                     <a href=""><i class="fas fa-search iconos"></i></a>      
                                </li>

                                <li class="nav-item active">
                                  <a class="nav-link" href="#" style="padding-rigth:25px; padding-left:25px">NIÑOS</a>
                                </li>

                                <li class="nav-item active">
                                   <a href=""><i class="fas fa-bell iconos" ></i></a>
                                </li>

                              <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                   <div class="btn-group" role="group" style="margin-left: 18px">
                                        <button id="btnGroupDrop1" type="button" class="btn btn-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:white">
                                             <img style="width:30px" src="img/profile.png">
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                             <img style="width:30px; float:left; margin-rigth:5px" src="img/profile.png"><a class="dropdown-item" href="#">Cuenta2</a>
                                             <a class="dropdown-item" href="#">Niños</a>
                                             <a class="dropdown-item" href="manage.html">Administrar perfiles</a>
                                             <hr>
                                             <a class="dropdown-item" href="#"><b>Cuenta</b></a>
                                             <a class="dropdown-item" href="#"><b>Centro de Ayuda</b></a>
                                             <a class="dropdown-item" href="sesion.html"><b>Cerrar sesión en Netflix</b></a>
                                             

                                        </div>
                                   </div>
                              </div>
                                
                            </ul>

                 </div>
                </nav>
          </header>

          <section class="seccion" style="background-color:#F3F3F3; padding:130px; color:black">

                    <div>
                         <h2>Administrador</h2>
                         <hr>
                    </div>
            <div class="container">
                
                    <div>
                        <button type="button" id="btn-peliculas" class="btn btn-link" style="color:black"><h5>Agregar Peliculas</h5></button> |
                        <button type="button" id="btn-series" class="btn btn-link" style="color:black"><h5>Agregar Series</h5></button>
                        <button type="button" id="btn-agregar" class="btn btn-dark" style="margin-left:40%" >Agregar</button>
                        <hr>
               <div class="row">
                        <form id="form1">
                            <div class="form-group">

                                <div class="row" style="margin-left:auto; margin-right:auto">         
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12" style="margin-bottom:5px">
                                        <input class="form-control" type="text" placeholder="Nombre Película" id="txt-nombre">
                                    </div>
        
                                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12" style="margin-bottom:5px">
                                        <input type="number" class="form-control" placeholder="Duración" id="txt-duracion">
                                    </div>

                                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12" style="margin-bottom:5px">                  
                                        <select name="idioma" id="idioma" class="form-control"></select>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12" style="margin-bottom:5px">
                                        <input class="form-control" type="text" placeholder="Nombre Director" id="txt-director">
                                    </div>
                                

                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12" style="margin-bottom:5px">                  
                                        <select name="estudio" id="estudio" class="form-control"></select>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12" style="margin-bottom:5px; float:left">
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
             
                        </form>
                    </div>
                </div> 
            </div>     
                    


         
          </section>

       

          <section class="footer">
          <table class="table2">                      
                            <tbody>
                                <tr>
                                    <td><a href="#">Compañía</a></td>
                                    <td><a href="#">Acerca de Twitter Ads</a></td>
                                    <td><a href="#">Documentación</a></td>
                                    <td><a href="#">Cómo usar Twitter</a></td>
                                   
                                </tr>
    
                                <tr>
                                <td><a href="#">Valores</a></td>
                                <td><a href="#">Segmentación</a></td>
                                <td><a href="#">Foros</a></td>
                                <td><a href="#">Cómo administrar tu cuenta</a></td>
                                
                                </tr>
    
                                <tr>
                                    <td><a href="#">Seguridad</a></td>
                                    <td><a href="#">Analitycs</a></td>
                                    <td><a href="#">Comunidades</a></td>
                                    <td><a href="#">Proteccion y seguridad</a></td>
                                
                                </tr>
    
                                <tr>
                                    <td><a href="#">Blog</a></td>
                                    <td><a href="#">Ayuda de Twitter Ads</a></td>
                                    <td><a href="#">Blog para desarrolladores</a></td>
                                    <td><a href="#">Reglas y politicas</a></td>
                                
                                </tr>
    
    
                                <tr>
                                    <td><a href="#">Inversores</a></td>
                                </tr>
                        
                            </body>           
                        </table>
          </section>



    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/controlador-admin.js"></script>
   

</body>
</html>