<form name="input" action="<?PHP echo $_SERVER['PHP_SELF']; ?>" method="post" class="form-horizontal">
    <h1 class="text-center">Formulario de Contacto</h1>
    <div class="form-group">
        <label class="control-label col-md-2" for="nombre">Nombre y apellidos:</label>
        <div class="col-md-8">
            <input type="text" class="form-control" id="nombre" placeholder="Nombre y apellidos:">
        </div>

    </div>
    <div class="form-group">
        <label class="control-label col-md-2" for="dni">DNI:</label>
        <div class="col-md-8">
            <input type="text" class="form-control" placeholder="DNI" name="dni">
        </div>

    </div>
    <div class="form-group">
        <label class="control-label col-md-2" for="fechaNac">Fecha de nacimiento:</label>
        <div class="col-md-8">
            <input type="date" class="form-control" name="fechaNac">
        </div>

    </div>
    <div class="form-group">
        <label class="control-label col-md-2" for="email1">Correo electrónico:</label>
        <div class="col-md-8">
            <input type="email" class="form-control" placeholder="Correo electrónico" name="email1">
        </div>

    </div>
    <div class="form-group">
        <label class="control-label col-md-2" for="email2">Repita correo electrónico:</label>
        <div class="col-md-8">
            <input type="email" class="form-control" placeholder="Correo electrónico" name="email2">
        </div>

    </div>
    <div class="form-group">
        <label class="control-label col-md-2" for="email2">Tema de la cuestión:</label>
        <div class="col-md-8">
            <select class="form-control" name="tema" id="option">
                <option class="heading" selected>Seleccione una opción</option>
                <option value="contratos">Contratos</option>
                <option value="nominas">Nóminas</option>
                <option value="derechos">Derechos de los trabajadores</option>
                <option value="categoria">Tipo de categoría laboral</option>
                <option value="cotizaciones">Cotizaciones</option>
                <option value="jubilacion">Jubilación</option>
                <option value="fiscal">Fiscal</option>
                <option value="laboral">Jurídico laboral</option>
                <option value="otros">Otros...</option>
            </select>
        </div>

    </div>
    <div class="form-group">
        <label class="control-label col-md-2" for="comentario">Comentarios:</label>
        <div class="col-md-8">
            <textarea name="comentario" id="" class="form-control" placeholder="Deje aquí sus comentarios..."></textarea>
        </div>

    </div>

    <div class="form-group">
        <div class="col-md-5 col-md-offset-5">
            <input type="submit" value="Aceptar" name="registro" class="btn btn-success">
            <input type="submit" name="cancelar" value="Cancelar" class="btn btn-danger">
        </div>
    </div>
</form>