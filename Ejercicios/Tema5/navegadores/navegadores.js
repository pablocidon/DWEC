var esIndexedDB = false;
var esWebSQL = false;
var dbWeb;
//Funciones de navegador
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
}
//Funciones WebSQL
function abrirWebSQL() {
    tamano = 4*1024*1024;
    dbWeb=openDatabase('PrimeraBaseDatos','1.0','Mi primera base de datos',tamano);//Nombre,versión,descripción,tamaño
    if(dbWeb){
        dbWeb.transaction(function (tx) {
            tx.executeSql("create table if not exists Calculadora(" +
                "idOp integer primary key autoincrement, " +
                "operador1 text, " +
                "operandoDB text," +
                "operador2 text)");
        });
    }
}
function insertarWebSQL() {
    dbWeb.transaction(function (tx){
        tx.executeSql("insert into Calculadora(operador1,operandoDB,operador2) values (?,?,?)",[op1,opDB,op2]);
    });
}
function vaciarTablaWebSQL() {
    dbWeb.transaction(function (tx){
        tx.executeSql("delete from Calculadora where 1");
    });
}
function borrarTablaWebSQL() {
    dbWeb.transaction(function (tx){
        tx.executeSql("drop table Calculadora");
    });
}
function borrarRegistroWebSQL() {
    dbWeb.transaction(function (tx){
        tx.executeSql("delete from Calculadora where idOp=(?)",[numeroCampo]);
    });
}
function borrarWebSQL(DB){
    dbWeb.transaction(function (tx) {
        tx.executeSql("drop database"+DB);
    });
}
function buscarWebSQL(codBuscar) {
    dbWeb.transaction(function (tx){
        tx.executeSql("select * from Calculadora where idOP=?",[?],function (tx,rx,erx) {
            console.log(rx);
        });
    });
}

//Función de uso de base de datos
function usoBBDDNavegador() {
    if(esIndexedDB && esWebSQL){
        abrirWebSQL();
        abrirIndexedDB;
    }else if(esWebSQL){
        abrirWebSQL();
    }else if(esIndexedDB){
        abrirIndexedDB;
    }else{
        alert("Su navegador no soporta ninguna base de datos.");
    }

}