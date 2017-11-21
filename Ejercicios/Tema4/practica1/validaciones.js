function validarCampos() {
    if(document.getElementsByName('nombre').length<2){
        alert("La longitud mínima del nombre debe ser de 3 caracteres");
        return false;
    }else if(document.getElementsByName('apellidos').length<2){
        alert("La longitud mínima de los apellidos debe ser de 3 caracteres");
        return false;
    }else if(document.getElementsByName('email').length<2){
        alert("La longitud mínima del email debe ser de 3 caracteres");
        return false;
    }else if(document.getElementsByName('ciudad').length<2){
        alert("La longitud mínima de la ciudad debe ser de 3 caracteres");
        return false;
    }else if(document.getElementsByName('pais').length<2){
        alert("La longitud mínima del país debe ser de 3 caracteres");
        return false;
    }else{
        return true;
    }
}