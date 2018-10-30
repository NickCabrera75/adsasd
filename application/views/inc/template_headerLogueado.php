<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/fav.png">
    <title>Salva tu mascota</title>
    <?php include("templates/template_head.php"); ?>
</head>
<body>
   


<header id="header" id="home">
    <div class="container main-menu">
        <div class="row align-items-center justify-content-between d-flex">
            <div id="logo">
                <h1><a>Bienvenido</a></h1>
            </div>
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                   <!-- <li class="menu-active"><a href="<?php echo base_url(); ?>animales">Inicio</a></li>-->
                    <li><a href="<?php echo site_url('usuario/logout'); ?>">Cerrar Session</a></li>
                  


                </ul>
            </nav>
        </div>
    </div>
</header>