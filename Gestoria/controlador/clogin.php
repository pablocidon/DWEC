<?php
/*
    * Autor: Pablo Cidón.
    * Creado: 12-01-2018.
    * Archivo: clogin.php
    * Modificado: 18-01-2018.
*/
$correcto = false;
$error='';
if(isset($_SESSION['usuario'])){
    header("Location: index.php?pagina=inicio");
}else{
    if(isset($_POST['registrar'])){
        header("Location: index.php?pagina=registro");
    }
    if(isset($_POST['aceptar'])) {
        $codUsuario = $_POST['usuario'];
        $password = $_POST['password'];
        $usuario = Usuario::validarUsuario($codUsuario, $password);

        if (is_null($usuario)) {
            $error = 'Usuario o contraseña incorrectos';
        } else {
            $correcto = true;
        }
    }
    if ($correcto) {
        header("Location: index.php?pagina=inicio");
    } else {
        $_GET["pagina"]="login";
        include_once "vista/layout.php";
    }
}
?>
