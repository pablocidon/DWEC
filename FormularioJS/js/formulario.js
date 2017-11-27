window.addEventListener('load',miFormularioJS,false);
function miFormularioJS() {
    //Creación de la etiqueta form
    var x=document.createElement("form");
    //Agregar los atributos
    x.setAttribute("id","primerFormulario");
    document.body.appendChild(x);
    var y=document.createElement("input");
    y.setAttribute("type","text");
    y.setAttribute("name","nombre");
    y.setAttribute("id","nombre");
    y.setAttribute("class","nombre");
    y.setAttribute("placeholder","Nombre");
    //Agregar al documento
    document.getElementById('primerFormulario').appendChild(y);
    var z=document.createElement("input");
    z.setAttribute("type","submit");
    z.setAttribute("name","enviar");
    z.setAttribute("id","botonEnviar");
    z.setAttribute("class","boton");
    z.setAttribute("value","Enviar");
    //Agregar al documento
    x.appendChild(z);
}