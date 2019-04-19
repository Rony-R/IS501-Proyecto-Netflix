<?php include("ajax/seguridad-reg.php"); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Netflix Honduras</title>
    <link rel="icon" type="image/png" href="img/favicon.ico">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/pricing/">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/registro-basico.css" rel="stylesheet">
    <link href="css/registro-regform.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  </head>
  <body>
      <div id="head" class="d-flex flex-column  p-3 px-md-4 mb-3  bg-white border-bottom shadow-sm">
        <div class="row">
            <div class="col-12 col-sm-2 margin-logo">
                <img src="img/letras.png" alt="Netflix" width="75%">
            </div>
            <div class="col-12 col-sm-7">
            </div>
            <div class="col-12 col-sm-3 letras-img">
                <a id="a-iniciar-sesion" href="#">Inicia sesión</a>
            </div>
        </div>        
      </div>
      <input type="text" class="form-control" id="input-pag"  value="4">
      <div id="body" class="container margin-sup-1">    
          <div class="row" >
              <div class="col-1 col-sm-1 col-md-3"></div>
              <div class="col-10 col-sm-8 col-md-6">
                  <span class="lead text-paso">PASO <span class="bold-txt">2</span> DE <span class="bold-txt">3</span></span>
                  <h1 class="lead text-selecciona text-selecciona-2">Suscríbete para empezar tu mes gratis</h1>  
                  <span id="span-2">¡Faltan solo dos pasos!</span><br>
                  <span id="span-2">También odiamos el papeleo.</span>
                  <h1 class="lead text-selecciona text-selecciona-3">Crea tu cuenta.</h1>  
                  <form>
                      <div class="form-group">
                        <input type="text" class="form-control" id="txt-correo" placeholder="Correo electrónico" onkeyup="validarEmail(this.value)" >
                        <div class="valid-feedback">
                          Este campo esta correcto!
                        </div>
                        <div class="invalid-feedback">
                          Este campo esta incorrecto
                        </div>
                      </div>
                      <div class="form-group">
                        <input type="password" class="form-control" id="txt-contrasenia" placeholder="Contraseña" value="">
                        <div class="valid-feedback">
                          Este campo esta correcto!
                        </div>
                        <div class="invalid-feedback">
                          Este campo esta incorrecto
                        </div>
                      </div>
              
                  </form>
                  <button type="button" class="btn btn-danger" id="btn-continuar-2">CONTINUAR</button> 
              </div>
              <div class="col-1 col-sm-2 col-md-4 col-md-3"></div>
          </div>
      </div>  
   

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/controlador-R.js"></script>
  </body>
  <footer class="border-top margin-sup" id ="footer-gray">
    <div class="row">
      <div class="col-1 col-md-1">
        
      </div>
      <div class="col-11 col-md-11">
          <div class="enlace-gris-footer">¿Preguntas? Llama al<a href="#" id="a-gris-1"> +1 (408) 514-5239 (USA)</a></div>
      </div>
    </div>
    <div class="row"  id="row-1-footer">
        <div class="col-md-1">
        </div>
        <div class="col-6 col-sm-3 col-md-2">
            <a href="#" id="a-gris-2">Preguntas frecuentes</a>
        </div>
        <div class="col-6 col-sm-3 col-md-2">
            <a href="#" id="a-gris-4">Centro de ayuda</a>
        </div>
        <div class="col-6 col-sm-3 col-md-2">
            <a href="#" id="a-gris-6">Términos de uso</a>
        </div>
        <div class="col-6 col-sm-3 col-md-2">
            <a href="#" id="a-gris-7">Privacidad</a>
        </div>
        <div class="col-md-8">
      </div>
    </div>

    <div class="row" id="row-2-footer">
       <div class="col-md-1">
       </div>
       <div class="col-6 col-sm-3 col-md-2">
          <a href="#" id="a-gris-3">Preferencias de cookies</a>
       </div>
       <div class="col-6 col-sm-3 col-md-2">
         <a href="#" id="a-gris-5">Información corporativa</a>
       </div>
       <div class="col-6 col-sm-3 col-md-2">
       </div>
       <div class="col-6 col-sm-3 col-md-2">
       </div>
    </div>
    <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-6 col-sm-2 col-md-2 background-select select-1">
                   <i class="fas fa-globe"></i>          
                   <select class="nfSelect">
                        <option>Español</option>
                        <option>Ingles</option>
                   </select>
                     
            </div>
            <div class="col-6 col-sm-3 col-md-2">
            
         </div>
  </footer>
  
</html>