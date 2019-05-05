<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Peliculas</title>
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
    <link href="css/peliculas.css" type="text/css" rel="stylesheet">
    <link href="css/all.css" type="text/css" rel="stylesheet">
    <link rel="icon" type="image/png" href="img/favicon.ico">
    

</head>
<body>
          <header>
                <nav class="navbar navbar-expand-md navbar-dark fixed-top " role="navigation">
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
                                     <a class="nav-link" href="peliculas.php"><b>Películas</b></a>      
                                </li>

                                <li class="nav-item active">
                                     <a class="nav-link" href="agregados.php">Agregados recientemente</span></a>      
                                </li>

                                <li class="nav-item active">
                                     <a class="nav-link" href="miLista.php">Mi lista</span></a>      
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
                                             <a class="dropdown-item" href="manage.php">Administrar perfiles</a>
                                             <hr>
                                             <a class="dropdown-item" href="account.php"><b>Cuenta</b></a>
                                             <a class="dropdown-item" href="#"><b>Centro de Ayuda</b></a>
                                             <a class="dropdown-item" onclick="cerrarSesion()"><b>Cerrar sesión en Netflix</b></a>
                                             

                                        </div>
                                   </div>
                              </div>
                              
                                
                            </ul>

                 </div>
                </nav>
          </header>
         

          <section class="seccion1">
           <img id="portada-peliculas" src="img/peliculas/bird/5.jpg" style="width:100%; height:800px; position:absolute"> 
               <div class="descripcion1">
                    <div>
                         <h4 style="color:white; float:left"><b>Peliculas</b></h4>
                         <div class="dropdown">
                              <button class="dropdown-toggle" type="button" data-toggle="dropdown" id="btn-genero">Géneros 
                              <span class="caret"></span>
                              </button>
                              <ul class="dropdown-menu menu2" >
                                 <div class="container">
                                   <div class="row">

                                        <div class="col-lg-4">
                                             <li><a id="menu2" href="#">Peliculas románticas</a></li>
                                        </div>

                                        <div class="col-lg-4">
                                             <li><a id="menu2" href="#">Accion</a></li>
                                        </div>

                                        <div>
                                             <li><a id="menu2" href="#">Familiares</a></li>
                                        </div>

                                   </div>
                                 </div>    
                              </ul>
                         </div>
                         
                    </div>
                    <br>
                    <div>
                         <img src="img/peliculas/bird/logo.png" style="width:85%">
                    </div>
                    <br>
                    <div class="btn" role="group">
                         <button type="button" id="btn-1y2" class="btn btn-secondary"><i class="fas fa-play"></i> Reproducir</button>
                         <button type="button" id="btn-1y2" class="btn btn-secondary"><i class="fas fa-plus"></i> Mi Lista</button>
                    </div>
                    <br>
                    <div id="texto1">                       
                         <p style="text-align : justify;">Los sobrevivientes de un planeta diezmado deben evitar encontrarse cara a cara con una entidad que toma la forma de sus peores temores y los mata.</p>                     
                    </div>

               </div>

                    <div class="carousel1">
                         <h5><b>Populares en Netflix</b></h5>
                    </div>

                    <div id="wrapper">
  
                         <span id="controlL" class="left-controls" role="button" aria-label="See Previous Modules">
                         <b class="fa fa-chevron-left fa-chevron-left-extra" aria-hidden="true"></b>
                         </span>
                         
                         <div class="module-section clearfix">
                        
                              <ul id="content" class="lista">
                                   <input type="hidden" id="cod-cat-1" value="1">

                              </ul>
                         
                         </div><!--end of module-section-->
                         
                         <span id="controlR" class="right-controls" role="button" aria-label="See Previous Modules">
                         <b class="fa fa-chevron-right fa-chevron-right-extra" aria-hidden="true"></b>
                         </span>

                    </div>
          
       
         
          </section>

         <section>
                     <div class="carousel1">
                         <h5><b>Tendencias</b></h5>
                    </div>

                    <div id="wrapper">
  
                         <span id="controlL" class="left-controls" role="button" aria-label="See Previous Modules">
                         <b class="fa fa-chevron-left fa-chevron-left-extra" aria-hidden="true"></b>
                         </span>
                         
                         <div class="module-section clearfix">
                      
                              <ul id="content2" class="lista">
                                   <input type="hidden" id="cod-cat-2" value="2">
                              </ul>

                         </div>
                         
                         <span id="controlR" class="right-controls" role="button" aria-label="See Previous Modules">
                         <b class="fa fa-chevron-right fa-chevron-right-extra" aria-hidden="true"></b>
                         </span>
          
                         </div>
          </section>


          <section>
                     <div class="carousel1">
                         <h5><b>ORIGINALES DE NETFLIX</b></h5>
                    </div>

                    <div id="wrapper">
  
                         <span id="controlL" class="left-controls" role="button" aria-label="See Previous Modules">
                         <b class="fa fa-chevron-left fa-chevron-left-extra" aria-hidden="true"></b>
                         </span>
                         
                         <div class="module-section clearfix">
                         
                         <ul id="content3" class="lista">
                              <input type="hidden" id="cod-cat-3" value="3">
                         
                         </ul>
                         
                         
                         
                         </div><!--end of module-section-->
                         
                         <span id="controlR" class="right-controls" role="button" aria-label="See Previous Modules">
                         <b class="fa fa-chevron-right fa-chevron-right-extra" aria-hidden="true"></b>
                         </span>
                        
                         </div>
          </section>


          <section>
                     <div class="carousel1">
                         <h5><b>Nuevos lanzamientos</b></h5>
                    </div>

                    <div id="wrapper">
  
                         <span id="controlL" class="left-controls" role="button" aria-label="See Previous Modules">
                         <b class="fa fa-chevron-left fa-chevron-left-extra" aria-hidden="true"></b>
                         </span>
                         
                         <div class="module-section clearfix">
                         
                         <ul id="content4" class="lista">
                         
                         
                         </ul>
                         
                         
                         
                         </div><!--end of module-section-->
                         
                         <span id="controlR" class="right-controls" role="button" aria-label="See Previous Modules">
                         <b class="fa fa-chevron-right fa-chevron-right-extra" aria-hidden="true"></b>
                         </span>
                         
                         </div>
          </section>



          <section>
                     <div class="carousel1">
                         <h5><b>Familiares</b></h5>
                    </div>

                    <div id="wrapper">
  
                         <span id="controlL" class="left-controls" role="button" aria-label="See Previous Modules">
                         <b class="fa fa-chevron-left fa-chevron-left-extra" aria-hidden="true"></b>
                         </span>
                         
                         <div class="module-section clearfix">
                        
                         <ul id="content5" class="lista">
                         
                              <input type="hidden" id="cod-cat-4" value="4">
                 
                         </ul>

                         </div><!--end of module-section-->
                         
                         <span id="controlR" class="right-controls" role="button" aria-label="See Previous Modules">
                         <b class="fa fa-chevron-right fa-chevron-right-extra" aria-hidden="true"></b>
                         </span>
                        
                         
                         
                         
                         </div>
          </section>


          <section>
                     <div class="carousel1">
                         <h5><b>Comedias</b></h5>
                    </div>

                    <div id="wrapper">
  
                         <span id="controlL" class="left-controls" role="button" aria-label="See Previous Modules">
                         <b class="fa fa-chevron-left fa-chevron-left-extra" aria-hidden="true"></b>
                         </span>
                         
                         <div class="module-section clearfix">
                         
                         <ul id="content6" class="lista">
                         
                              <input type="hidden" id="cod-cat-5" value="5">
                         
                         </ul>
                         
                         
                         
                         </div><!--end of module-section-->
                         
                         <span id="controlR" class="right-controls" role="button" aria-label="See Previous Modules">
                         <b class="fa fa-chevron-right fa-chevron-right-extra" aria-hidden="true"></b>
                         </span>
                        
                         
                         
                         
                         </div>
          </section>


          <section>
                     <div class="carousel1">
                         <h5><b>Acción y aventuras</b></h5>
                    </div>

                    <div id="wrapper">
  
                         <span id="controlL" class="left-controls" role="button" aria-label="See Previous Modules">
                         <b class="fa fa-chevron-left fa-chevron-left-extra" aria-hidden="true"></b>
                         </span>
                         
                         <div class="module-section clearfix">
                         
                         <ul id="content7" class="lista">
                              <input type="hidden" id="cod-cat-6" value="6">

                         </ul>
                         
                         
                         
                         </div><!--end of module-section-->
                         
                         <span id="controlR" class="right-controls" role="button" aria-label="See Previous Modules">
                         <b class="fa fa-chevron-right fa-chevron-right-extra" aria-hidden="true"></b>
                         </span>

                         </div>
          </section>

          <section>
                     <div class="carousel1">
                         <h5><b>Documentales</b></h5>
                    </div>

                    <div id="wrapper">
  
                         <span id="controlL" class="left-controls" role="button" aria-label="See Previous Modules">
                         <b class="fa fa-chevron-left fa-chevron-left-extra" aria-hidden="true"></b>
                         </span>
                         
                         <div class="module-section clearfix">
                         
                         <ul id="content9" class="lista">
                         
                              <input type="hidden" id="cod-cat-7" value="7">
                 
                         </ul>
                         
                         
                         
                         </div><!--end of module-section-->
                         
                         <span id="controlR" class="right-controls" role="button" aria-label="See Previous Modules">
                         <b class="fa fa-chevron-right fa-chevron-right-extra" aria-hidden="true"></b>
                         </span>
                        
                         </div>
          </section>


          <section>
                     <div class="carousel1">
                         <h5><b>Dramas</b></h5>
                    </div>

                    <div id="wrapper">
  
                         <span id="controlL" class="left-controls" role="button" aria-label="See Previous Modules">
                         <b class="fa fa-chevron-left fa-chevron-left-extra" aria-hidden="true"></b>
                         </span>
                         
                         <div class="module-section clearfix">
                         
                         <ul id="content10" class="lista">
                              <input type="hidden" id="cod-cat-8" value="8">
                         </ul>
                         
                         
                         
                         </div><!--end of module-section-->
                         
                         <span id="controlR" class="right-controls" role="button" aria-label="See Previous Modules">
                         <b class="fa fa-chevron-right fa-chevron-right-extra" aria-hidden="true"></b>
                         </span>
                         
                         </div>
          </section>

          <section>
                     <div class="carousel1">
                         <h5><b>Películas románticas</b></h5>
                    </div>

                    <div id="wrapper">
  
                         <span id="controlL" class="left-controls" role="button" aria-label="See Previous Modules">
                         <b class="fa fa-chevron-left fa-chevron-left-extra" aria-hidden="true"></b>
                         </span>
                         
                         <div class="module-section clearfix">
                        
                         <ul id="content11" class="lista">
                              <input type="hidden" id="cod-cat-9" value="9">
                         
                         </ul>
                         
                         
                         
                         </div><!--end of module-section-->
                         
                         <span id="controlR" class="right-controls" role="button" aria-label="See Previous Modules">
                         <b class="fa fa-chevron-right fa-chevron-right-extra" aria-hidden="true"></b>
                         </span>
                        
                         
                         
                         
                         </div>
          </section>

          <section>
                     <div class="carousel1">
                         <h5><b>Terror</b></h5>
                    </div>

                    <div id="wrapper">
  
                         <span id="controlL" class="left-controls" role="button" aria-label="See Previous Modules">
                         <b class="fa fa-chevron-left fa-chevron-left-extra" aria-hidden="true"></b>
                         </span>
                         
                         <div class="module-section clearfix">
                        
                         <ul id="content12" class="lista">
                              <input type="hidden" id="cod-cat-10" value="10">
                         
                         </ul>
                         
                         
                         
                         </div><!--end of module-section-->
                         
                         <span id="controlR" class="right-controls" role="button" aria-label="See Previous Modules">
                         <b class="fa fa-chevron-right fa-chevron-right-extra" aria-hidden="true"></b>
                         </span>
                       
                         </div>
          </section>


          <section class="footer">
          <table class="table2">                      
                            <tbody>
                                <tr>
                                    <td><a href="#">Compañía</a></td>
                                    <td><a href="#">Acerca de NETFLIX Ads</a></td>
                                    <td><a href="#">Documentación</a></td>
                                    <td><a href="#">Cómo usar NETFLIX</a></td>
                                   
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
                                    <td><a href="#">Ayuda de NETFLIX Ads</a></td>
                                    <td><a href="#">Blog para desarrolladores</a></td>
                                    <td><a href="#">Reglas y politicas</a></td>
                                
                                </tr>
    
    
                                <tr>
                                    <td><a href="#">Inversores</a></td>
                                </tr>
                        
                            </body>           
                        </table>
          </section>


    <script src="js/popper.min.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/controlador-peliculas.js"></script>
   

</body>
</html>