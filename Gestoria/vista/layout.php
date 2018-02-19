<?php
/*
    * Autor: Pablo Cidón.
    * Creado: 12-01-2018.
    * Archivo: layout.php
    * Modificado: 24-01-2018.
*/

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <link rel="shortcut icon" href="../../../favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">
    <link rel="stylesheet" href="webroot/css/bootstrap-theme.css">
    <link rel="stylesheet" href="webroot/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="webroot/css/bootstrap.css">
    <link rel="stylesheet" href="webroot/css/bootstrap.min.css">
    <link rel="stylesheet" href="webroot/css/mdb.css">
    <link rel="stylesheet" href="webroot/css/mdb.min.css">
    <link rel="stylesheet" href="webroot/css/estilos.css">
    <title>GESTORÍA - ASESORÍA</title>
</head>
<body>
<header>
        <nav class="mb-1 navbar navbar-expand-lg navbar-dark blue">
            <a class="navbar-brand" href="#">GESTORIA</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link waves-effect waves-light" href="#"><span class="fa fa-envelope"></span>Contacto<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link waves-effect waves-light" href="#"><span class="fa fa-envelope"></span>Área de empleados<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link waves-effect waves-light" href="#"><span class="fa fa-gear" aria-hidden="false"></span>Área de clientes</a>
                    </li>
                </ul>
            </div>
        </nav>
</header>
    <div class="container-fluid">
            <?php
            if (isset($_GET['pagina']) && isset($vistas[$_GET["pagina"]])){
                require_once $vistas[$_GET["pagina"]];
            }else{
                echo "<p>Lo sentimos, hubo un error</p>";
            }
            ?>
    </div>
    <div class="container-fluid">

    </div>
        <footer class="page-footer blue center-on-small-only">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 text-center">
                        <h5 class="title">Organismos oficiales</h5>
                        <ul>
                            <li></li>
                            <li><a href="http://www.agenciatributaria.es/" target="_blank">Agencia Tributaria</a></li>
                            <li><a href="http://www.seg-social.es/Internet_1/index.htm" target="_blank">Seguridad Social</a></li>
                            <li><a href="https://serviciossociales.jcyl.es/web/jcyl/ServiciosSociales/es/Plantilla66y33/1246991411473/_/_/_" target="_blank">Servicios Sociales</a></li>
                            <li><a href="http://medioambiente.jcyl.es/web/jcyl/MedioAmbiente/es/Plantilla100/1131977745749/_/_/_" target="_blank">Medio Ambiente</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 text-center">
                        <h5 class="title">Compatibilidad en navegadores</h5>
                        <ul class="navbar-nav ml-auto">
                            <li><i class="icon-large icon-search"></i></li>
                            <li><a href="#!">Link 2</a></li>
                            <li><a href="#!">Link 3</a></li>
                            <li><a href="#!">Link 4</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="rrss">
                        <h5 class="title">Encuentranos en</h5>
                        <a href="https://www.facebook.com/"><img src="webroot/media/images/facebook.jpg" alt="Facebook" title="Facebook" class="logos"></a>
                        <a href="https://twitter.com/?lang=es"><img src="webroot/media/images/twitter.jpg" alt="Twitter" title="Twitter" class="logos"></a>
                        <a href="https://plus.google.com/about?hl=es"><img src="webroot/media/images/google+.png" alt="Google+" title="Google+" class="logos"></a>
                        <a href="https://es.linkedin.com/"><img src="webroot/media/images/linkedin.jpg" alt="Linkedin" title="Linkedin" class="logos"></a>
                        <img src="webroot/media/images/rss.png" alt="RSS" title="RSS" class="logos"></a>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container-fluid">
                    © 2018 Copyright: Pablo Cidón Barrio
                </div>
            </div>
        </footer>
        <script type="text/javascript" href="webroot/js/jquery.js"></script>
        <script type="text/javascript" href="webroot/js/jquery.validate.js"></script>
        <script type="text/javascript" href="webroot/js/bootstrap.min.js"></script>
        <script type="text/javascript" href="webroot/js/bootstrap.js"></script>
        <script type="text/javascript" href="webroot/js/npm.js"></script>
        <script type="text/javascript" href="webroot/js/mdb.js"></script>
        <script type="text/javascript" href="webroot/js/mdb.min.js"></script>
        <script type="text/javascript" href="webroot/js/popper.min.js"></script>
    </body>
</html>
