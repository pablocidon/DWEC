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
