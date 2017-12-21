var formulario=document.createElement("form");
formulario.setAttribute("method","get");
formulario.setAttribute("onsubmit","return validarCampos();");
document.body.appendChild(formulario);
//Titulo del formulario
var titulo = document.createElement("legend");
var datos = document.createTextNode("Datos Personales: ");
titulo.appendChild(datos);
formulario.appendChild(titulo);
//Primer comentario
var comentario = document.createComment("Formulario para registrar los datos de los usuarios");
formulario.appendChild(comentario);
//Campo del nombre
var labelNombre = document.createElement("label");
labelNombre.setAttribute("for","nombre");
var nombre = document.createTextNode("Nombre: ");
labelNombre.appendChild(nombre);
formulario.appendChild(labelNombre);
var inputNombre = document.createElement("input");
inputNombre.setAttribute("type","text");
inputNombre.setAttribute("name","nombre");
inputNombre.setAttribute("id","nombre");
formulario.appendChild(inputNombre);
//Salto de línea
var br1 = document.createElement("br");
formulario.appendChild(br1);
//Campo del correo electrónico
var labelCorreo = document.createElement("label");
labelCorreo.setAttribute("for","correo");
var correo = document.createTextNode("Correo Electrónico: ");
labelCorreo.appendChild(correo);
formulario.appendChild(labelCorreo);
var inputCorreo = document.createElement("input");
inputCorreo.setAttribute("type","email");
inputCorreo.setAttribute("name","correo");
inputCorreo.setAttribute("id","correo");
formulario.appendChild(inputCorreo);
//Salto de línea
var br2 = document.createElement("br");
formulario.appendChild(br2);
//Campo de la url
var labelURL = document.createElement("label");
labelURL.setAttribute("for","url");
var url = document.createTextNode("URL: ");
labelURL.appendChild(url);
formulario.appendChild(labelURL);
var inputURL = document.createElement("input");
inputURL.setAttribute("type","url");
inputURL.setAttribute("name","url");
inputURL.setAttribute("id","url");
inputURL.setAttribute("placeholder","Escribe la URL de tu página");
formulario.appendChild(inputURL);
//Salto de línea
var br3 = document.createElement("br");
formulario.appendChild(br3);
//Segundo comentario
var comentario2 = document.createComment("Datos relativos en cuanto al nacimiento");
formulario.appendChild(comentario2);
//Fecha nacimiento
var labelFechaNacimiento = document.createElement("label");
labelFechaNacimiento.setAttribute("for","fechaNacimiento");
var fecha = document.createTextNode("Fecha Nacimiento: ");
labelFechaNacimiento.appendChild(fecha);
formulario.appendChild(labelFechaNacimiento);
var inputFechaNacimiento = document.createElement("input");
inputFechaNacimiento.setAttribute("type","date");
inputFechaNacimiento.setAttribute("name","fechaNacimiento");
inputFechaNacimiento.setAttribute("id","fechaNacimiento");
formulario.appendChild(inputFechaNacimiento);
//Salto de línea
var br4 = document.createElement("br");
formulario.appendChild(br4);
//Fecha nacimiento
var labelHoraNacimiento = document.createElement("label");
labelHoraNacimiento.setAttribute("for","horaNacimiento");
var hora = document.createTextNode("Hora Nacimiento: ");
labelHoraNacimiento.appendChild(hora);
formulario.appendChild(labelHoraNacimiento);
var inputHoraNacimiento = document.createElement("input");
inputHoraNacimiento.setAttribute("type","text");
inputHoraNacimiento.setAttribute("name","horaNacimiento");
inputHoraNacimiento.setAttribute("id","horaNacimiento");
formulario.appendChild(inputHoraNacimiento);
//Salto de línea
var br5 = document.createElement("br");
formulario.appendChild(br5);
//Valoración nota
var labelNota = document.createElement("label");
labelNota.setAttribute("for","nota");
var nota = document.createTextNode("Valoración Nota Javascript: ");
labelNota.appendChild(nota);
formulario.appendChild(labelNota);
var inputNota = document.createElement("input");
inputNota.setAttribute("type","number");
inputNota.setAttribute("name","nota");
inputNota.setAttribute("id","nota");
inputNota.setAttribute("min","-10");
inputNota.setAttribute("max","10");
inputNota.setAttribute("value","0");
formulario.appendChild(inputNota);
//Salto de línea
var br6 = document.createElement("br");
formulario.appendChild(br6);
//Intervalo de mejora
var labelIntervalo = document.createElement("label");
labelIntervalo.setAttribute("for","intervalo");
var intervalo = document.createTextNode("Intervalo de mejora del Docente: ");
labelIntervalo.appendChild(intervalo);
formulario.appendChild(labelIntervalo);
var inputIntervalo = document.createElement("input");
inputIntervalo.setAttribute("type","range");
inputIntervalo.setAttribute("name","intervalo");
inputIntervalo.setAttribute("id","intervalo");
inputIntervalo.setAttribute("min","0");
inputIntervalo.setAttribute("max","10");
inputIntervalo.setAttribute("value","0");
formulario.appendChild(inputIntervalo);
var salida = document.createElement("output");
salida.setAttribute("name","valoraDocente");
salida.setAttribute("for","intervalo");
formulario.appendChild(salida);
//Salto de línea
var br7 = document.createElement("br");
formulario.appendChild(br7);
//Campo teléfono
var labelTelefono = document.createElement("label");
labelTelefono.setAttribute("for","telefono");
var telefono = document.createTextNode("Teléfono: ");
labelTelefono.appendChild(telefono);
formulario.appendChild(labelTelefono);
var inputTelefono = document.createElement("input");
inputTelefono.setAttribute("type","tel");
inputTelefono.setAttribute("name","telefono");
inputTelefono.setAttribute("id","telefono");
formulario.appendChild(inputTelefono);
//Salto de línea
var br8 = document.createElement("br");
formulario.appendChild(br8);
//Campo movil
var labelMovil = document.createElement("label");
labelMovil.setAttribute("for","movil");
var movil = document.createTextNode("Móvil Personal: ");
labelMovil.appendChild(movil);
formulario.appendChild(labelMovil);
var inputMovil = document.createElement("input");
inputMovil.setAttribute("type","tel");
inputMovil.setAttribute("name","movil");
inputMovil.setAttribute("id","movil");
formulario.appendChild(inputMovil);
//Salto de línea
var br9 = document.createElement("br");
formulario.appendChild(br9);
//Campo dirección
var labelDireccion = document.createElement("label");
labelDireccion.setAttribute("for","direccion");
var direccion = document.createTextNode("Dirección: ");
labelDireccion.appendChild(direccion);
formulario.appendChild(labelDireccion);
var inputDireccion = document.createElement("input");
inputDireccion.setAttribute("type","text");
inputDireccion.setAttribute("name","direccion");
inputDireccion.setAttribute("id","direccion");
formulario.appendChild(inputDireccion);
//Salto de línea
var br10 = document.createElement("br");
formulario.appendChild(br10);
//Campo localidad
var labelLocalidad = document.createElement("label");
labelLocalidad.setAttribute("for","localidad");
var localidad = document.createTextNode("Localidad: ");
labelLocalidad.appendChild(localidad);
formulario.appendChild(labelLocalidad);
var inputLocalidad = document.createElement("input");
inputLocalidad.setAttribute("type","text");
inputLocalidad.setAttribute("name","localidad");
inputLocalidad.setAttribute("id","localidad");
formulario.appendChild(inputLocalidad);
//Salto de línea
var br11 = document.createElement("br");
formulario.appendChild(br11);
//Segundo comentario
var comentario3 = document.createComment("Selector de color");
formulario.appendChild(comentario3);
//Campo color
var labelColor = document.createElement("label");
labelColor.setAttribute("for","color");
var color = document.createTextNode("Color Favorito: ");
labelColor.appendChild(color);
formulario.appendChild(labelColor);
var inputColor = document.createElement("input");
inputColor.setAttribute("type","color");
inputColor.setAttribute("name","color");
inputColor.setAttribute("id","color");
formulario.appendChild(inputColor);
//Salto de línea
var br12 = document.createElement("br");
formulario.appendChild(br12);
//Campo provincia
var labelProvincia = document.createElement("label");
labelProvincia.setAttribute("for","provincia");
var provincia = document.createTextNode("Provincia: ");
labelProvincia.appendChild(provincia);
formulario.appendChild(labelProvincia);
var selector = document.createElement("select");
selector.setAttribute("name","provincia");
selector.setAttribute("id","provincia");
var opcion1 = document.createElement("option");
opcion1.setAttribute("value","avila");
var avila = document.createTextNode("Ávila");
opcion1.appendChild(avila);
selector.appendChild(opcion1);
var opcion2 = document.createElement("option");
opcion2.setAttribute("value","burgos");
var burgos = document.createTextNode("Burgos");
opcion2.appendChild(burgos);
selector.appendChild(opcion2);
var opcion3 = document.createElement("option");
opcion3.setAttribute("value","leon");
var leon = document.createTextNode("León");
opcion3.appendChild(leon);
selector.appendChild(opcion3);
var opcion4 = document.createElement("option");
opcion4.setAttribute("value","palencia");
var palencia = document.createTextNode("Palencia");
opcion4.appendChild(palencia);
selector.appendChild(opcion4);
var opcion5 = document.createElement("option");
opcion5.setAttribute("value","salamanca");
var salamanca = document.createTextNode("Salamanca");
opcion5.appendChild(salamanca);
selector.appendChild(opcion5);
formulario.appendChild(selector);
var opcion6 = document.createElement("option");
opcion6.setAttribute("value","segovia");
var segovia = document.createTextNode("Segovia");
opcion6.appendChild(segovia);
selector.appendChild(opcion6);
var opcion7 = document.createElement("option");
opcion7.setAttribute("value","soria");
var soria = document.createTextNode("Soria");
opcion7.appendChild(soria);
selector.appendChild(opcion7);
var opcion8 = document.createElement("option");
opcion8.setAttribute("value","valladolid");
var valladolid = document.createTextNode("Valladolid");
opcion8.appendChild(valladolid);
selector.appendChild(opcion8);
var opcion9 = document.createElement("option");
opcion9.setAttribute("value","zamora");
var zamora = document.createTextNode("Zamora");
opcion9.appendChild(zamora);
selector.appendChild(opcion9);
formulario.appendChild(selector);
//Salto de línea
var br13 = document.createElement("br");
formulario.appendChild(br13);
//Tipo de carnet de conducir
var labelCarnet = document.createElement("label");
labelCarnet.setAttribute("for","carnet");
var carnet = document.createTextNode("Carnet de conducir que posee: ");
labelCarnet.appendChild(carnet);
formulario.appendChild(labelCarnet);
var labelA = document.createElement("label");
labelA.setAttribute("for","carnetA");
var claseA = document.createTextNode("A (16 años): ");
labelA.appendChild(claseA);
formulario.appendChild(labelA);
var inputA = document.createElement("input");
inputA.setAttribute("type","radio");
inputA.setAttribute("name","claseA");
inputA.setAttribute("id","claseA");
inputA.setAttribute("value","A");
formulario.appendChild(inputA);
var labelB = document.createElement("label");
labelB.setAttribute("for","carnetB");
var claseB = document.createTextNode("B (18 años): ");
labelB.appendChild(claseB);
formulario.appendChild(labelB);
var inputB = document.createElement("input");
inputB.setAttribute("type","radio");
inputB.setAttribute("name","claseB");
inputB.setAttribute("id","claseB");
inputB.setAttribute("value","B");
formulario.appendChild(inputB);
var labelC = document.createElement("label");
labelC.setAttribute("for","carnetC");
var claseC = document.createTextNode("C (21 años): ");
labelC.appendChild(claseC);
formulario.appendChild(labelC);
var inputC = document.createElement("input");
inputC.setAttribute("type","radio");
inputC.setAttribute("name","claseC");
inputC.setAttribute("id","claseC");
inputC.setAttribute("value","C");
formulario.appendChild(inputC);
//Salto de línea
var br14 = document.createElement("br");
formulario.appendChild(br14);
//Fotocopia carnet
var labelCopia = document.createElement("label");
labelCopia.setAttribute("for","copia");
var copia = document.createTextNode("Fotocopia del carnet de conducir: ");
labelCopia.appendChild(copia);
formulario.appendChild(labelCopia);
var inputCopia = document.createElement("input");
inputCopia.setAttribute("type","file");
inputCopia.setAttribute("name","copia");
inputCopia.setAttribute("id","copia");
formulario.appendChild(inputCopia);
//Salto de línea
var br16 = document.createElement("br");
formulario.appendChild(br16);
//Boton de enviar
var enviar = document.createElement("input");
enviar.setAttribute("type","submit");
enviar.setAttribute("name","enviar");
enviar.setAttribute("value","Enviar");
formulario.appendChild(enviar);
//Salto de línea
var br17 = document.createElement("br");
formulario.appendChild(br17);
//Aceptar condiciones
var aceptar = document.createElement("input");
aceptar.setAttribute("type","checkbox");
aceptar.setAttribute("name","aceptar");
aceptar.setAttribute("value","si");
formulario.appendChild(aceptar);
var labelAceptar = document.createElement("label");
labelAceptar.setAttribute("for","aceptar");
var texto = document.createTextNode("Acepto las condiciones");
labelAceptar.appendChild(texto);
formulario.appendChild(labelAceptar);
//Salto de línea
var br18 = document.createElement("br");
formulario.appendChild(br18);
//Resetear Campos
var resetea = document.createElement("input");
resetea.setAttribute("type","reset");
resetea.setAttribute("name","resetea");
resetea.setAttribute("value","Restablecer todos los campos a su valor predeterminado");
formulario.appendChild(resetea);

function validarCampos() {
    var txtNombre = document.getElementById('nombre').value;
    var patronNombre = [a-zA-Z];
    if(nombre.length<3 || patronNombre.test(txtNombre)==false){
        return false;
        alert("El formato del nombre es incorrecto.");
    }

    var txtEmail = document.getElementById('correo').value;
    if(txtEmail.checkValidity()==false){
        return false;
        alert("El formato del email no es correcto.");
    }

    var txtURL = document.getElementById('url').value;
    if(txtURL.checkValidity()==false){
        return false;
        alert("La URL no es correcta");
    }

    var txtFecha = new Date();
    txtFecha = document.getElementById('fechaNacimiento').value;
    var fechaActual = new Date();
    if(fechaActual.getFullYear()-18<txtFecha.getFullYear()){
        return true;
    }else if(fechaActual.getFullYear()-18==txtFecha.getFullYear()){
        if(fechaActual.getMonth()>txtFecha.getMonth()){
            return true;
        } else if(fechaActual.getMonth()==txtFecha.getMonth()){
            if(fechaActual.getDate()>=txtFecha.getDate()){
                return true;
            }else{
                return false;
                alert("Debes ser mayor de edad para registrarte");
            }
        }else{
            return false;
            alert("Error en la fecha");
        }
    }

    var txtTelefono = document.getElementById('telefono').value;
    var patronTelefono = /^9[0-9]{9};
    if(patronTelefono.test(txtTelefono)==false){
        return false;
        alert("El teléfono no se ajusta al formato");
    }

    var txtMovil = document.getElementById('movil').value;
    var patronMovil = /^6|7[0-9]{9};
    if(patronMovil.test(txtMovil)==false){
        return false;
        alert("El móvil no se ajusta al formato");
    }

    var txtDireccion = document.getElementById('direccion');
    var patronDireccion = /[a-zA-Z]?[0-9]{2}[a-zA-Z]+$;

    if(patronDireccion.test(txtDireccion)==false){
        alert("La dirección se ajusta al formato");
        return false;
    }

    if(document.getElementById('pronvicias').value=='zamora'){
        alert("Has seleccionado la pronvincia de Zamora");
    }
}