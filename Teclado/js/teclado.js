/*
 * Fichero: teclado00.js.
 * Autor: Pablo Cidón.
 * Fecha de inicio: 26-10-2017.
 * Proyecto: Teclado en JavaScript.
 * Objetivo: Realización de un teclado en pantalla.
 */
/* global areaEscritura, verEscritura, numeroCaracteres */

//Definición de variables globales

var caracteresArea = "";
var estadoSHIFT;
var teclaPunto = false;
var cuentaCaracteres = 0;
var caracterMayuscula = 0;
var tecladoNumerico = true;
var misTeclasNombre = new Array("idQ","idW","idE","idR","idT","idY","idU","idI","idO","idP",
        "idA","idS","idD","idF","idG","idH","idJ","idK","idL","idNN","idZ","idX","idC","idV",
        "idB","idN","idM");
var misTeclasValores = new Array('Q','W','E','R','T','Y','U','I','O','P','A','S','D','F','G','H','J','K','L','Ñ','Z','X','C','V','B','N','M');
var misTeclasNumericas = new Array('1','2','3','4','5','6','7','8','9','0','@','#','€','_','&','-','+','(', ')','/','*','"','\'',':',';','!','?');
//Definición de funciones
function escribeCaracter(letra) {
    switch (letra) {
        //Control del boton borrar
        case "BORRAR":
        {
            if(caracterMayuscula==0){
                tecladoMayusculas();
                teclaPunto=true;
            }else{
                caracterMayuscula--;
            }
            borrar();
            break;
        }
        /*Control de los puntos aparte y seguidos*/
        case "ENTER":
        {
            enter();
            break;
        }
        case ".":
        {
            caracteresArea += letra;
            cuentaCaracteres++;
            verCaracteres();
            visualizar();
            if (tecladoNumerico){
                tecladoMayusculas();
                teclaPunto = true;
            }
            caracterMayuscula=0;
            break;
        }
        default:
        {
            caracteresArea += letra;
            cuentaCaracteres++;
            visualizar();
            verCaracteres();
            if (teclaPunto) {
                teclaPunto = false;
                tecladoMayusculas();
            }else{
                caracterMayuscula++;
            }
        }
    }
}
function enter() {

}
function borrar() {
    fi = document.getElementById('fiel');
    fi.removeChild(document.getElementById(obj));
}
function visualizar() {
    verEscritura.value = caracteresArea;
}
function verCaracteres() {
    var objEscribe = document.getElementById("numeroCaracteres");
    objEscribe.innerHTML = "Caracteres: " + cuentaCaracteres;
}
//Cambio de teclas a mayúsculas/minúsculas
function tecladoMayusculas() {
    for (var i = 0; i < misTeclasNombre.length; i++) {
        document.getElementById(misTeclasNombre[i]).value = misTeclasValores[i].toUpperCase();
    }
    estadoSHIFT = true;
}
function tecladoMinusculas() {
    for (var i = 0; i < misTeclasNombre.length; i++) {
        document.getElementById(misTeclasNombre[i]).value = misTeclasValores[i].toLowerCase();
    }
    estadoSHIFT = false;
}
function estadoMayMin() {
    if (estadoSHIFT) {
        tecladoMinusculas();
    } else {
        tecladoMayusculas();
    }
}
function cargaValoresTeclas() {
    var j;
    for(var i in misTeclasNombre){
        if(tecladoNumerico){
            misTeclasNombre[i].value = misTeclasValores[i];
        }else{
            document.getElementById(misTeclasNombre[i]).value = misTeclasNumericas[i];
        }
        j++;
    }
    /*for (var i in misTeclasNombre) {
        misTeclasNombre[i].value = misTeclasValores[i];
    }*/
}

/*function cargaValoresNumericos() {
    for (var i in misTeclasNombre) {
        document.getElementById(misTeclasNombre[i]).value = misTeclasNumericas[i];
    }

}*/
function controlCambioTeclado() {
    if(tecladoNumerico){
        cargaValoresTeclas();
        tecladoNumerico=false;
    }else{
        cargaValoresTeclas();
        tecladoNumerico=true;
    }
}