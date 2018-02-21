<?php
/*
    * Autor: Pablo Cidón.
    * Creado: 12-01-2018.
    * Archivo: cinicio.php
    * Modificado: 18-01-2018.
*/
if(!isset($_SESSION['usuario'])){
    $_GET["pagina"]="inicio";
    require_once 'vista/layout.php';
}else{

}
if (isset($_POST['salir'])){
    unset($_SESSION['usuario']);
    session_destroy();
    header("Location: index.php?pagina=login");
}
?>