<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Control Parental</title>
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
    <link href="css/control-parental.css" type="text/css" rel="stylesheet">
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
//codigo pantalla                            <img id="codigo-pantalla" style="width:30px" src="img/profile.png">
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

          <section class="seccion" >
      <!--      <div id="parte1">
                    <div style="padding-bottom:4%">
                        <h2>Controles Parentales</h2>
                        <br>
                        <h5>Ingresa la contraseña de tu cuenta para configurar los controles parentales.</h5>
                        <br>
                        <div id="validacion">
                            <input type="text" class="is-invalid" id="pass" style="height:44px; font-size: 16px; width: 300px">
                        </div>
                        
                    </div>  
                    <div>
                        <button type="button" id="continuar" class="btn btn-primary" style="float:left">Continuar</button>
                        <button type="button" id="cancelar" class="btn " style="float:left; background-color:#EAEAEA">Cancelar</button>
                    </div>  
            </div>     -->
            <div id="parte2">
                    <div style="padding-bottom:4%">
                        <h2>Controles Parentales</h2>
                        <br>
                        <h5>PIn de control parental (4 dígitos)</h5>
                        <h6>Se puede usar tu PIN para restringir la reproducción de ciertos títulos especificados más abajo.</h6>
                        <br>
                        <div>
                            <input type="tel" maxlength='4' class="pin1" tabindex="0">
                            <button type="button" id="guardar" class="btn ">Guardar</button>
                        </div>                  
                        <br>
                        <hr>

                        <div>
                            <h5>Restricción de clasificación por edad</h5>
                            <h6><b>La protección de PIN está desactivada.</b> Todo el contenido que no hayas restringido específicamente más abajo estará disponible sin PIN.</h6>
                        </div>

                        <div>
                                <div id="caja">
                                    <div style="padding:20px">
                                        <h6>Niños pequeños</h6> <br>
                                        <div id="caja2"><p>Todos</p></div>
                                    </div>
                                </div>

                                <div id="caja">
                                    <div style="padding:20px">
                                        <h6>Jovencitos</h6> <br>
                                        <div id="caja2"><p>7+</p></div>
                                    </div>
                                </div>

                                <div id="caja">
                                    <div style="padding:20px">
                                        <h6>Adolescentes</h6> <br>
                                        <div id="caja2"><p>13+</p></div>
                                    </div>
                                </div>

                                <div id="caja">
                                    <div style="padding:20px">
                                        <h6>Adultos</h6> <br>
                                        <div id="caja2"><p>16+</p></div>
                                    </div>
                                </div>
                        </div>
                        <br><br><br><br><br>
                        <hr>
                        <div>
                            <h5>Restricción de títulos específicos</h5>
                            <h6>Puedes especificar títulos individuales que requieren el PIN para comenzar la reproducción independientemente de la clasificación por edad.</h6>
                            <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Ingresa el nombre de programa o película" style="width:350px;float:left">
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
    <script src="js/controlador-actividad.js"></script>
   

</body>
</html>