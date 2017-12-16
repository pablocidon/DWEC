<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 4</title>
    <link rel="shortcut icon" href="../../../../../favicon.ico" type="image/x-icon">
</head>
<body>
<?php
include 'Validacion.php';
$correcto=true;
$errores = Array(
    'nombre'=>'',
    'apellidos'=>'',
    'dni'=>'',
    'nacimiento'=>'',
    'localidad'=>'',
    'provincia'=>'',
    'telefono'=>'',
    'correo'=>'',
    'contraseña'=>''
);
if(filter_has_var(INPUT_POST, 'enviar')){
    $errores['nombre']=comprobarTexto($_POST['nombre'],15,0,1);
    $errores['apellidos']=comprobarTexto($_POST['apellidos'],15,0,1);
    $errores['dni']=validacionDNI($_POST['dni']);
    $errores['nacimiento']=validarFecha($_POST['fechaNac']);
    $errores['provincia']=comprobarTexto($_POST['provincia'],20,0,1);
    $errores['localidad']=comprobarTexto($_POST['localidad'],50,0,1);
    $errores['telefono']=validarTelefono($_POST['telefono']);
    $errores['correo']=validarEmail($_POST['correo'],50,0,1);
    $errores['contraseña']=comprobarAlfaNumerico($_POST['password'],10,5,1);
    foreach ($errores as $valor) {  //recorremos el array de errores
        if ($valor != null) {
            $correcto = false;
        }
    }
}
if(!isset($_POST['aceptar'])|| $correcto=false) {
    ?>
    <form id="alta" name="formularioAlta">
        <legend>
            <h2>FORMULARIO DE REGISTRO</h2>
        </legend>
        <label for="nombre">Nombre: </label>
        <input type="text" id="nombre" name="nombre" value="<?php echo $_POST['nombre'];?>">
        <span class="error">
            <?php echo $errores['nombre'];?>
        </span>
        <br><br>
        <label for="apellidos">Apellidos: </label>
        <input type="text" id="apellidos" name="apellidos"  value="<?php echo $_POST['apellidos'];?>">
        <span class="error">
            <?php echo $errores['apellidos'];?>
        </span>
        <br><br>
        <label for="dni">DNI: </label>
        <input type="text" id="dni" name="dni"  value="<?php echo $_POST['dni'];?>">
        <span class="error">
            <?php echo $errores['dni'];?>
        </span>
        <br><br>
        <label for="fechaNac">Fecha de Nacimiento: </label>
        <input type="date" id="fechaNac" name="fechaNac"  value="<?php echo $_POST['fechaNac'];?>">
        <span class="error">
            <?php echo $errores['nacimiento'];?>
        </span>
        <br><br>
        <label for="localidad">Localidad: </label>
        <input type="text" id="localidad" name="localidad"  value="<?php echo $_POST['localidad'];?>">
        <span class="error">
            <?php echo $errores['localidad'];?>
        </span>
        <br><br>
        <label for="provincia">Provincia: </label>
        <input type="text" id="provincia" name="provincia"  value="<?php echo $_POST['provincia'];?>">
        <span class="error">
            <?php echo $errores['provincia'];?>
        </span>
        <br><br>
        <label for="telefono">Teléfono: </label>
        <input type="tel" id="telefono" name="telefono"  value="<?php echo $_POST['telefono'];?>">
        <span class="error">
            <?php echo $errores['telefono'];?>
        </span>
        <br><br>
        <label for="correo">Correo Electrónico: </label>
        <input type="email" id="correo" name="correo"  value="<?php echo $_POST['correo'];?>">
        <span class="error">
            <?php echo $errores['correo'];?>
        </span>
        <br><br>
        <label for="password">Contraseña: </label>
        <input type="email" id="password" name="password"  value="<?php echo $_POST['password'];?>">
        <span class="error">
            <?php echo $errores['password'];?>
        </span>
        <br><br>
        <input type="submit" name="aceptar" value="Aceptar">
        <input type="submit" name="cancelar" value="Cancelar" onclick="window.location.href ='../../index.html';">
    </form>
<?php
}else{
?>
    <script type="text/javascript">
        alert("Formulario relleno correctamente");
    </script>
    <?php
}
?>
</body>
</html>