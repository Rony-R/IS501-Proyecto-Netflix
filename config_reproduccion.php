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
    <link href="css/config-reproduccion.css" rel="stylesheet">

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
                 <h1>Configuración de reproducción</h1> 
           </div>
           <div class="col-12 col-sm-4">
           </div>
      </div>
      
      <form>
        <h4>Uso de datos por pantalla</h4>
        <fieldset class="form-group">
          <div class="row">
            <div class="col-sm-10">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="rbt-uso-datos" id="rbt-automatica" value="1" checked>
                <label class="form-check-label tip-rep" for="rbt-automatica">
                    Automática
                </label>
                <div class="row">
                    <label class="descrip">
                        Uso de datos y calidad de video predeterminados
                    </label>
                </div>
              </div>
              <div class="form-check">
                  <input class="form-check-input" type="radio" name="rbt-uso-datos" id="rbt-baja" value="2" >
                  <label class="form-check-label tip-rep" for="rbt-baja">
                      Baja
                  </label>
                  <div class="row">
                      <label class="descrip">
                          Calidad de video básica, hasta 0.3 GB por hora
                      </label>
                  </div>
              </div>
              <div class="form-check">
                  <input class="form-check-input" type="radio" name="rbt-uso-datos" id="rbt-media" value="3" >
                  <label class="form-check-label tip-rep" for="rbt-media">
                      Media
                  </label>
                  <div class="row">
                      <label class="descrip">
                          Calidad de video estándar, hasta 0.7 GB por hora
                      </label>
                  </div>
              </div>
              <div class="form-check">
                  <input class="form-check-input" type="radio" name="rbt-uso-datos" id="rbt-alta" value="4">
                  <label class="form-check-label tip-rep" for="rbt-alta">
                     Alta
                  </label>
                  <div class="row">
                      <label class="descrip">
                          La mejor calidad de video, hasta 3 GB por hora para HD, 7 GB por hora para Ultra HD
                      </label>
                  </div>
              </div>
            </div>
          </div>
        </fieldset>
        <h4>Reproducción automática</h4>
        <div class="form-group row">
          <div class="col-sm-12">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="chk-tipo-rep" >
              <label class="form-check-label " for="chk-tipo-rep">
                Reproducir el siguiente episodio automáticamente
              </label>
            </div>
          </div>
        </div>
      </form>   

   <button id="btn-guardar" type="button" class="btn btn-primary btn-funcion btn-gruardar ">Guardar</button>
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


<script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/controlador-CR.js"></script>
</body>
</html>