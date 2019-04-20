<?php include("ajax/seguridad-reg.php");
?>
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
    <link href="css/registro-plataforma.css" rel="stylesheet">
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
             <a id="a-iniciar-sesion" href="users.html" onclick="location.href='ajax/logout-reg.php'">Inicia sesión</a>
             </div>
         </div>        
      </div>
      <input type="text" class="form-control ocultar-elemento" id="input-pag"  value="2">
      <div id="body">
         <div class="container">    
            <span class="lead text-paso padding-enc ">PASO <span class="bold-txt">1</span> DE <span class="bold-txt">3</span></span>
            <h1 class="lead text-selecciona padding-enc">Selecciona el plan ideal para ti.</h1>
    
            <div class="row border-bottom-tab padding-bottom-box">
                <div class="col-12 col-sm-6"></div> 
                <div class="col-12 col-sm-6">
                      <div class="row">
                         <div id="div-basico"  class="col-4 col-sm-3 element-box">
                            <span class="white txt-negro element-box-1">Básico</span>
                         </div>
                         <div id="div-estandar" class="col-4 col-sm-3 txt-center element-box">
                            <span  class="white txt-negro">Estándar</span>
                         </div>
                     
                         <div id="div-premium" class="col-4 col-sm-3 txt-center element-box">
                            <span class="white txt-negro"> Premiun</span>
                         </div>
                      </div>
                </div>
             </div>    
     
            <div class="row border-bottom-tab ">
               <div class="col-12 col-sm-6">
                  <span class="txt-negro">Precio mensual cuando termine el mes gratis, el 03‑23‑19</span>
               </div>
               <div  class="col-4 col-sm-2 txt-center">
                  <span id="e-1-1" class="txt-negro element-tab">USD7.99</span>
               </div>
               <div class="col-4 col-sm-2 txt-center">
                  <span id="e-1-2" class="txt-negro element-tab ">USD10.99</span>
               </div>
               <div class="col-4 col-sm-2 txt-center">
                  <span id="e-1-3" class="txt-negro element-tab ">USD13.99</span>
               </div>
            </div>    
    
    
            <div class="row  border-bottom-tab">
                <div class="col-12 col-sm-6">
                   <span  class="btn-continuar">Disponible en HD</span>
                </div>
                <div class="col-4 col-sm-2 txt-center">
                   <span ><i id="e-2-1"  class="fas fa-times element-tab"></i></span>
                </div>
                <div class="col-4 col-sm-2 txt-center">
                   <span ><i id="e-2-2" class="fas fa-check element-tab"></i></span>
                </div>
                <div class="col-4 col-sm-2 txt-center">
                   <span ><i id="e-2-3" class="fas fa-check element-tab "></i></span>
                </div>
             </div>   
             
            <div class="row  border-bottom-tab">
                <div class="col-12 col-sm-6">
                   <span  class="btn-continuar">Disponible en Ultra HD</span>
                </div>
                <div class="col-4 col-sm-2 txt-center">
                   <span><i id="e-3-1" class="fas fa-times element-tab"></i></span>
                </div>
                <div class="col-4 col-sm-2 txt-center">
                   <span><i id="e-3-2" class="fas fa-times element-tab"></i></span>
                </div>
                <div class="col-4 col-sm-2 txt-center">
                   <span><i id="e-3-3" class="fas fa-check element-tab "></i></span>
                </div>
             </div>   
            
             <div class="row  border-bottom-tab">
                <div class="col-12 col-sm-6">
                   <span  class="btn-continuar">Pantallas que se pueden ver al mismo tiempoo</span>
                </div>
                <div class="col-4 col-sm-2 txt-center">
                   <span id="e-4-1" class="element-tab">1</span>
                </div>
                <div class="col-4 col-sm-2 txt-center">
                   <span  id="e-4-2" class="element-tab">2</span>
                </div>
                <div class="col-4 col-sm-2 txt-center">
                   <span id="e-4-3" class="element-tab ">4</span>
                </div>
             </div>   
    
             <div class="row  border-bottom-tab">
                <div class="col-12 col-sm-6">
                   <span  class="btn-continuar ">Multidispositivo: portátil, TV, teléfono y tableta</span>
                </div>
                <div class="col-4 col-sm-2 txt-center">
                   <span><i id="e-5-1" class="fas fa-check element-tab"></i></span>
                </div>
                <div class="col-4 col-sm-2 txt-center">
                   <span><i id="e-5-2" class="fas fa-check element-tab"></i></span>
                </div>
                <div class="col-4 col-sm-2 txt-center">
                   <span><i id="e-5-3" class="fas fa-check element-tab "></i></span>
                </div>
             </div>    
    
             <div class="row  border-bottom-tab">
                <div class="col-12 col-sm-6">
                   <span  class="btn-continuar">Todas las películas y series que desees</span>
                </div>
                <div class="col-4 col-sm-2 txt-center">
                   <span><i id="e-6-1" class="fas fa-check element-tab"></i></span>
                </div>
                <div class="col-4 col-sm-2 txt-center">
                   <span><i id="e-6-2"  class="fas fa-check element-tab"></i></span>
                </div>
                <div class="col-4 col-sm-2 txt-center">
                   <span><i id="e-6-3"  class="fas fa-check element-tab "></i></span>
                </div>
             </div> 
    
             <div class="row  border-bottom-tab">
                <div class="col-12 col-sm-6">
                   <span  class="btn-continuar">Cancela cuando quieras.</span>
                </div>
                <div class="col-4 col-sm-2 txt-center">
                   <span><i id="e-7-1"  class="fas fa-check element-tab"></i></span>
                </div>
                <div class="col-4 col-sm-2 txt-center">
                   <span><i id="e-7-2"  class="fas fa-check element-tab"></i></span>
                </div>
                <div class="col-4 col-sm-2 txt-center">
                   <span><i id="e-7-3"  class="fas fa-check element-tab "></i></span>
                </div>
             </div> 
    
             <div class="row padding-tab-1">
                <div class="col-12 col-sm-6">
                   <span  class="btn-continuar">El primer mes es gratis</span>
                </div>
                <div class="col-4 col-sm-2 txt-center">
                   <span><i id="e-8-1"  class="fas fa-check element-tab"></i></span>
                </div> 
                <div class="col-4 col-sm-2 txt-center">
                   <span><i id="e-8-2"  class="fas fa-check element-tab"></i></span>
                </div>
                <div class="col-4 col-sm-2 txt-center">
                   <span><i id="e-8-3"  class="fas fa-check element-tab "></i></span>
                </div>
             </div>
             <span class="text-gray">La disponibilidad de contenido en HD y en Ultra HD depende de la capacidad de tu servicio de Internet y 
                   del dispositivo. No todo el contenido está disponible en HD o en Ultra HD. Consulta los <a href="#">Términos de uso</a>
                  para obtener más información.</span>
          </div>  
          <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center padding-bottom ">
             <div class="row">
                <div class="col-1 col-sm-2 col-md-2"></div>
                <div class="col-10 col-sm-8 col-md-8">
                    <button type="button" class="btn btn-danger" id="btn-continuar-1">CONTINUAR</button> 
                </div>
                <div class="col-1 col-sm-2 col-sm-2">
                  <select class="custom-select mr-sm-2 ocultar-elemento" id="slc-plan">
                     <option value="1">basico</option>
                     <option value="2">estandar</option>
                     <option value="3">premium</option>
                   </select>
                </div>
             </div>   
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