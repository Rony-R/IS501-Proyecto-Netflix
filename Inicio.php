
<?php

     session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
    <link href="css/inicio.css" type="text/css" rel="stylesheet">
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

                            <div class="collapse navbar-collapse" id="navbarCollapse" style="float=left;">
                              <ul class="navbar-nav nav-margen" >
                                <li class="nav-item active">
                                     <a class="nav-link" href=""  style="font-size=50rem"><b>Inicio</b></a>      
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
                                     <a class="nav-link" href="miLista.php">Mi lista</span></a>      
                                </li>

                                
                              </ul>
                              
                            </div>


                            <ul class="navbar-nav  nav-margen">
                                <li class="nav-item active">
                                     <a href=""><i class="fas fa-search iconos"></i></a>      
                                </li>

                                <li class="nav-item active">
                                  <a class="nav-link" href="#" style="padding-rigth:25px; padding-left:25px"></a>
                                </li>

                                <li class="nav-item active">
                                   <a href=""><i class="fas fa-bell iconos" ></i></a>
                                </li>

                              <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                   <div class="btn-group" role="group" style="margin-left: 18px">
                                        <button id="btnGroupDrop1" type="button" class="btn btn-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:white">
                                             
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">

                                             <div id="pantallas-inicio">
                                                  
                                             </div>
                                           
                                             <a class="dropdown-item" href="manage.php">Administrar perfiles</a>
                                             <hr>
                                             <a class="dropdown-item" href="account.php"><b>Cuenta</b></a>
                                             <a class="dropdown-item" href="#"><b>Centro de Ayuda</b></a>
                                             <a class="dropdown-item" onclick="cerrarSesion()"><b>Cerrar sesión</b></a>
                                             

                                        </div>
                                   </div>
                              </div>
                                
                            </ul>

                 </div>
                </nav>
          </header>

          <section class="seccion1">
           <img id="portada-inicio" src="img/series/vikingos/9.jpg" style="width:100%; height:800px; position:absolute"> 
               <div class="descripcion1">
                    <div>
                         <h4 style="color:white">ORIGINAL DE <b>NETFLIX</b></h4>
                         <img src="img/series/vikingos/logo.png" style="width:85%">
                    </div>
                    <br>
                    <div class="btn" role="group">
                         <button type="button" id="mostrar" class="btn btn-secondary btn-1y2"><i class="fas fa-play"></i> Reproducir</button>
                         <button type="button" id="" class="btn btn-secondary btn-1y2"><i class="fas fa-plus"></i> Mi Lista</button>
                    </div>
                    <br>
                    <div id="texto1">                       
                         <h5><b>Ver la temporada 4</b></h5>
                         <p style="text-align : justify;">Seremos testigos del regreso de Ragnar a Wessex. Por otro lado, Lagertha tratará de mantenerse en el poder en Kattegat y comenzará una relación amorosa. Además, veremos a Bjorn surcando el Mediterráneo.</p>                     
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
                         <h5><b>Series</b></h5>
                    </div>

                    <div id="wrapper">
  
                         <span id="controlL" class="left-controls" role="button" aria-label="See Previous Modules">
                         <b class="fa fa-chevron-left fa-chevron-left-extra" aria-hidden="true"></b>
                         </span>
                         
                         <div class="module-section clearfix">
                         
                         <ul id="content8" class="lista">
                        
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


          <section>
                     <div class="carousel1">
                         <h5><b>Mi lista</b></h5>
                    </div>

                    <div id="wrapper">
  
                         <span id="controlL" class="left-controls" role="button" aria-label="See Previous Modules">
                         <b class="fa fa-chevron-left fa-chevron-left-extra" aria-hidden="true"></b>
                         </span>
                         
                         <div class="module-section clearfix">
                         
                         <ul id="content12" class="lista">
                         
                         

                         
                         </ul>
                         
                         
                         
                         </div><!--end of module-section-->
                         
                         <span id="controlR" class="right-controls" role="button" aria-label="See Previous Modules">
                         <b class="fa fa-chevron-right fa-chevron-right-extra" aria-hidden="true"></b>
                         </span>
                         
                         
                         
                         </div>
          </section>

          <input type="txt" class="d-none" id="idinicio" value="<?php echo $_SESSION["CodUsuario"];?>">
          <input type="txt" class="d-none" id="idpant" value="<?php echo $_SESSION["idPantalla"];?>">

          <section class="footer">
          <table class="table2">                      
                            <tbody>
                                <tr>
                                    <td><a href="#">Compañía</a></td>
                                    <td><a href="#">Acerca de Netflix</a></td>
                                    <td><a href="#">Documentación</a></td>
                                    <td><a href="#">Cómo usar Netflix</a></td>
                                   
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
                                    <td><a href="#">Ayuda de Netflix</a></td>
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
    <script src="js/controlador-contenido.js"></script>
    <script src="js/controlador-inicio.js"></script>
    <script src="js/controlador.js"></script>
   

</body>
</html>