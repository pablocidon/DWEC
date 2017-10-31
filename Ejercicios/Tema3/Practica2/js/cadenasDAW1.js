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