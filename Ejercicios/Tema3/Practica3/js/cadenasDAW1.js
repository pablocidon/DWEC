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
function validarDNI (dni){
	var letras="TRWAGMYFPDXBNJZSQVHLCKE";
	var n;
	var letra;
	do{
		var correcto=true;
		dni=JOptionPane.showInputDialog(null,"Introduzca DNI");
		if(dni.length()!=8){
			correcto=false;
		}
		for(int i=0;i<dni.length()&& correcto;i++){
			if(!Character.isDigit(dni.charAt(i))){
				correcto=false;
			}	
		}
	}while(!correcto);
	n=Integer.parseInt(dni);
	letra=letras.charAt(n%23);
	return(dni+letra);
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