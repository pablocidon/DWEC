function recorreTresIndices(item,index,arr){
	if(Array.isArray(arr[index])){
		for(seInd in arr[index]){
			if(Array.isArray(arr[index][seInd])){
				for(terInd in arr[index][seInd]){
					document.write(arr[index][seInd][terInd]);
				}
			} else {
				document.write(arr[index][seInd]);
			}
		}
	} else {
		document.write(arr[index]);
	}
}

function recorreDosIndices(item,index,arr){
	if(Array.isArray(arr[index])){
		for(seInd in arr[index]){
			document.write(arr[index][seInd]);
		}
	} else {
		document.write(arr[index]);
	}
}
function numeroStringDigito (numero,digito){
	return resultado = numero.toFixed(digitos);
        /*Nos devulve el número introducido como parámetro con la cantidad de decimales 
         * redondeados que se ha pasado como parámetro.*/
}
function esUnNumero (numero){
    return !isNaN(numero);
    /*Devuelve si el valor introducido es o no un número*/
}
function devuelveCadena (numero){
    return toString(numero);
    /*Devuelve el valor introducido como una cadena.*/
}
function devuelveValor (dato){
    return valueOf(dato);
}

function letraDNI(dni){
    var cadena = "TRWAGMYFPDXBNJZSQVHLCKET";
    var posicion = dni % 23;
	var letra = cadena.substring(posicion, posicion + 1);
    return letra;
}

function palindromo(fra) {
    // Convierto la cadena a minúscula
    var minuscula = fra.toLowerCase();
    alert(minuscula);
    // Convierto la cadena en un array
    var convertirArray = minuscula.split("");
    alert(convertirArray);
    // Elimino los espacios del array
    var sinEspacios = "";
    for (i in convertirArray) {
        if (convertirArray[i] != " ") {
            sinEspacios += convertirArray[i];
        }
    }
    alert(sinEspacios);
    // Vuelvo a convertir en array
    var nuevoArray = sinEspacios.split("");
    var alReves = nuevoArray.reverse();
    alert(alReves);
    // Verifico sin son iguales
    flag = true;
    for (i in nuevoArray) {
        if (nuevoArray[i] != alReves[i]) {
            flag = false;
            break;
        };
    };
    if (flag) {
        return ("La cadena es un palíndromo.");
    } else {
        return ("La cadena NO es un palíndromo.");
    }
};

function comprobarCCC(entidad,sucursal,dc,nCuenta){
	entidad = rellenaCeros(entidad,4);
	sucursal = rellenaCeros(sucursal,4);
	dc = rellenaCeros(dc,2);
	nCuenta = rellenaCeros(nCuenta,10);

	var concatenado = entidad+sucursal;
	var dc1 = calculaDCParcial(concatenado);
	var dc2 = calculaDCParcial(nCuenta);
	return (dc==(dc1+dc2));
}

function calculaDCParcial(cadena){
	var dcParcial = 0;
	var tablaPesos = [6,3,7,9,10,5,8,4,2,1];
	var suma = 0;
	var i;
	for(i=0;i<cadena.length;i++){
		suma = suma + cadena.charAt(cadena.length-1-i)*tablaPesos[i];
	}
	dcParcial = (11-(suma % 11));
	if(dcParcial==11)
		dcParcial=0;
	else if(dcParcial==10)
		dcParcial=1;
	return dcParcial.toString();
}

function rellenaCeros(numero,longitud){
	var ceros = '';
	var i;
	numero = numero.toString();
	for(i=0;(longitud-numero.length)>i;i++){
		ceros += '0';
	}	
	return ceros+numero;
}
function intercambio(x,y) {
	var aux;
	aux=x;
	x=y;
	y=aux;
	return x,y;
}
function esNumero(x) {
    if(x<0){
        return "El número es negativo";
    }else if(x>=0){
        return "El número es positivo";
    }else{
        return "El número es nulo";
    }
}
function tipo(x) {
    if(isNaN(x)){
        esPrimo(x);
    }else{
        return "El valor es una cadena";
    }
}
function esPrimo(x) {
    var i;
    var esPrimo=true;
    for (i=2;i<=n/2 && esPrimo ;i++){
        if (x%i==0){
            esPrimo=false;
        }
    }
    if(esPrimo){
        return("Es primo.");
    }
    else{
        return("No es primo.");
    }
}