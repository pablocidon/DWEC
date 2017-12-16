<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 4</title>
    <link rel="shortcut icon" href="../../../../../favicon.ico" type="image/x-icon">
    <script type="text/javascript">

    </script>
</head>
<body>
<?php
include 'Validacion.php';
$correcto=true;
$errores = Array(
    'dni'=>'',
    'numero'=>'',
    'pin'=>''
);
if(filter_has_var(INPUT_POST, 'enviar')){
    $errores['dni']=validacionDNI($_POST['dni']);
    $errores['numero']=comprobarEntero($_POST['numero'],1);
    $errores['pin']=comprobarEntero($_POST['numero'],1);
    foreach ($errores as $valor) {  //recorremos el array de errores
        if ($valor != null) {
            $correcto = false;
        }
    }
}
if(!isset($_POST['aceptar'])|| $correcto=false) {
    ?>
    <form id="banco" action="" name="formularioBanco">
        <legend>
            <h2>FORMULARIO DEL BANCO</h2>
        </legend>
        <label for="dni">DNI: </label>
        <input type="text" id="dni2" name="dni" value="<?php echo $_POST['dni'];?>">
        <span class="error">
            <?php echo $errores['dni'];?>
        </span>
        <br><br>
        <select>
            <option class="heading" selected>Tipo de Targeta</option>
            <option value="visa">Visa</option>
            <option value="mastercard">Mastercard</option>
            <option value="american">American Express</option>
            <option value="discover">Discover</option>
        </select>
        <br><br>
        <label for="numero">Número de Targeta: </label>
        <input type="text" id="numero" name="numeroTargeta" value="<?php echo $_POST['numero'];?>">
        <span class="error">
            <?php echo $errores['numero'];?>
        </span>
        <br><br>
        <label for="pin">Pin de Targeta: </label>
        <input type="password" id="pin" name="pinTargeta" value="<?php echo $_POST['pin'];?>">
        <span class="error">
            <?php echo $errores['pin'];?>
        </span>
        <br><br>
        <input type="submit" name="aceptar" value="Aceptar">
        <input type="submit" name="cancelar" value="Cancelar" onclick="window.location.href ='../../index.html';">
    </form>
<?php
}else{
?>
    <script type="text/javascript">
        alert("Formulario Relleno correctamente.");
    </script>
    <?php
}
?>
</body>
</html>
