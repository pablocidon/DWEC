<form name="input" action="<?PHP echo $_SERVER['PHP_SELF']; ?>" method="post" class="form-horizontal">
    <h1 class="text-center">Formulario de Registro</h1>
    <div class="form-group">
        <label class="control-label col-md-2" for="usuario">Código Usuario</label>
        <div class="col-md-8">
            <input type="text" class="form-control" placeholder="Código Usuario" name="codUsuario"  <?php if(isset($_POST['codUsuario']) && empty($mensajeError['codUsuario'])){ echo 'value="',$_POST['codUsuario'],'"';}?>>
        </div>
        <div class="col-md-offset-3">
            <?php echo "<span class='text-warning'>".$mensajeError['codUsuario']."</span>";?>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-2" for="usuario">Descripción Usuario</label>
        <div class="col-md-8">
            <input type="text" class="form-control" placeholder="Descripción Usuario" name="descUsuario"  <?php if(isset($_POST['descUsuario']) && empty($mensajeError['descUsuario'])){ echo 'value="',$_POST['descUsuario'],'"';}?>>
        </div>
        <div class="col-md-offset-3">
            <?php echo "<span class='text-warning'>".$mensajeError['descUsuario']."</span>";?>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-2" for="password">Contraseña</label>
        <div class="col-md-8">
            <input type="password" class="form-control" placeholder="Contraseña" name="password" <?php if(isset($_POST['password']) && empty($mensajeError['password'])){ echo 'value="',$_POST['password'],'"';}?>>
        </div>
        <div class="col-md-offset-3">
            <?php echo "<span class='text-warning'>".$mensajeError['password']."</span>";?>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-2" for="password">Repita Contraseña</label>
        <div class="col-md-8">
            <input type="password" class="form-control" placeholder="Contraseña" name="password2" <?php if(isset($_POST['password2']) && empty($mensajeError['password2'])){ echo 'value="',$_POST['password2'],'"';}?>>
        </div>
        <div class="col-md-offset-3">
            <?php echo "<span class='text-warning'>".$mensajeError['password2']."</span>";?>
            <?php echo "<span class='text-warning'>".$mensajeError['distinto']."</span>";?>
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-5 col-md-offset-5">
            <input type="submit" value="Aceptar" name="registro" class="btn btn-success">
            <input type="submit" name="cancelar" value="Cancelar" class="btn btn-danger">
        </div>
    </div>
</form>