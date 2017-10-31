function decBinario(x){
    return x.toString(2);
}
function decOctal(x){
    return x.toString(8);
}
function decHexadecimal(x){
    return x.toString(16);
}
function binarioDecimal(x){
    return parseInt(x,2);
}
function binarioOctal(x){
    return parseInt(x,8);
}
function binarioHexadecimal(x){
    return parseInt(x,16);
}
function decimalBHO(x,y){
    //x=numero decimal
    //y=base destino
    return x.toString(y);//Devuelve el valor en el sistema indicado.
}
function BHODecimal(a,b){
    //a=numero
    //b=base de origen
    return parseInt(a,b);//Devuelve el valor en sistema decimal.
}