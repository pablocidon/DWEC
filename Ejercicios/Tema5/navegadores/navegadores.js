var esIndexedDB = false;
var esWebSQL = false;

function idNavegador() {
    var agente = window.navigator.userAgent;
    var navegadores = ['Chrome','Firefox','Safari','Opera','Trident','MSIE','Edge','Gecko','Webkit',''];
    for (var i in navegadores){
        if(agente.indexOf(navegadores[i])!=-1){
            return parseInt(i);
        }
    }
}

function analizarNavegador() {
    numeroNavegador=idNavegador();
    switch (numeroNavegador){
        case 0: case 2: case 3: case 6: case 5: case 8:
            esIndexedDB = true;
            esWebSQL = true;
            break;
        case 1:
            esIndexedDB = true;
            esWebSQL = false;
            break;
        case 4: case 7:
            esIndexedDB = false;
            esWebSQL = true;
            break;
        default:
            alert("Su navegador no se encuentra entre los anteriores.");
            break;
    }
    if(esIndexedDB && esWebSQL){
        alert("Su navegador soporta IndexedDB y WebSQL.");
    }else if(esIndexedDB){
        alert("Su navegador soporta únicamente IndexedDB.");
    }else if(esWebSQL){
        alert("Su navegador soporta únicamente WebSQL.");
    }else{
        alert("Su navegador no soporta ninguna base de datos.");
    }
}