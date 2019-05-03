
$(document).ready(function(){
  var codigo_pantalla=3;
  var parametros="codigo_pantalla="+codigo_pantalla+"&peticion=inicializar-config-reprod";
  console.log(parametros);
  $.ajax({
    url:"ajax/api-2.php",
    data:parametros,
    method:"POST",
    dataType:"json",
    success:function(respuesta){

      console.log(respuesta.p_mensaje_1);
      console.log(respuesta.p_codigo_mensaje_1);
      
      console.log(respuesta.CODIGO_T_USO_DATO);   
      console.log(respuesta.CODIGO_T_REPROD);    
      console.log(respuesta.p_mensaje);  
      console.log(respuesta.p_codigo_mensaje);
      
      if(respuesta.CODIGO_T_REPROD==1)
      $("#chk-tipo-rep").prop("checked", false);
      
      if(respuesta.CODIGO_T_REPROD==2)
      $("#chk-tipo-rep").prop("checked", true);  
      
      if(respuesta.CODIGO_T_USO_DATO==1)
         $("#rbt-automatica").prop("checked",true);
      if(respuesta.CODIGO_T_USO_DATO==2)
         $("#rbt-baja").prop("checked", true);
      if(respuesta.CODIGO_T_USO_DATO==3)
         $("#rbt-media").prop("checked", true);
      if(respuesta.CODIGO_T_USO_DATO==4)
         $("#rbt-alta").prop("checked", true);
      },
      error:function(error){
        console.log(error);     
    }
 });

});


$("#btn-cancelar").click(function(){
    window.location ="account.html";
});


$("#btn-guardar").click(function(){
    var codigo_pantalla= 3;
    var v;
    var aut=1;
    if( ( v = $("#chk-tipo-rep:checked").val() ) != null ){
       aut=2;
    }
    var parametros= "codigo_pantalla="+codigo_pantalla+"&uso-dato="+$("input[name='rbt-uso-datos']:checked").val()+
    "&tipo-reproduccion="+aut+"&peticion=guardar-config-CR";
    console.log(parametros);
    $.ajax({
      url:"ajax/api-2.php",
      data:parametros,
      method:"POST",
      dataType:"json",
      success:function(respuesta){
        console.log(respuesta.p_codigo);   
        console.log(respuesta.p_mensaje);
      },
       error:function(error){
         console.log(error);
       }
   });

});







