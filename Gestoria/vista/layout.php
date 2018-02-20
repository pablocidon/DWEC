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
    <link rel="stylesheet" href="webroot/css/estilos.css">
    <title>GESTORÍA - ASESORÍA</title>
</head>
<body>
    <header class="col-md-12">
        <div class="row">
            <div class="rrss">
                <a href="https://www.facebook.com/"><img src="webroot/media/images/facebook.png" alt="Facebook" title="Facebook" class="logos"></a>
                <a href="https://twitter.com/?lang=es"><img src="webroot/media/images/twitter.png" alt="Twitter" title="Twitter" class="logos"></a>
                <a href="https://plus.google.com/about?hl=es"><img src="webroot/media/images/google+.png" alt="Google+" title="Google+" class="logos"></a>
                <a href="https://es.linkedin.com/"><img src="webroot/media/images/linkedin.png" alt="Linkedin" title="Linkedin" class="logos"></a>
                <img src="webroot/media/images/rss.png" alt="RSS" title="RSS" class="logos"></a>
            </div>
        </div>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">WebSiteName</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#">Page 1</a></li>
                        <li><a href="#">Page 2</a></li>
                        <li><a href="#">Page 3</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>
                </div>
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
                        <h3 class="title">Organismos oficiales</h3>
                        <ul class="listapie">
                            <li></li>
                            <li><a href="http://www.agenciatributaria.es/" target="_blank">Agencia Tributaria</a></li>
                            <li><a href="http://www.seg-social.es/Internet_1/index.htm" target="_blank">Seguridad Social</a></li>
                            <li><a href="https://serviciossociales.jcyl.es/web/jcyl/ServiciosSociales/es/Plantilla66y33/1246991411473/_/_/_" target="_blank">Servicios Sociales</a></li>
                            <li><a href="http://medioambiente.jcyl.es/web/jcyl/MedioAmbiente/es/Plantilla100/1131977745749/_/_/_" target="_blank">Medio Ambiente</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 text-center">
                        <h3 class="title">Compatibilidad en navegadores</h3>
                        <ul class="listapie">
                            <li><i class="icon-large icon-search"></i></li>
                            <li><a href="#!">Link 2</a></li>
                            <li><a href="#!">Link 3</a></li>
                            <li><a href="#!">Link 4</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">

                </div>
            </div>
            <div class="footer-copyright">
                <div class="container-fluid text-center">
                    © 2018 Copyright: Pablo Cidón Barrio
                </div>
            </div>
        </footer>
        <script type="text/javascript" href="webroot/js/jquery.js"></script>
        <script type="text/javascript" href="webroot/js/bootstrap.min.js"></script>
        <script type="text/javascript" href="webroot/js/bootstrap.js"></script>
        <script type="text/javascript" href="webroot/js/npm.js"></script>
    </body>
</html>
