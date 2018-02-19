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
    <title>PCB-DWES</title>
</head>
<body>
<header>
        <nav class="mb-1 navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="#">Tienda Online</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link waves-effect waves-light" href="#"><i class="fa fa-envelope"></i> Contact <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link waves-effect waves-light" href="#"><i class="fa fa-gear"></i> Settings</a>
                    </li>
                    <li class="nav-item">
                        <i class="fa fa-search"></i>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="fa fa-user"></i> Profile </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-cyan" aria-labelledby="navbarDropdownMenuLink-4">
                            <a class="dropdown-item waves-effect waves-light" href="#">My account</a>
                            <a class="dropdown-item waves-effect waves-light" href="#">Log out</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
</header>
    <div class="container">
        <br><br>
            <?php
            if ($vista=="login"){
                include_once 'vlogin.php';
            }else if ($vista=="inicio"){
                include_once 'vinicio.php';
            }else if ($vista=="WIP"){
                include_once 'vWIP.php';
            }else if($vista=='codigo'){
                include_once 'vcodigo.php';
            }else if($vista=='registro'){
                include_once 'vregistro.php';
            }else if($vista=='SOAP') {
                include_once 'vWSSOAP.php';
            }
            ?>
    </div>
    <div class="container-fluid">

    </div>
        <footer class="page-footer blue center-on-small-only">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <h5 class="title">Footer Content</h5>
                        <p>Here you can use rows and columns here to organize your footer content.</p>
                    </div>
                    <div class="col-md-6">
                        <h5 class="title">Links</h5>
                        <ul>
                            <li><i class="icon-large icon-search"></i></li>
                            <li><a href="#!">Link 2</a></li>
                            <li><a href="#!">Link 3</a></li>
                            <li><a href="#!">Link 4</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container-fluid">
                    © 2015 Copyright: <a href="https://www.MDBootstrap.com"> MDBootstrap.com </a>

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
