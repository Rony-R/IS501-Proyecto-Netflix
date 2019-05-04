
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
                                     <a class="nav-link" href="" style="font-size=50rem"><b>Inicio</b></a>      
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
                                  <a class="nav-link" href="#" style="padding-rigth:25px; padding-left:25px">NIÑOS</a>
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
                                           
                                             <a class="dropdown-item" href="#">Niños</a>
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
                         <button type="button" id="btn-1y2" class="btn btn-secondary"><i class="fas fa-play"></i> Reproducir</button>
                         <button type="button" id="btn-1y2" class="btn btn-secondary"><i class="fas fa-plus"></i> Mi Lista</button>
                    </div>
                    <br>
                    <div id="texto1">                       
                         <h5><b>Ver la temporada 4</b></h5>
                         <p style="text-align : justify;">Seremos testigos del regreso de Ragnar a Wessex. Por otro lado, Lagertha tratará de mantenerse en el poder en Kattegat y comenzará una relación amorosa. Además, veremos a Bjorn surcando el Mediterráneo.</p>                     
                    </div>

               </div>

                    <div class="carousel1">
                         <h5><b>Continuar viendo contenido de #######</b></h5>
                    </div>

                    <div id="wrapper">
  
                         <span id="controlL" class="left-controls" role="button" aria-label="See Previous Modules">
                         <b class="fa fa-chevron-left fa-chevron-left-extra" aria-hidden="true"></b>
                         </span>
                         
                         <div class="module-section clearfix">
                         <!-- <button class="btn arrow-guides fa-chevron-left"></button> -->
                         <ul id="content" class="lista">
                         
                         <li class="card effect1">
                              <div class="inside-top">
                              <img src="img/series/casapapel/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card"  id="c2">
                              <div class="inside-top"  id="cont2">
                              <img src="img/series/outlander/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/breakingbad/1.jpg" id="img"> 
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/flash/portada.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/TWD/portada.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/you/portada.png" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/stranger/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/innocents/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/increibles/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/revenant/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/rosie/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/ninos/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/alien/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/bird/1.jpg" id="img">
                              </div>
                         </li>
                 
                         
                         </ul>
                         
                         
                         
                         </div><!--end of module-section-->
                         
                         <span id="controlR" class="right-controls" role="button" aria-label="See Previous Modules">
                         <b class="fa fa-chevron-right fa-chevron-right-extra" aria-hidden="true"></b>
                         </span>
                         <!-- <button class="btn arrow-guides-right fa-chevron-right"></button> -->
                         
                         
                         
                         </div>
       
         
          </section>

          <section>
                     <div class="carousel1">
                         <h5><b>Populares en Netflix</b></h5>
                    </div>

                    <div id="wrapper">
  
                         <span id="controlL" class="left-controls" role="button" aria-label="See Previous Modules">
                         <b class="fa fa-chevron-left fa-chevron-left-extra" aria-hidden="true"></b>
                         </span>
                         
                         <div class="module-section clearfix">
                         <!-- <button class="btn arrow-guides fa-chevron-left"></button> -->
                         <ul id="content" class="lista">
                         
                         <li class="card effect1">
                              <div class="inside-top">
                              <img src="img/series/casapapel/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/outlander/4.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/breakingbad/1.jpg" id="img"> 
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/flash/portada.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/TWD/portada.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/you/portada.png" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/stranger/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/innocents/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/increibles/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/revenant/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/rosie/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/ninos/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/alien/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/bird/1.jpg" id="img">
                              </div>
                         </li>
                 
                         
                         </ul>
                         
                         
                         
                         </div><!--end of module-section-->
                         
                         <span id="controlR" class="right-controls" role="button" aria-label="See Previous Modules">
                         <b class="fa fa-chevron-right fa-chevron-right-extra" aria-hidden="true"></b>
                         </span>
                         <!-- <button class="btn arrow-guides-right fa-chevron-right"></button> -->
                         
                         
                         
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
                         <!-- <button class="btn arrow-guides fa-chevron-left"></button> -->
                         <ul id="content" class="lista">
                         
                         <li class="card effect1">
                              <div class="inside-top">
                              <img src="img/series/casapapel/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/outlander/4.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/breakingbad/1.jpg" id="img"> 
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/flash/portada.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/TWD/portada.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/you/portada.png" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/stranger/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/innocents/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/increibles/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/revenant/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/rosie/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/ninos/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/alien/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/bird/1.jpg" id="img">
                              </div>
                         </li>
                 
                         
                         </ul>
                         
                         
                         
                         </div><!--end of module-section-->
                         
                         <span id="controlR" class="right-controls" role="button" aria-label="See Previous Modules">
                         <b class="fa fa-chevron-right fa-chevron-right-extra" aria-hidden="true"></b>
                         </span>
                         <!-- <button class="btn arrow-guides-right fa-chevron-right"></button> -->
                         
                         
                         
                         </div>
          </section>

          <section>
                     <div class="carousel1">
                         <h5><b>Dramas de TV de EE.UU.</b></h5>
                    </div>

                    <div id="wrapper">
  
                         <span id="controlL" class="left-controls" role="button" aria-label="See Previous Modules">
                         <b class="fa fa-chevron-left fa-chevron-left-extra" aria-hidden="true"></b>
                         </span>
                         
                         <div class="module-section clearfix">
                         <!-- <button class="btn arrow-guides fa-chevron-left"></button> -->
                         <ul id="content" class="lista">
                         
                         <li class="card effect1">
                              <div class="inside-top">
                              <img src="img/series/casapapel/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/outlander/4.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/breakingbad/1.jpg" id="img"> 
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/flash/portada.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/TWD/portada.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/you/portada.png" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/stranger/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/innocents/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/increibles/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/revenant/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/rosie/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/ninos/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/alien/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/bird/1.jpg" id="img">
                              </div>
                         </li>
                 
                         
                         </ul>
                         
                         
                         
                         </div><!--end of module-section-->
                         
                         <span id="controlR" class="right-controls" role="button" aria-label="See Previous Modules">
                         <b class="fa fa-chevron-right fa-chevron-right-extra" aria-hidden="true"></b>
                         </span>
                         <!-- <button class="btn arrow-guides-right fa-chevron-right"></button> -->
                         
                         
                         
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
                         <!-- <button class="btn arrow-guides fa-chevron-left"></button> -->
                         <ul id="content" class="lista">
                         
                         <li class="card effect1">
                              <div class="inside-top">
                              <img src="img/series/casapapel/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/outlander/4.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/breakingbad/1.jpg" id="img"> 
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/flash/portada.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/TWD/portada.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/you/portada.png" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/stranger/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/innocents/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/increibles/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/revenant/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/rosie/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/ninos/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/alien/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/bird/1.jpg" id="img">
                              </div>
                         </li>
                 
                         
                         </ul>
                         
                         
                         
                         </div><!--end of module-section-->
                         
                         <span id="controlR" class="right-controls" role="button" aria-label="See Previous Modules">
                         <b class="fa fa-chevron-right fa-chevron-right-extra" aria-hidden="true"></b>
                         </span>
                         <!-- <button class="btn arrow-guides-right fa-chevron-right"></button> -->
                         
                         
                         
                         </div>
          </section>

          <section>
                     <div class="carousel1">
                         <h5><b>Dramas europeos aclamados por la crítica</b></h5>
                    </div>

                    <div id="wrapper">
  
                         <span id="controlL" class="left-controls" role="button" aria-label="See Previous Modules">
                         <b class="fa fa-chevron-left fa-chevron-left-extra" aria-hidden="true"></b>
                         </span>
                         
                         <div class="module-section clearfix">
                         <!-- <button class="btn arrow-guides fa-chevron-left"></button> -->
                         <ul id="content" class="lista">
                         
                         <li class="card effect1">
                              <div class="inside-top">
                              <img src="img/series/casapapel/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/outlander/4.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/breakingbad/1.jpg" id="img"> 
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/flash/portada.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/TWD/portada.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/you/portada.png" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/stranger/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/innocents/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/increibles/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/revenant/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/rosie/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/ninos/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/alien/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/bird/1.jpg" id="img">
                              </div>
                         </li>
                 
                         
                         </ul>
                         
                         
                         
                         </div><!--end of module-section-->
                         
                         <span id="controlR" class="right-controls" role="button" aria-label="See Previous Modules">
                         <b class="fa fa-chevron-right fa-chevron-right-extra" aria-hidden="true"></b>
                         </span>
                         <!-- <button class="btn arrow-guides-right fa-chevron-right"></button> -->
                         
                         
                         
                         </div>
          </section>

          <section>
                     <div class="carousel1">
                         <h5><b>TV policial</b></h5>
                    </div>

                    <div id="wrapper">
  
                         <span id="controlL" class="left-controls" role="button" aria-label="See Previous Modules">
                         <b class="fa fa-chevron-left fa-chevron-left-extra" aria-hidden="true"></b>
                         </span>
                         
                         <div class="module-section clearfix">
                         <!-- <button class="btn arrow-guides fa-chevron-left"></button> -->
                         <ul id="content" class="lista">
                         
                         <li class="card effect1">
                              <div class="inside-top">
                              <img src="img/series/casapapel/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/outlander/4.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/breakingbad/1.jpg" id="img"> 
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/flash/portada.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/TWD/portada.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/you/portada.png" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/stranger/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/innocents/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/increibles/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/revenant/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/rosie/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/ninos/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/alien/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/bird/1.jpg" id="img">
                              </div>
                         </li>
                 
                         
                         </ul>
                         
                         
                         
                         </div><!--end of module-section-->
                         
                         <span id="controlR" class="right-controls" role="button" aria-label="See Previous Modules">
                         <b class="fa fa-chevron-right fa-chevron-right-extra" aria-hidden="true"></b>
                         </span>
                         <!-- <button class="btn arrow-guides-right fa-chevron-right"></button> -->
                         
                         
                         
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
                         <!-- <button class="btn arrow-guides fa-chevron-left"></button> -->
                         <ul id="content" class="lista">
                         
                         <li class="card effect1">
                              <div class="inside-top">
                              <img src="img/series/casapapel/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/outlander/4.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/breakingbad/1.jpg" id="img"> 
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/flash/portada.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/TWD/portada.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/you/portada.png" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/stranger/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/innocents/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/increibles/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/revenant/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/rosie/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/ninos/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/alien/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/bird/1.jpg" id="img">
                              </div>
                         </li>
                 
                         
                         </ul>
                         
                         
                         
                         </div><!--end of module-section-->
                         
                         <span id="controlR" class="right-controls" role="button" aria-label="See Previous Modules">
                         <b class="fa fa-chevron-right fa-chevron-right-extra" aria-hidden="true"></b>
                         </span>
                         <!-- <button class="btn arrow-guides-right fa-chevron-right"></button> -->
                         
                         
                         
                         </div>
          </section>

          <section>
                     <div class="carousel1">
                         <h5><b>Series estadounidenses dramáticas dignas de maratón</b></h5>
                    </div>

                    <div id="wrapper">
  
                         <span id="controlL" class="left-controls" role="button" aria-label="See Previous Modules">
                         <b class="fa fa-chevron-left fa-chevron-left-extra" aria-hidden="true"></b>
                         </span>
                         
                         <div class="module-section clearfix">
                         <!-- <button class="btn arrow-guides fa-chevron-left"></button> -->
                         <ul id="content" class="lista">
                         
                         <li class="card effect1">
                              <div class="inside-top">
                              <img src="img/series/casapapel/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/outlander/4.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/breakingbad/1.jpg" id="img"> 
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/flash/portada.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/TWD/portada.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/you/portada.png" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/stranger/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/innocents/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/increibles/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/revenant/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/rosie/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/ninos/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/alien/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/bird/1.jpg" id="img">
                              </div>
                         </li>
                 
                         
                         </ul>
                         
                         
                         
                         </div><!--end of module-section-->
                         
                         <span id="controlR" class="right-controls" role="button" aria-label="See Previous Modules">
                         <b class="fa fa-chevron-right fa-chevron-right-extra" aria-hidden="true"></b>
                         </span>
                         <!-- <button class="btn arrow-guides-right fa-chevron-right"></button> -->
                         
                         
                         
                         </div>
          </section>

          <section>
                     <div class="carousel1">
                         <h5><b>Programas históricos</b></h5>
                    </div>

                    <div id="wrapper">
  
                         <span id="controlL" class="left-controls" role="button" aria-label="See Previous Modules">
                         <b class="fa fa-chevron-left fa-chevron-left-extra" aria-hidden="true"></b>
                         </span>
                         
                         <div class="module-section clearfix">
                         <!-- <button class="btn arrow-guides fa-chevron-left"></button> -->
                         <ul id="content" class="lista">
                         
                         <li class="card effect1">
                              <div class="inside-top">
                              <img src="img/series/casapapel/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/outlander/4.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/breakingbad/1.jpg" id="img"> 
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/flash/portada.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/TWD/portada.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/you/portada.png" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/stranger/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/innocents/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/increibles/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/revenant/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/rosie/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/ninos/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/alien/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/bird/1.jpg" id="img">
                              </div>
                         </li>
                 
                         
                         </ul>
                         
                         
                         
                         </div><!--end of module-section-->
                         
                         <span id="controlR" class="right-controls" role="button" aria-label="See Previous Modules">
                         <b class="fa fa-chevron-right fa-chevron-right-extra" aria-hidden="true"></b>
                         </span>
                         <!-- <button class="btn arrow-guides-right fa-chevron-right"></button> -->
                         
                         
                         
                         </div>
          </section>

          <section>
                     <div class="carousel1">
                         <h5><b>Dramas psicológicos de TV estadounidenses</b></h5>
                    </div>

                    <div id="wrapper">
  
                         <span id="controlL" class="left-controls" role="button" aria-label="See Previous Modules">
                         <b class="fa fa-chevron-left fa-chevron-left-extra" aria-hidden="true"></b>
                         </span>
                         
                         <div class="module-section clearfix">
                         <!-- <button class="btn arrow-guides fa-chevron-left"></button> -->
                         <ul id="content" class="lista">
                         
                         <li class="card effect1">
                              <div class="inside-top">
                              <img src="img/series/casapapel/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/outlander/4.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/breakingbad/1.jpg" id="img"> 
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/flash/portada.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/TWD/portada.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/you/portada.png" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/stranger/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/innocents/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/increibles/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/revenant/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/rosie/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/ninos/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/alien/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/bird/1.jpg" id="img">
                              </div>
                         </li>
                 
                         
                         </ul>
                         
                         
                         
                         </div><!--end of module-section-->
                         
                         <span id="controlR" class="right-controls" role="button" aria-label="See Previous Modules">
                         <b class="fa fa-chevron-right fa-chevron-right-extra" aria-hidden="true"></b>
                         </span>
                         <!-- <button class="btn arrow-guides-right fa-chevron-right"></button> -->
                         
                         
                         
                         </div>
          </section>

          <section>
                     <div class="carousel1">
                         <h5><b>Nueva selección para ######</b></h5>
                    </div>

                    <div id="wrapper">
  
                         <span id="controlL" class="left-controls" role="button" aria-label="See Previous Modules">
                         <b class="fa fa-chevron-left fa-chevron-left-extra" aria-hidden="true"></b>
                         </span>
                         
                         <div class="module-section clearfix">
                         <!-- <button class="btn arrow-guides fa-chevron-left"></button> -->
                         <ul id="content" class="lista">
                         
                         <li class="card effect1">
                              <div class="inside-top">
                              <img src="img/series/casapapel/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/outlander/4.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/breakingbad/1.jpg" id="img"> 
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/flash/portada.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/TWD/portada.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/you/portada.png" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/stranger/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/innocents/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/increibles/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/revenant/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/rosie/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/ninos/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/alien/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/bird/1.jpg" id="img">
                              </div>
                         </li>
                 
                         
                         </ul>
                         
                         
                         
                         </div><!--end of module-section-->
                         
                         <span id="controlR" class="right-controls" role="button" aria-label="See Previous Modules">
                         <b class="fa fa-chevron-right fa-chevron-right-extra" aria-hidden="true"></b>
                         </span>
                         <!-- <button class="btn arrow-guides-right fa-chevron-right"></button> -->
                         
                         
                         
                         </div>
          </section>

          <section>
                     <div class="carousel1">
                         <h5><b>Thrillers</b></h5>
                    </div>

                    <div id="wrapper">
  
                         <span id="controlL" class="left-controls" role="button" aria-label="See Previous Modules">
                         <b class="fa fa-chevron-left fa-chevron-left-extra" aria-hidden="true"></b>
                         </span>
                         
                         <div class="module-section clearfix">
                         <!-- <button class="btn arrow-guides fa-chevron-left"></button> -->
                         <ul id="content" class="lista">
                         
                         <li class="card effect1">
                              <div class="inside-top">
                              <img src="img/series/casapapel/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/outlander/4.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/breakingbad/1.jpg" id="img"> 
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/flash/portada.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/TWD/portada.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/you/portada.png" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/stranger/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/innocents/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/increibles/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/revenant/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/rosie/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/ninos/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/alien/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/bird/1.jpg" id="img">
                              </div>
                         </li>
                 
                         
                         </ul>
                         
                         
                         
                         </div><!--end of module-section-->
                         
                         <span id="controlR" class="right-controls" role="button" aria-label="See Previous Modules">
                         <b class="fa fa-chevron-right fa-chevron-right-extra" aria-hidden="true"></b>
                         </span>
                         <!-- <button class="btn arrow-guides-right fa-chevron-right"></button> -->
                         
                         
                         
                         </div>
          </section>

          <section>
                     <div class="carousel1">
                         <h5><b>Dramas de TV sobre familias disfuncionales</b></h5>
                    </div>

                    <div id="wrapper">
  
                         <span id="controlL" class="left-controls" role="button" aria-label="See Previous Modules">
                         <b class="fa fa-chevron-left fa-chevron-left-extra" aria-hidden="true"></b>
                         </span>
                         
                         <div class="module-section clearfix">
                         <!-- <button class="btn arrow-guides fa-chevron-left"></button> -->
                         <ul id="content" class="lista">
                         
                         <li class="card effect1">
                              <div class="inside-top">
                              <img src="img/series/casapapel/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/outlander/4.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/breakingbad/1.jpg" id="img"> 
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/flash/portada.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/TWD/portada.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/you/portada.png" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/stranger/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/innocents/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/increibles/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/revenant/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/rosie/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/ninos/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/alien/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/bird/1.jpg" id="img">
                              </div>
                         </li>
                 
                         
                         </ul>
                         
                         
                         
                         </div><!--end of module-section-->
                         
                         <span id="controlR" class="right-controls" role="button" aria-label="See Previous Modules">
                         <b class="fa fa-chevron-right fa-chevron-right-extra" aria-hidden="true"></b>
                         </span>
                         <!-- <button class="btn arrow-guides-right fa-chevron-right"></button> -->
                         
                         
                         
                         </div>
          </section>

          <section>
                     <div class="carousel1">
                         <h5><b>Series dignas de maratón</b></h5>
                    </div>

                    <div id="wrapper">
  
                         <span id="controlL" class="left-controls" role="button" aria-label="See Previous Modules">
                         <b class="fa fa-chevron-left fa-chevron-left-extra" aria-hidden="true"></b>
                         </span>
                         
                         <div class="module-section clearfix">
                         <!-- <button class="btn arrow-guides fa-chevron-left"></button> -->
                         <ul id="content" class="lista">
                         
                         <li class="card effect1">
                              <div class="inside-top">
                              <img src="img/series/casapapel/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/outlander/4.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/breakingbad/1.jpg" id="img"> 
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/flash/portada.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/TWD/portada.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/you/portada.png" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/stranger/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/innocents/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/increibles/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/revenant/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/rosie/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/ninos/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/alien/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/bird/1.jpg" id="img">
                              </div>
                         </li>
                 
                         
                         </ul>
                         
                         
                         
                         </div><!--end of module-section-->
                         
                         <span id="controlR" class="right-controls" role="button" aria-label="See Previous Modules">
                         <b class="fa fa-chevron-right fa-chevron-right-extra" aria-hidden="true"></b>
                         </span>
                         <!-- <button class="btn arrow-guides-right fa-chevron-right"></button> -->
                         
                         
                         
                         </div>
          </section>

          <section>
                     <div class="carousel1">
                         <h5><b>Telenovelas</b></h5>
                    </div>

                    <div id="wrapper">
  
                         <span id="controlL" class="left-controls" role="button" aria-label="See Previous Modules">
                         <b class="fa fa-chevron-left fa-chevron-left-extra" aria-hidden="true"></b>
                         </span>
                         
                         <div class="module-section clearfix">
                         <!-- <button class="btn arrow-guides fa-chevron-left"></button> -->
                         <ul id="content" class="lista">
                         
                         <li class="card effect1">
                              <div class="inside-top">
                              <img src="img/series/casapapel/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/outlander/4.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/breakingbad/1.jpg" id="img"> 
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/flash/portada.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/TWD/portada.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/you/portada.png" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/stranger/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/innocents/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/increibles/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/revenant/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/rosie/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/ninos/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/alien/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/bird/1.jpg" id="img">
                              </div>
                         </li>
                 
                         
                         </ul>
                         
                         
                         
                         </div><!--end of module-section-->
                         
                         <span id="controlR" class="right-controls" role="button" aria-label="See Previous Modules">
                         <b class="fa fa-chevron-right fa-chevron-right-extra" aria-hidden="true"></b>
                         </span>
                         <!-- <button class="btn arrow-guides-right fa-chevron-right"></button> -->
                         
                         
                         
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
                         <!-- <button class="btn arrow-guides fa-chevron-left"></button> -->
                         <ul id="content" class="lista">
                         
                         <li class="card effect1">
                              <div class="inside-top">
                              <img src="img/series/casapapel/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/outlander/4.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/breakingbad/1.jpg" id="img"> 
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/flash/portada.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/TWD/portada.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/you/portada.png" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/stranger/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/innocents/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/increibles/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/revenant/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/rosie/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/ninos/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/alien/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/bird/1.jpg" id="img">
                              </div>
                         </li>
                 
                         
                         </ul>
                         
                         
                         
                         </div><!--end of module-section-->
                         
                         <span id="controlR" class="right-controls" role="button" aria-label="See Previous Modules">
                         <b class="fa fa-chevron-right fa-chevron-right-extra" aria-hidden="true"></b>
                         </span>
                         <!-- <button class="btn arrow-guides-right fa-chevron-right"></button> -->
                         
                         
                         
                         </div>
          </section>

          <section>
                     <div class="carousel1">
                         <h5><b>Programas de EE.UU.</b></h5>
                    </div>

                    <div id="wrapper">
  
                         <span id="controlL" class="left-controls" role="button" aria-label="See Previous Modules">
                         <b class="fa fa-chevron-left fa-chevron-left-extra" aria-hidden="true"></b>
                         </span>
                         
                         <div class="module-section clearfix">
                         <!-- <button class="btn arrow-guides fa-chevron-left"></button> -->
                         <ul id="content" class="lista">
                         
                         <li class="card effect1">
                              <div class="inside-top">
                              <img src="img/series/casapapel/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/outlander/4.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/breakingbad/1.jpg" id="img"> 
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/flash/portada.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/TWD/portada.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/you/portada.png" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/stranger/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/innocents/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/increibles/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/revenant/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/rosie/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/ninos/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/alien/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/bird/1.jpg" id="img">
                              </div>
                         </li>
                 
                         
                         </ul>
                         
                         
                         
                         </div><!--end of module-section-->
                         
                         <span id="controlR" class="right-controls" role="button" aria-label="See Previous Modules">
                         <b class="fa fa-chevron-right fa-chevron-right-extra" aria-hidden="true"></b>
                         </span>
                         <!-- <button class="btn arrow-guides-right fa-chevron-right"></button> -->
                         
                         
                         
                         </div>
          </section>

          <section>
                     <div class="carousel1">
                         <h5><b>Dramas de TV dignos de maratones ganadores del Emmy</b></h5>
                    </div>

                    <div id="wrapper">
  
                         <span id="controlL" class="left-controls" role="button" aria-label="See Previous Modules">
                         <b class="fa fa-chevron-left fa-chevron-left-extra" aria-hidden="true"></b>
                         </span>
                         
                         <div class="module-section clearfix">
                         <!-- <button class="btn arrow-guides fa-chevron-left"></button> -->
                         <ul id="content" class="lista">
                         
                         <li class="card effect1">
                              <div class="inside-top">
                              <img src="img/series/casapapel/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/outlander/4.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/breakingbad/1.jpg" id="img"> 
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/flash/portada.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/TWD/portada.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/you/portada.png" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/stranger/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/innocents/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/increibles/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/revenant/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/rosie/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/ninos/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/alien/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/bird/1.jpg" id="img">
                              </div>
                         </li>
                 
                         
                         </ul>
                         
                         
                         
                         </div><!--end of module-section-->
                         
                         <span id="controlR" class="right-controls" role="button" aria-label="See Previous Modules">
                         <b class="fa fa-chevron-right fa-chevron-right-extra" aria-hidden="true"></b>
                         </span>
                         <!-- <button class="btn arrow-guides-right fa-chevron-right"></button> -->
                         
                         
                         
                         </div>
          </section>

          <section>
                     <div class="carousel1">
                         <h5><b>Series de EE.UU. premiadas dignas de maratón</b></h5>
                    </div>

                    <div id="wrapper">
  
                         <span id="controlL" class="left-controls" role="button" aria-label="See Previous Modules">
                         <b class="fa fa-chevron-left fa-chevron-left-extra" aria-hidden="true"></b>
                         </span>
                         
                         <div class="module-section clearfix">
                         <!-- <button class="btn arrow-guides fa-chevron-left"></button> -->
                         <ul id="content" class="lista">
                         
                         <li class="card effect1">
                              <div class="inside-top">
                              <img src="img/series/casapapel/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/outlander/4.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/breakingbad/1.jpg" id="img"> 
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/flash/portada.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/TWD/portada.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/you/portada.png" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/stranger/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/innocents/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/increibles/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/revenant/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/rosie/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/ninos/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/alien/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/bird/1.jpg" id="img">
                              </div>
                         </li>
                 
                         
                         </ul>
                         
                         
                         
                         </div><!--end of module-section-->
                         
                         <span id="controlR" class="right-controls" role="button" aria-label="See Previous Modules">
                         <b class="fa fa-chevron-right fa-chevron-right-extra" aria-hidden="true"></b>
                         </span>
                         <!-- <button class="btn arrow-guides-right fa-chevron-right"></button> -->
                         
                         
                         
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
                         <!-- <button class="btn arrow-guides fa-chevron-left"></button> -->
                         <ul id="content" class="lista">
                         
                         <li class="card effect1">
                              <div class="inside-top">
                              <img src="img/series/casapapel/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/outlander/4.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/breakingbad/1.jpg" id="img"> 
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/flash/portada.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/TWD/portada.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/you/portada.png" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/stranger/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/innocents/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/increibles/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/revenant/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/rosie/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/ninos/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/alien/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/bird/1.jpg" id="img">
                              </div>
                         </li>
                 
                         
                         </ul>
                         
                         
                         
                         </div><!--end of module-section-->
                         
                         <span id="controlR" class="right-controls" role="button" aria-label="See Previous Modules">
                         <b class="fa fa-chevron-right fa-chevron-right-extra" aria-hidden="true"></b>
                         </span>
                         <!-- <button class="btn arrow-guides-right fa-chevron-right"></button> -->
                         
                         
                         
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
                         <!-- <button class="btn arrow-guides fa-chevron-left"></button> -->
                         <ul id="content" class="lista">
                         
                         <li class="card effect1">
                              <div class="inside-top">
                              <img src="img/series/casapapel/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/outlander/4.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/breakingbad/1.jpg" id="img"> 
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/flash/portada.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/TWD/portada.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/you/portada.png" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/stranger/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/innocents/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/increibles/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/revenant/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/rosie/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/ninos/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/alien/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/bird/1.jpg" id="img">
                              </div>
                         </li>
                 
                         
                         </ul>
                         
                         
                         
                         </div><!--end of module-section-->
                         
                         <span id="controlR" class="right-controls" role="button" aria-label="See Previous Modules">
                         <b class="fa fa-chevron-right fa-chevron-right-extra" aria-hidden="true"></b>
                         </span>
                         <!-- <button class="btn arrow-guides-right fa-chevron-right"></button> -->
                         
                         
                         
                         </div>
          </section>

          <section>
                     <div class="carousel1">
                         <h5><b>Programas de TV sombríos</b></h5>
                    </div>

                    <div id="wrapper">
  
                         <span id="controlL" class="left-controls" role="button" aria-label="See Previous Modules">
                         <b class="fa fa-chevron-left fa-chevron-left-extra" aria-hidden="true"></b>
                         </span>
                         
                         <div class="module-section clearfix">
                         <!-- <button class="btn arrow-guides fa-chevron-left"></button> -->
                         <ul id="content" class="lista">
                         
                         <li class="card effect1">
                              <div class="inside-top">
                              <img src="img/series/casapapel/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/outlander/4.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/breakingbad/1.jpg" id="img"> 
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/flash/portada.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/TWD/portada.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/you/portada.png" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/stranger/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/innocents/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/increibles/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/revenant/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/rosie/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/ninos/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/alien/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/bird/1.jpg" id="img">
                              </div>
                         </li>
                 
                         
                         </ul>
                         
                         
                         
                         </div><!--end of module-section-->
                         
                         <span id="controlR" class="right-controls" role="button" aria-label="See Previous Modules">
                         <b class="fa fa-chevron-right fa-chevron-right-extra" aria-hidden="true"></b>
                         </span>
                         <!-- <button class="btn arrow-guides-right fa-chevron-right"></button> -->
                         
                         
                         
                         </div>
          </section>

          <section>
                     <div class="carousel1">
                         <h5><b>Programas de crímen de EE.UU.</b></h5>
                    </div>

                    <div id="wrapper">
  
                         <span id="controlL" class="left-controls" role="button" aria-label="See Previous Modules">
                         <b class="fa fa-chevron-left fa-chevron-left-extra" aria-hidden="true"></b>
                         </span>
                         
                         <div class="module-section clearfix">
                         <!-- <button class="btn arrow-guides fa-chevron-left"></button> -->
                         <ul id="content" class="lista">
                         
                         <li class="card effect1">
                              <div class="inside-top">
                              <img src="img/series/casapapel/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/outlander/4.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/breakingbad/1.jpg" id="img"> 
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/flash/portada.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/TWD/portada.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/you/portada.png" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/stranger/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/innocents/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/increibles/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/revenant/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/rosie/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/ninos/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/alien/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/bird/1.jpg" id="img">
                              </div>
                         </li>
                 
                         
                         </ul>
                         
                         
                         
                         </div><!--end of module-section-->
                         
                         <span id="controlR" class="right-controls" role="button" aria-label="See Previous Modules">
                         <b class="fa fa-chevron-right fa-chevron-right-extra" aria-hidden="true"></b>
                         </span>
                         <!-- <button class="btn arrow-guides-right fa-chevron-right"></button> -->
                         
                         
                         
                         </div>
          </section>

          <section>
                     <div class="carousel1">
                         <h5><b>Porque viste ##nombre de X serie##</b></h5>
                    </div>

                    <div id="wrapper">
  
                         <span id="controlL" class="left-controls" role="button" aria-label="See Previous Modules">
                         <b class="fa fa-chevron-left fa-chevron-left-extra" aria-hidden="true"></b>
                         </span>
                         
                         <div class="module-section clearfix">
                         <!-- <button class="btn arrow-guides fa-chevron-left"></button> -->
                         <ul id="content" class="lista">
                         
                         <li class="card effect1">
                              <div class="inside-top">
                              <img src="img/series/casapapel/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/outlander/4.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/breakingbad/1.jpg" id="img"> 
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/flash/portada.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/TWD/portada.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/you/portada.png" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/stranger/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/innocents/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/increibles/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/revenant/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/rosie/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/ninos/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/alien/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/bird/1.jpg" id="img">
                              </div>
                         </li>
                 
                         
                         </ul>
                         
                         
                         
                         </div><!--end of module-section-->
                         
                         <span id="controlR" class="right-controls" role="button" aria-label="See Previous Modules">
                         <b class="fa fa-chevron-right fa-chevron-right-extra" aria-hidden="true"></b>
                         </span>
                         <!-- <button class="btn arrow-guides-right fa-chevron-right"></button> -->
                         
                         
                         
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
                         <!-- <button class="btn arrow-guides fa-chevron-left"></button> -->
                         <ul id="content" class="lista">
                         
                         <li class="card effect1">
                              <div class="inside-top">
                              <img src="img/series/casapapel/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/outlander/4.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/breakingbad/1.jpg" id="img"> 
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/flash/portada.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/TWD/portada.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/you/portada.png" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/stranger/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/innocents/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/increibles/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/revenant/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/rosie/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/ninos/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/alien/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/bird/1.jpg" id="img">
                              </div>
                         </li>
                 
                         
                         </ul>
                         
                         
                         
                         </div><!--end of module-section-->
                         
                         <span id="controlR" class="right-controls" role="button" aria-label="See Previous Modules">
                         <b class="fa fa-chevron-right fa-chevron-right-extra" aria-hidden="true"></b>
                         </span>
                         <!-- <button class="btn arrow-guides-right fa-chevron-right"></button> -->
                         
                         
                         
                         </div>
          </section>

          <section>
                     <div class="carousel1">
                         <h5><b>Series y programas de TV inquietantes</b></h5>
                    </div>

                    <div id="wrapper">
  
                         <span id="controlL" class="left-controls" role="button" aria-label="See Previous Modules">
                         <b class="fa fa-chevron-left fa-chevron-left-extra" aria-hidden="true"></b>
                         </span>
                         
                         <div class="module-section clearfix">
                         <!-- <button class="btn arrow-guides fa-chevron-left"></button> -->
                         <ul id="content" class="lista">
                         
                         <li class="card effect1">
                              <div class="inside-top">
                              <img src="img/series/casapapel/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/outlander/4.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/breakingbad/1.jpg" id="img"> 
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/flash/portada.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/TWD/portada.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/you/portada.png" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/stranger/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/innocents/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/increibles/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/revenant/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/rosie/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/ninos/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/alien/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/bird/1.jpg" id="img">
                              </div>
                         </li>
                 
                         
                         </ul>
                         
                         
                         
                         </div><!--end of module-section-->
                         
                         <span id="controlR" class="right-controls" role="button" aria-label="See Previous Modules">
                         <b class="fa fa-chevron-right fa-chevron-right-extra" aria-hidden="true"></b>
                         </span>
                         <!-- <button class="btn arrow-guides-right fa-chevron-right"></button> -->
                         
                         
                         
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
                         <!-- <button class="btn arrow-guides fa-chevron-left"></button> -->
                         <ul id="content" class="lista">
                         
                         <li class="card effect1">
                              <div class="inside-top">
                              <img src="img/series/casapapel/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/outlander/4.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/breakingbad/1.jpg" id="img"> 
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/flash/portada.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/TWD/portada.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/you/portada.png" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/stranger/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/innocents/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/increibles/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/revenant/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/rosie/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/ninos/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/alien/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/bird/1.jpg" id="img">
                              </div>
                         </li>
                 
                         
                         </ul>
                         
                         
                         
                         </div><!--end of module-section-->
                         
                         <span id="controlR" class="right-controls" role="button" aria-label="See Previous Modules">
                         <b class="fa fa-chevron-right fa-chevron-right-extra" aria-hidden="true"></b>
                         </span>
                         <!-- <button class="btn arrow-guides-right fa-chevron-right"></button> -->
                         
                         
                         
                         </div>
          </section>

          <section>
                     <div class="carousel1">
                         <h5><b>Porque viste ##nombre de X serie#</b></h5>
                    </div>

                    <div id="wrapper">
  
                         <span id="controlL" class="left-controls" role="button" aria-label="See Previous Modules">
                         <b class="fa fa-chevron-left fa-chevron-left-extra" aria-hidden="true"></b>
                         </span>
                         
                         <div class="module-section clearfix">
                         <!-- <button class="btn arrow-guides fa-chevron-left"></button> -->
                         <ul id="content" class="lista">
                         
                         <li class="card effect1">
                              <div class="inside-top">
                              <img src="img/series/casapapel/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/outlander/4.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/breakingbad/1.jpg" id="img"> 
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/flash/portada.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/TWD/portada.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/you/portada.png" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/stranger/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/innocents/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/increibles/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/revenant/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/rosie/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/ninos/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/alien/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/bird/1.jpg" id="img">
                              </div>
                         </li>
                 
                         
                         </ul>
                         
                         
                         
                         </div><!--end of module-section-->
                         
                         <span id="controlR" class="right-controls" role="button" aria-label="See Previous Modules">
                         <b class="fa fa-chevron-right fa-chevron-right-extra" aria-hidden="true"></b>
                         </span>
                         <!-- <button class="btn arrow-guides-right fa-chevron-right"></button> -->
                         
                         
                         
                         </div>
          </section>

          <section>
                     <div class="carousel1">
                         <h5><b>Dramas de TV emocionantes</b></h5>
                    </div>

                    <div id="wrapper">
  
                         <span id="controlL" class="left-controls" role="button" aria-label="See Previous Modules">
                         <b class="fa fa-chevron-left fa-chevron-left-extra" aria-hidden="true"></b>
                         </span>
                         
                         <div class="module-section clearfix">
                         <!-- <button class="btn arrow-guides fa-chevron-left"></button> -->
                         <ul id="content" class="lista">
                         
                         <li class="card effect1">
                              <div class="inside-top">
                              <img src="img/series/casapapel/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/outlander/4.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/breakingbad/1.jpg" id="img"> 
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/flash/portada.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/TWD/portada.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/you/portada.png" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/stranger/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/innocents/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/increibles/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/revenant/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/rosie/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/ninos/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/alien/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/bird/1.jpg" id="img">
                              </div>
                         </li>
                 
                         
                         </ul>
                         
                         
                         
                         </div><!--end of module-section-->
                         
                         <span id="controlR" class="right-controls" role="button" aria-label="See Previous Modules">
                         <b class="fa fa-chevron-right fa-chevron-right-extra" aria-hidden="true"></b>
                         </span>
                         <!-- <button class="btn arrow-guides-right fa-chevron-right"></button> -->
                         
                         
                         
                         </div>
          </section>

          <section>
                     <div class="carousel1">
                         <h5><b>Programas melosos</b></h5>
                    </div>

                    <div id="wrapper">
  
                         <span id="controlL" class="left-controls" role="button" aria-label="See Previous Modules">
                         <b class="fa fa-chevron-left fa-chevron-left-extra" aria-hidden="true"></b>
                         </span>
                         
                         <div class="module-section clearfix">
                         <!-- <button class="btn arrow-guides fa-chevron-left"></button> -->
                         <ul id="content" class="lista">
                         
                         <li class="card effect1">
                              <div class="inside-top">
                              <img src="img/series/casapapel/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/outlander/4.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/breakingbad/1.jpg" id="img"> 
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/flash/portada.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/TWD/portada.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/you/portada.png" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/stranger/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/innocents/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/increibles/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/revenant/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/rosie/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/ninos/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/alien/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/bird/1.jpg" id="img">
                              </div>
                         </li>
                 
                         
                         </ul>
                         
                         
                         
                         </div><!--end of module-section-->
                         
                         <span id="controlR" class="right-controls" role="button" aria-label="See Previous Modules">
                         <b class="fa fa-chevron-right fa-chevron-right-extra" aria-hidden="true"></b>
                         </span>
                         <!-- <button class="btn arrow-guides-right fa-chevron-right"></button> -->
                         
                         
                         
                         </div>
          </section>

          <section>
                     <div class="carousel1">
                         <h5><b>Porque viste #nombre de X serie#</b></h5>
                    </div>

                    <div id="wrapper">
  
                         <span id="controlL" class="left-controls" role="button" aria-label="See Previous Modules">
                         <b class="fa fa-chevron-left fa-chevron-left-extra" aria-hidden="true"></b>
                         </span>
                         
                         <div class="module-section clearfix">
                         <!-- <button class="btn arrow-guides fa-chevron-left"></button> -->
                         <ul id="content" class="lista">
                         
                         <li class="card effect1">
                              <div class="inside-top">
                              <img src="img/series/casapapel/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/outlander/4.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/breakingbad/1.jpg" id="img"> 
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/flash/portada.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/TWD/portada.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/you/portada.png" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/stranger/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/innocents/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/increibles/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/revenant/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/rosie/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/ninos/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/alien/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/bird/1.jpg" id="img">
                              </div>
                         </li>
                 
                         
                         </ul>
                         
                         
                         
                         </div><!--end of module-section-->
                         
                         <span id="controlR" class="right-controls" role="button" aria-label="See Previous Modules">
                         <b class="fa fa-chevron-right fa-chevron-right-extra" aria-hidden="true"></b>
                         </span>
                         <!-- <button class="btn arrow-guides-right fa-chevron-right"></button> -->
                         
                         
                         
                         </div>
          </section>

          <section>
                     <div class="carousel1">
                         <h5><b>Programas de TV emocionantes</b></h5>
                    </div>

                    <div id="wrapper">
  
                         <span id="controlL" class="left-controls" role="button" aria-label="See Previous Modules">
                         <b class="fa fa-chevron-left fa-chevron-left-extra" aria-hidden="true"></b>
                         </span>
                         
                         <div class="module-section clearfix">
                         <!-- <button class="btn arrow-guides fa-chevron-left"></button> -->
                         <ul id="content" class="lista">
                         
                         <li class="card effect1">
                              <div class="inside-top">
                              <img src="img/series/casapapel/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/outlander/4.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/breakingbad/1.jpg" id="img"> 
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/flash/portada.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/TWD/portada.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/you/portada.png" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/stranger/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/innocents/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/increibles/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/revenant/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/rosie/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/ninos/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/alien/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/bird/1.jpg" id="img">
                              </div>
                         </li>
                 
                         
                         </ul>
                         
                         
                         
                         </div><!--end of module-section-->
                         
                         <span id="controlR" class="right-controls" role="button" aria-label="See Previous Modules">
                         <b class="fa fa-chevron-right fa-chevron-right-extra" aria-hidden="true"></b>
                         </span>
                         <!-- <button class="btn arrow-guides-right fa-chevron-right"></button> -->
                         
                         
                         
                         </div>
          </section>

          <section>
                     <div class="carousel1">
                         <h5><b>Programas de TV con mujeres protagonistas</b></h5>
                    </div>

                    <div id="wrapper">
  
                         <span id="controlL" class="left-controls" role="button" aria-label="See Previous Modules">
                         <b class="fa fa-chevron-left fa-chevron-left-extra" aria-hidden="true"></b>
                         </span>
                         
                         <div class="module-section clearfix">
                         <!-- <button class="btn arrow-guides fa-chevron-left"></button> -->
                         <ul id="content" class="lista">
                         
                         <li class="card effect1">
                              <div class="inside-top">
                              <img src="img/series/casapapel/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/outlander/4.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/breakingbad/1.jpg" id="img"> 
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/flash/portada.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/TWD/portada.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/you/portada.png" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/stranger/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/innocents/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/increibles/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/revenant/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/rosie/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/ninos/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/alien/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/bird/1.jpg" id="img">
                              </div>
                         </li>
                 
                         
                         </ul>
                         
                         
                         
                         </div><!--end of module-section-->
                         
                         <span id="controlR" class="right-controls" role="button" aria-label="See Previous Modules">
                         <b class="fa fa-chevron-right fa-chevron-right-extra" aria-hidden="true"></b>
                         </span>
                         <!-- <button class="btn arrow-guides-right fa-chevron-right"></button> -->
                         
                         
                         
                         </div>
          </section>

          <section>
                     <div class="carousel1">
                         <h5><b>Programas de TV violentos</b></h5>
                    </div>

                    <div id="wrapper">
  
                         <span id="controlL" class="left-controls" role="button" aria-label="See Previous Modules">
                         <b class="fa fa-chevron-left fa-chevron-left-extra" aria-hidden="true"></b>
                         </span>
                         
                         <div class="module-section clearfix">
                         <!-- <button class="btn arrow-guides fa-chevron-left"></button> -->
                         <ul id="content" class="lista">
                         
                         <li class="card effect1">
                              <div class="inside-top">
                              <img src="img/series/casapapel/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/outlander/4.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/breakingbad/1.jpg" id="img"> 
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/flash/portada.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/TWD/portada.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/you/portada.png" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/stranger/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/innocents/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/increibles/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/revenant/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/rosie/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/ninos/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/alien/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/bird/1.jpg" id="img">
                              </div>
                         </li>
                 
                         
                         </ul>
                         
                         
                         
                         </div><!--end of module-section-->
                         
                         <span id="controlR" class="right-controls" role="button" aria-label="See Previous Modules">
                         <b class="fa fa-chevron-right fa-chevron-right-extra" aria-hidden="true"></b>
                         </span>
                         <!-- <button class="btn arrow-guides-right fa-chevron-right"></button> -->
                         
                         
                         
                         </div>
          </section>

          <section>
                     <div class="carousel1">
                         <h5><b>Dramas de TV</b></h5>
                    </div>

                    <div id="wrapper">
  
                         <span id="controlL" class="left-controls" role="button" aria-label="See Previous Modules">
                         <b class="fa fa-chevron-left fa-chevron-left-extra" aria-hidden="true"></b>
                         </span>
                         
                         <div class="module-section clearfix">
                         <!-- <button class="btn arrow-guides fa-chevron-left"></button> -->
                         <ul id="content" class="lista">
                         
                         <li class="card effect1">
                              <div class="inside-top">
                              <img src="img/series/casapapel/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/outlander/4.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/breakingbad/1.jpg" id="img"> 
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/flash/portada.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/TWD/portada.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/you/portada.png" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/stranger/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/innocents/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/increibles/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/revenant/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/rosie/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/ninos/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/alien/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/bird/1.jpg" id="img">
                              </div>
                         </li>
                 
                         
                         </ul>
                         
                         
                         
                         </div><!--end of module-section-->
                         
                         <span id="controlR" class="right-controls" role="button" aria-label="See Previous Modules">
                         <b class="fa fa-chevron-right fa-chevron-right-extra" aria-hidden="true"></b>
                         </span>
                         <!-- <button class="btn arrow-guides-right fa-chevron-right"></button> -->
                         
                         
                         
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
                         <!-- <button class="btn arrow-guides fa-chevron-left"></button> -->
                         <ul id="content" class="lista">
                         
                         <li class="card effect1">
                              <div class="inside-top">
                              <img src="img/series/casapapel/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/outlander/4.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/breakingbad/1.jpg" id="img"> 
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/flash/portada.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/TWD/portada.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/you/portada.png" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/stranger/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/innocents/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/increibles/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/revenant/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/rosie/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/ninos/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/alien/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/bird/1.jpg" id="img">
                              </div>
                         </li>
                 
                         
                         </ul>
                         
                         
                         
                         </div><!--end of module-section-->
                         
                         <span id="controlR" class="right-controls" role="button" aria-label="See Previous Modules">
                         <b class="fa fa-chevron-right fa-chevron-right-extra" aria-hidden="true"></b>
                         </span>
                         <!-- <button class="btn arrow-guides-right fa-chevron-right"></button> -->
                         
                         
                         
                         </div>
          </section>

          <section>
                     <div class="carousel1">
                         <h5><b>Porque viste #nombre X serie#</b></h5>
                    </div>

                    <div id="wrapper">
  
                         <span id="controlL" class="left-controls" role="button" aria-label="See Previous Modules">
                         <b class="fa fa-chevron-left fa-chevron-left-extra" aria-hidden="true"></b>
                         </span>
                         
                         <div class="module-section clearfix">
                         <!-- <button class="btn arrow-guides fa-chevron-left"></button> -->
                         <ul id="content" class="lista">
                         
                         <li class="card effect1">
                              <div class="inside-top">
                              <img src="img/series/casapapel/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/outlander/4.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/breakingbad/1.jpg" id="img"> 
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/flash/portada.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/TWD/portada.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/you/portada.png" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/stranger/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/innocents/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/increibles/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/revenant/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/rosie/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/ninos/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/alien/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/bird/1.jpg" id="img">
                              </div>
                         </li>
                 
                         
                         </ul>
                         
                         
                         
                         </div><!--end of module-section-->
                         
                         <span id="controlR" class="right-controls" role="button" aria-label="See Previous Modules">
                         <b class="fa fa-chevron-right fa-chevron-right-extra" aria-hidden="true"></b>
                         </span>
                         <!-- <button class="btn arrow-guides-right fa-chevron-right"></button> -->
                         
                         
                         
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
                         <!-- <button class="btn arrow-guides fa-chevron-left"></button> -->
                         <ul id="content" class="lista">
                         
                         <li class="card effect1">
                              <div class="inside-top">
                              <img src="img/series/casapapel/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card" id="c2">
                              <div class="inside-top" id="cont">
                              <img src="img/series/outlander/4.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/breakingbad/1.jpg" id="img"> 
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/flash/portada.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/TWD/portada.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/you/portada.png" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/stranger/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/series/innocents/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/increibles/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/revenant/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/rosie/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/ninos/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/alien/1.jpg" id="img">
                              </div>
                         </li>
                              <li class="card">
                              <div class="inside-top">
                              <img src="img/peliculas/bird/1.jpg" id="img">
                              </div>
                         </li>
                 
                         
                         </ul>
                         
                         
                         
                         </div><!--end of module-section-->
                         
                         <span id="controlR" class="right-controls" role="button" aria-label="See Previous Modules">
                         <b class="fa fa-chevron-right fa-chevron-right-extra" aria-hidden="true"></b>
                         </span>
                         <!-- <button class="btn arrow-guides-right fa-chevron-right"></button> -->
                         
                         
                         
                         </div>
          </section>

          <input type="txt" class="d-none" id="idinicio" value="<?php echo $_SESSION["CodUsuario"];?>">
          <input type="txt" class="d-none" id="idpant" value="<?php echo $_SESSION["idPantalla"];?>">

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
    <script src="js/controlador-contenido.js"></script>
    <script src="js/controlador-inicio.js"></script>
    <script src="js/controlador.js"></script>
   

</body>
</html>