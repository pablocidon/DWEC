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
<form id="alta" name="formularioAlta">
    <legend>
        <h2>FORMULARIO DE REGISTRO</h2>
    </legend>
    <label for="nombre">Nombre: </label>
    <input type="text" id="nombre" name="nombre">
    <br><br>
    <label for="apellidos">Apellidos: </label>
    <input type="text" id="apellidos" name="apellidos">
    <br><br>
    <label for="dni">DNI: </label>
    <input type="text" id="dni" name="dni">
    <br><br>
    <label for="fechaNac">Fecha de Nacimiento: </label>
    <input type="date" id="fechaNac" name="fechaNac">
    <br><br>
    <label for="localidad">Localidad: </label>
    <input type="text" id="localidad" name="localidad">
    <br><br>
    <label for="provincia">Provincia: </label>
    <input type="text" id="provincia" name="provincia">
    <br><br>
    <label for="telefono">Teléfono: </label>
    <input type="tel" id="telefono" name="telefono">
    <br><br>
    <label for="correo">Correo Electrónico: </label>
    <input type="email" id="correo" name="correo">
    <br><br>
    <label for="password">Contraseña: </label>
    <input type="email" id="password" name="password">
    <br><br>
    <input type="submit" name="aceptar" value="Aceptar">
    <input type="submit" name="cancelar" value="Cancelar" onclick="window.location.href ='../../index.html';">
</form>
</body>
</html>