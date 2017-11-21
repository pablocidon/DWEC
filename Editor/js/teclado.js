function formatoFuente(comando,valor) {
    document.execCommand(comando,false,valor);
}
function Ignorar(e) {
    e.stopPropagation();
    e.preventDefault();
}
function tamanioFuente() {

}