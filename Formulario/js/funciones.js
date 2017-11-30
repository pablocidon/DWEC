/*Función para limtar el número de caracteres en un textarea*/
function limita(elEvento,maximoCaracteres) {
    var elemento=document.getElementById("texto");
    //Obtener la tecla pulsada
    var evento=event||window.event;//Uno u otro dependiendo del navegador
    //Obtener el código del caracter pulsado, puede variar dependendiendo del navegador
    var codigoCaracter=evento.charCode||evento.keyCode;
    //Permitir el uso de teclas horizontales
    if(codigoCaracter==37||codigoCaracter==39){
        return true;
    }
    //Código de borrar
    if(codigoCaracter==8||codigoCaracter==46){
        return true;
    }else if(elemento.value.length>=maximoCaracteres){
        return false;
    }else{
        return true;
    }
}
function actualizaInfo(maximoCaracteres){
    var elemento=document.getElementById("texto");
    var info=document.getElementById("info");
    if(elemento.value.length>=maximoCaracteres){
        info.innerHTML="M&aacute;ximo"+maximoCaracteres+"Caracteres";
    }else{
        info.innerHTML="Puedes escribir hasta "+(maximoCaracteres-elemento.value.length)+"  caracteres restantes";
    }
}