var caracteresNombre=document.getElementsByName("nombre").value;
var caracteresApellido=document.getElementsByName("apellido").value;
var nombreActivo=false;
var apellidoActivo=false;
function convertirMayusculas() {
    console.log("Convierte a mayúsculas");
    for(var i=0;i<=caracteresNombre.length;i++){
        caracteresNombre.toUpperCase();
    }
}
function convertirMinusculas() {
    console.log("Convierte en minusculas");
    for(var i=0;i<=caracteresNombre.length;i++){
        caracteresNombre.toLowerCase();
    }
}
function estaActivo() {
    if(document.getElementsByName("nombre")){
        nombreActivo=true;
    }else{
        if(document.getElementsByName("apellido")){
            apellidoActivo=true;
        }else{
            apellidoActivo=false;
        }
        nombreActivo=false;
    }
}