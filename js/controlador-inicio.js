
$(document).ready(function(){
  tblAccount();
});

function tblAccount(){
  $.ajax({
    url: "ajax/landing.php?accion='table-account'",
    success: function(respuesta){
      $("#main-container").html(respuesta);
    },
    error: function(){
      console.log("Ocurrio un error!!!");
    }
  });
}

$('#controlR').click(function() {
    event.preventDefault();
    $('#content').animate({
      marginLeft: "-=400px"
    }, "fast");
 });

$('#controlL').click(function() {
    event.preventDefault();
    $('#content').animate({
      marginLeft: "+=400px"
    }, "fast");
});