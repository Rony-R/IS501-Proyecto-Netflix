
<?php

    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Netflix</title>
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css">
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

                            <div class="collapse navbar-collapse" id="navbarCollapse" >
                              <ul class="navbar-nav nav-margen" >
                                <li class="nav-item active">
                                     <a class="nav-link" href="Inicio.php" ><b>Inicio</b></a>      
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
                                             <img style="width:30px" src="img/profile.png">
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                             <img class="img-nav" src="img/profile.png"><a class="dropdown-item" href="#">Cuenta2</a>
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

    <div id="main-container">

        <div class="col-lg-7">
            <h1 id="h1-cambiar-correo">Numero de Telefono</h1>

            <input disabled id ="correo-actual3" type="text" class="form-control d-none" value="<?php echo$_SESSION["Usuario"]?>"> <br>

            <p id="p1">
                Su número de teléfono se utilizará si olvida su contraseña y para mensajes importantes de la cuenta.
            </p>
        
            <label class="label-upd-corr">Número de teléfono móvil</label>
            <input id ="new-phone" type="text" class="form-control">
            <div id="val-phone1" class="d-none verde">Correcto</div>
            <div id="val-phone2" class="d-none naranja">Telefono Vacio</div>

            <label class="label-upd-corr mt-4">Contraseña Actual</label>
            <input id ="contra-phone" type="password" class="form-control">
            <div id="val-contra-phone1" class="d-none verde">Correcto</div>
            <div id="val-contra-phone3" class="d-none naranja">Contraseña Incorrecta</div>
        
            <button id="save-upd-pone" class="btn btn-primary mt-5">Guardar</button>
            <button id="borrar-telefono" class="btn btn-secondary mt-5">Borrar Numero de Telefono</button>
            <button id="cancel-upd-corr" class="btn btn-secondary mt-5">Cancelar</button>
        </div>

        <div class="col-lg-5"></div>

    </div>

    <hr class="hr-ft">
    <section class="footer footer-account">
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
    <script src="js/controlador.js"></script>
   

</body>
</html>