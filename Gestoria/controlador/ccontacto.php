<?php

$correcto = false;

    if(isset($_POST['cancelar'])){
        header("Location: index.php");
    }
    if(isset($_POST['aceptar'])) {

    }
    if ($correcto) {
        header("Location: index.php?pagina=inicio");
    } else {
        $_GET["pagina"]="contacto";
        include_once "vista/layout.php";
    }

?>