/*
 * Fichero: operaCalculadora.js.
 * Autor: Pablo Cidón.
 * Fecha de inicio: 20-10-2017.
 * Proyecto: Calculadora en JavaScript.
 * Objetivo: Construccion de una calculadora en HTML con JavaScript.
 * Modificado: 21-12-2017
 */
var valorVisor='';
var teclaPunto = false;
var operando1=0;
var operando2=0;
var operador=0;
var resultado = 0;
var operacionMultiple = false;
function mostrarVisor(valor){//Función para mostrar los datos
    switch (valor) {
        case "0":
        case "1":
        case "2":
        case "3":
        case "4":
        case "5":
        case "6":
        case "7":
        case "8":
        case "9":
            break;
        case ".":
            if (!teclaPunto) {
                teclaPunto = true;
            } else {
                console.log("Error ya existe el punto");
                return;
            }
            break;
        default:

    }
    valorVisor+=valor;
    visor.value=valorVisor;
}
/*
    Función para realizar las operaciones
    Dependiendo de la operación el dígito será:
    1- En caso de que sea una suma
    2- En caso de que sea una resta
    3- En caso de que sea una multiplicación
    4- En caso de que sea una división
    5- En caso de que se quiera saber el porcentaje.
 */

function operacion(tipoOperacion) {
    teclaPunto=false;
    if(!operacionMultiple) {
        operacionMultiple = true;
        operando1 = parseFloat(visor.value);
        operador = tipoOperacion;
        switch (tipoOperacion) {
            case 1:
                visor.value = "+";
                break;
            case 2:
                visor.value = "-";
                break;
            case 3:
                visor.value = "*";
                break;
            case 4:
                visor.value = "/";
                break;
            case 5:
                visor.value = "%";
                break;
        }
        valorVisor = "";
    }else{
        resultadoOperacion();
        switch (tipoOperacion) {
            case 1:
                visor.value = "+";
                break;
            case 2:
                visor.value = "-";
                break;
            case 3:
                visor.value = "*";
                break;
            case 4:
                visor.value = "/";
                break;
            case 5:
                visor.value = "%";
                break;
        }
        valorVisor = "";
    }
}
function resultadoOperacion() {//Función para calcular el resultado de la operación realiza
    operando2=parseFloat(visor.value);
    switch (operador){
        case 1:
            resultado=operando1+operando2;
            break;
        case 2:
            resultado=operando1-operando2;
            break;
        case 3:
            resultado=operando1*operando2;
            break;
        case 4:
            resultado=operando1/operando2;
            break;
        case 5:
            resultado=operando1%operando2;
            break;
    }
    operando1=resultado;
    verResultado();
}

function verResultado() {
    valorVisor=resultado;
    visor.value=valorVisor;
}

function borrarVariables() {
    valorVisor='';
    teclaPunto = false;
    operando1=0;
    operando2=0;
    operador=0;
    resultado = 0;
    operacionMultiple = false;
    visor.value="";
}

function desactivarTeclas() {
    document.getElementById("divide").disabled=true;
    document.getElementById("multiplica").disabled=true;
    document.getElementById("suma").disabled=true;
    document.getElementById("resta").disabled=true;
    document.getElementById("punto").disabled=true;
    document.getElementById("a").disabled=true;
    document.getElementById("b").disabled=true;
    document.getElementById("c").disabled=true;
    document.getElementById("d").disabled=true;
    document.getElementById("e").disabled=true;
    document.getElementById("f").disabled=true;

}

function sistemaNumercacion(sistemaNumAct) {
    switch (sistemaNumAct){
        case 10:
            document.getElementById("dos").disabled=false;
            document.getElementById("tres").disabled=false;
            document.getElementById("cuatro").disabled=false;
            document.getElementById("cinco").disabled=false;
            document.getElementById("seis").disabled=false;
            document.getElementById("siete").disabled=false;
            document.getElementById("ocho").disabled=false;
            document.getElementById("nueve").disabled=false;
            break;
        case 8:
            document.getElementById("ocho").disabled=true;
            document.getElementById("nueve").disabled=true;
            break;
        case 2:
            document.getElementById("dos").disabled=true;
            document.getElementById("tres").disabled=true;
            document.getElementById("cuatro").disabled=true;
            document.getElementById("cinco").disabled=true;
            document.getElementById("seis").disabled=true;
            document.getElementById("siete").disabled=true;
            document.getElementById("ocho").disabled=true;
            document.getElementById("nueve").disabled=true;
            break;
        case 16:
            document.getElementById("a").disabled=false;
            document.getElementById("b").disabled=false;
            document.getElementById("c").disabled=false;
            document.getElementById("d").disabled=false;
            document.getElementById("e").disabled=false;
            document.getElementById("f").disabled=false;
            break;
    }
}