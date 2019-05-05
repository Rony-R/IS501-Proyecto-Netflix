<?php  session_start(); 
?>
<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Netflix</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sticky-footer-navbar/">
    <link href="css/inicio.css" type="text/css" rel="stylesheet">
    <link href="css/all.css" type="text/css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/config-cuenta.css" rel="stylesheet">
    <link href="css/config-subtitulos.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="img/favicon.ico">


  </head>
  <body class="d-flex flex-column h-100">
  <header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <img src="img/letras.png" alt="Netflix" width="8%">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item ">
          <a class="nav-link" href="Inicio.php">Inicio<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item ">
            <a class="nav-link" href="#">Programas de TV<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item ">
            <a class="nav-link" href="peliculas.php">Películas<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item ">
              <a class="nav-link" href="actividad-reciente.php">Agregados recientemente<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="miLista.php">Mi lista<span class="sr-only">(current)</span></a>
          </li>
      </ul>
     

      <ul id="nav-2" class="navbar-nav  nav-margen">
        <li class="nav-item active">
             <a href=""><i class="fas fa-search iconos"></i></a>      
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#" style="padding-right:25px; padding-left:25px">NIÑOS</a>
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

<!-- Begin page content -->
<main  role="main" class="flex-shrink-0">
  <div class="container">
      <div class="row">
           <div class="col-12 col-sm-8">
                 <h1>Aspecto de los subtítulos</h1>
                 <div id="div-text" class="div-sub" style="background-image: url('img/fondo-sub.jpg') ;">
                    <div id="div-ventana-text">
                      <span id="span-text">Esta configuración afectará a los subtítulos en todos los dispositivos compatibles.</span>
                    </div>
                 
                 </div>
           </div>
           <div class="col-12 col-sm-4">
           </div>
      </div>
      <div class="row">
          <div class="col-12 col-sm-5">
           <span id="spn-fuente">Fuente </span>
           <div class="row">
              <div class="col-12 col-sm-8">
                  <div class="form-group">
                      <div class="dropdown">
                          <button class="btn btn-secondary-dd " type="button" id="dp-fuentes" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">                      
                            Staatliche
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dp-fuentes">
                            <a id="a-fuente-inconsolata" class="dropdown-item " href="#" active >Inconsolata</a>
                            <a id="a-fuente-lora" class="dropdown-item" href="#">Lora</a>
                            <a id="a-fuente-openSans" class="dropdown-item" href="#">OpenSans</a>
                            <a id="a-fuente-oswald" class="dropdown-item" href="#">Oswald</a>
                            <a id="a-fuente-slabo" class="dropdown-item" href="#">Slabo</a>
                            <a id="a-fuente-staatliche" class="dropdown-item" href="#">Staatliche</a>
                          </div>
                        </div>
                    </div>
              </div>
              <div class="col-12 col-sm-4">
                <div class="dropdown">
                  <a  class="btn btn-secondary dropdown-toggle cpColor cpMulti cpSquare large" href="#" role="button" id="color-fuente" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  </a>
                  <div class="dropdown-menu" aria-labelledby="color-fuente">
                    <a href="#" id="color-fuente-blanco" class="cpColor cpSelected cpMulti cpSquare large cpMarg-1 cpColorWHITE">Blanco</a>
                    <a href="#" id="color-fuente-negro" class="cpColor cpMulti cpSquare large cpColorBLACK">Negro</a>
                    <a href="#" id="color-fuente-rojo" class="cpColor cpMulti cpSquare large cpColorRED">Rojo</a>
                    <a href="#" id="color-fuente-verde" class="cpColor cpMulti cpSquare large cpMarg-1 cpColorGREEN">Verde</a>
                    <a href="#" id="color-fuente-azul" class="cpColor cpMulti cpSquare large cpColorBLUE">Azul</a>
                    <a href="#" id="color-fuente-amarillo" class="cpColor cpMulti cpSquare large cpColorYELLOW">Amarillo</a>
                    <a href="#" id="color-fuente-magenta" class="cpColor cpMulti cpSquare large cpMarg-1 cpColorMAGENTA">Magenta</a>
                    <a href="#" id="color-fuente-azul-turquesa" class="cpColor cpMulti cpSquare large cpColorCYAN">Azul turquesa</a>
                    <div class="cpFooter">
                    <div class="ui-binary-input">
                    <div class="helper"></div></div></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-3">
            <label id="lbl-tam">Tamaño del texto:</label> <label id="lbl-tam-text">Grande</label> 
            <div class="btn-group" role="group" aria-label="Basic example">
              <button id="btn-tam-peq" type="button" class="btn btn-secondary btn-tam" >A</button>
              <button id="btn-tam-med" type="button" class="btn btn-secondary btn-tam">A</button>
              <button id="btn-tam-grand" type="button" class="btn btn-secondary btn-tam">A</button>
            </div>
          </div>
          <div class="col-12 col-sm-4">
          </div>
      </div>
      <div class="row">
        <div class="col-12 col-sm-5">
        <span id="spn-sombra">Sombra</span>
         <div class="row">
            <div class="col-12 col-sm-8">
                <div class="form-group">
                  <div class="dropdown">
                    <button class="btn btn-secondary-dd " type="button" id="dp-sombras" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Sombra paralela
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dp-sombras">
                      <a id="a-sombra-ninguna" class="dropdown-item " href="#">Ninguna</a>
                      <a id="a-sombra-paralela" class="dropdown-item " href="#">Sombra paralela</a>
                      <a id="a-sombra-uniforme" class="dropdown-item " href="#">Uniforme</a>
                    </div>
                  </div>
                </div>
            </div>
            <div class="col-12 col-sm-4">
                <div class="dropdown">
                    <a  class="btn btn-secondary dropdown-toggle cpColor cpMulti cpSquare large" href="#" role="button" id="color-sombra" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    </a>
                    <div class="dropdown-menu" aria-labelledby="color-sombra">
                      <a href="#" id="color-sombra-blanco" class="cpColor cpSelected cpMulti cpSquare large cpMarg-1 cpColorWHITE">Blanco</a>
                      <a href="#" id="color-sombra-negro" class="cpColor cpMulti cpSquare large cpColorBLACK">Negro</a>
                      <a href="#" id="color-sombra-rojo" class="cpColor cpMulti cpSquare large cpColorRED">Rojo</a>
                      <a href="#" id="color-sombra-verde" class="cpColor cpMulti cpSquare large cpMarg-1 cpColorGREEN">Verde</a>
                      <a href="#" id="color-sombra-azul" class="cpColor cpMulti cpSquare large cpColorBLUE">Azul</a>
                      <a href="#" id="color-sombra-amarillo" class="cpColor cpMulti cpSquare large cpColorYELLOW">Amarillo</a>
                      <a href="#" id="color-sombra-magenta" class="cpColor cpMulti cpSquare large cpMarg-1 cpColorMAGENTA">Magenta</a>
                      <a href="#" id="color-sombra-azul-turquesa" class="cpColor cpMulti cpSquare large cpColorCYAN">Azul turquesa</a>
                      <div class="cpFooter">
                      <div class="ui-binary-input">
                      <div class="helper"></div></div></div>
                    </div>
                </div>
            </div>
       </div>
        </div>    
        <div class="col-12 col-sm-2">
          <span id="spn-fondo">Fondo</span>
          <div class="dropdown">
              <a class="btn btn-secondary dropdown-toggle cpColor cpMulti cpSquare large cpMarg" href="#" role="button" id="color-fondo" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              </a>
              <div class="dropdown-menu" aria-labelledby="color-fondo">
                <a  id="color-fondo-ninguno" href="#" class="cpColor cpFeatured large cpColorNONE cpColor-botton">Ninguno</a>
                <a  id="color-fondo-blanco" href="#" class="cpColor cpSelected cpMulti cpSquare large cpMarg  cpMarg cpColorWHITE" >Blanco</a>
                <a  id="color-fondo-negro" href="#" class="cpColor cpMulti cpSquare large cpColorBLACK">Negro</a>
                <a  id="color-fondo-rojo" href="#" class="cpColor cpMulti cpSquare large cpColorRED">Rojo</a>
                <a  id="color-fondo-verde" href="#" class="cpColor cpMulti cpSquare large cpMarg cpColorGREEN ">Verde</a>
                <a  id="color-fondo-azul" href="#" class="cpColor cpMulti cpSquare large cpColorBLUE">Azul</a>
                <a  id="color-fondo-amarillo" href="#" class="cpColor cpMulti cpSquare large cpColorYELLOW">Amarillo</a>
                <a  id="color-fondo-magenta" href="#" class="cpColor cpMulti cpSquare large cpMarg cpColorMAGENTA">Magenta</a>
                <a  id="color-fondo-azul-turquesa" href="#" class="cpColor cpMulti cpSquare large cpColorCYAN">Azul turquesa</a>
                <div class="cpFooter">
                <div class="ui-binary-input">
                <div class="helper"></div></div></div>
              </div>
            </div>
        </div>
        <div class="col-12 col-sm-2">
            <span id="spn-ventana">Ventana</span> 
            <div class="dropdown">
                <a class="btn btn-secondary dropdown-toggle cpColor cpMulti cpSquare large cpMarg" href="#" role="button" id="color-ventana" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                </a>
                <div class="dropdown-menu" aria-labelledby="color-ventana">
                  <a id="color-ventana-ninguno" href="#" class="cpColor cpFeatured large cpColorNONE cpColor-botton"> Ninguno</a>
                  <a id="color-ventana-blanco" href="#" class="cpColor cpSelected cpMulti cpSquare large cpMarg cpColorWHITE">Blanco</a>
                  <a id="color-ventana-negro" href="#" class="cpColor cpMulti cpSquare large cpColorBLACK">Negro</a>
                  <a id="color-ventana-rojo" href="#" class="cpColor cpMulti cpSquare large cpColorRED">Rojo</a>
                  <a id="color-ventana-verde" href="#" class="cpColor cpMulti cpSquare large cpMarg cpColorGREEN">Verde</a>
                  <a id="color-ventana-azul" href="#" class="cpColor cpMulti cpSquare large cpColorBLUE">Azul</a>
                  <a id="color-ventana-amarillo" href="#" class="cpColor cpMulti cpSquare large cpColorYELLOW">Amarillo</a>
                  <a id="color-ventana-magenta" href="#" class="cpColor cpMulti cpSquare large cpMarg cpColorMAGENTA">Magenta</a>
                  <a id="color-ventana-azul-turquesa" href="#" class="cpColor cpMulti cpSquare large cpColorCYAN">Azul turquesa</a>
                  <div class="cpFooter">
                  <div class="ui-binary-input">
                  <div class="helper"></div></div></div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-4">  
        </div>

      </div>
   <button id="btn-guardar" type="button" class="btn btn-primary btn-funcion btn-gruardar ">Guardar</button>
   <button id="btn-restablecer-valores" type="button" class="btn btn-primary btn-funcion btn-otros">Restablecer valores predeterminados</button>
   <button id="btn-cancelar" type="button" class="btn btn-primary btn-funcion btn-otros">Cancelar</button>
  </div>
</main>


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



<script src="js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/controlador-ST.js"></script>
</body>
</html>

