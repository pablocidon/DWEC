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
        /*Nos devulve el n�mero introducido como par�metro con la cantidad de decimales 
         * redondeados que se ha pasado como par�metro.*/
}
function esUnNumero (numero){
    return !isNaN(numero);
    /*Devuelve si el valor introducido es o no un n�mero*/
}
function devuelveCadena (numero){
    return toString(numero);
    /*Devuelve el valor introducido como una cadena.*/
}
function devuelveValor (dato){
    return valueOf(dato);
}