<?php
/*/*
    * Autor: Pablo Cidón.
    * Creado: 12-01-2018.
    * Archivo: vlogin.php
    * Modificado: 24-01-2018.
*/

?>
<form name="input" action="<?PHP echo $_SERVER['PHP_SELF']; ?>" method="post" class="form-horizontal">
    <h1 class="text-center">Iniciar Sesión</h1>
    <div class="form-group">
        <label class="control-label col-md-2 text-left" for="usuario">Usuario</label>
        <div class="col-md-8">
            <input type="text" class="form-control" placeholder="Usuario" name="usuario">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-2" for="password">Contraseña</label>
        <div class="col-md-8">
            <input type="password" class="form-control" placeholder="Contraseña" name="password">
        </div>
    </div>
    <div class="col-md-offset-6">
        <?php echo "<span class='text-danger'>".$error."</span>";?>
    </div>
    <div class="form-group">
        <div class="col-md-2 col-md-offset-6">
            <div class="center-block">
                <input type="submit" value="Entrar" name="aceptar" class="btn btn-success">
                <input type="submit" value="Cancelar" name="cancelar" class="btn btn-danger">
            </div>
        </div>
    </div>
</form>










