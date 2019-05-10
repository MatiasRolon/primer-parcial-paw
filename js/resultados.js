var window = window || {},
  document = document || {},
  console = console || {},
  Pagina = Pagina || {};



Pagina.cargar = function (contenedorHTML, botonHTML) {
  window.addEventListener("DOMContentLoaded", function(){
    var boton=0;
    if (typeof botonHTML === "string") {
        boton = document.getElementById(botonHTML);    
        boton.addEventListener("click",Pagina.verResultados);
        Pagina.contenedor = document.getElementById(contenedorHTML);
    }        
  });
}

Pagina.verResultados = function(){
    console.log("funciona script");
}




















