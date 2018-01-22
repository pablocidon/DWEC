var dbWeb;
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