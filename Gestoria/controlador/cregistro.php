<?php
$correcto = true;
$mensajeError=Array(
    'codUsuario'=>'',
    'descUsuario'=>'',
    'password'=>'',
    'password2'=>'',
    'distinto'=>''
);
if(isset($_POST['cancelar'])){
    header('Location: index.php?pagina=login');
}else{
    require_once 'vista/layout.php';
}
if(isset($_POST['registro'])){
    if($mensajeError['codUsuario'] = comprobarAlfaNumerico($_POST['codUsuario'],10,3,1) == null){
        $comprobacion = Usuario::existeUsuario($_POST['codUsuario']);
        $resultado = $comprobacion->fetchColumn(0);
        if ($resultado) {//En caso de exista mostraremos un mensaje de error.
            $mensajeError['codUsuario'] = "Este código ya existe";
            $correcto = false;
        }
    }
    $mensajeError['descUsuario'] = comprobarTexto($_POST['descUsuario'],100,1,1);
    $mensajeError['password'] = comprobarAlfaNumerico($_POST['password'],100,2,1);
    $mensajeError['password2'] = comprobarAlfaNumerico($_POST['password2'],100,2,1);
    if($_POST['password']!=$_POST['password2']) {
        $mensajeError['distinto']="Las contraseñas no coinciden";
    }
    foreach ($mensajeError as $valor) {  //recorremos el array de errores
        if ($valor != null) {
            $correcto = false;
        }
    }
}else{
    $_GET["pagina"]="registro";
    include_once "vista/layout.php";
}
if(isset($_POST['registro'])&&$correcto){
    $codUsuario = $_POST['codUsuario'];
    $descUsuario = $_POST['descUsuario'];
    $password = hash(sha2($_POST['password']),256);
    $nuevoUsuario = Usuario::crearPerfil($codUsuario,$descUsuario,$password);
    if(isset($nuevoUsuario)){
        $_SESSION['usuario'] = $nuevoUsuario;
        header('Location: index.php?pagina=inicio');
    }else{
        $mensajeError['creacion']="No se ha podido crear";
    }
}else{
    $_GET["pagina"]="registro";
    include_once "vista/layout.php";
}
?>