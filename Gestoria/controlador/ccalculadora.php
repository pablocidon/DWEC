<?php
if(!isset($_SESSION['usuario'])){
    $_GET["pagina"]="calculadora";
    require_once 'vista/layout.php';
}else{
    $_GET["pagina"]="calculadora";
    require_once 'vista/layout.php';
}

?>