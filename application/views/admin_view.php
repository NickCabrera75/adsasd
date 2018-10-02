<!DOCTYPE HTML>
<!--
  Full Motion by TEMPLATED
  templated.co @templatedco
  Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>

<head>
    <title>Full Motion</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets_invitado/assets/css/main.css" />
</head>

<body id="top">
    <div class="pull-right">
        <a href="<?php echo site_url('usuario/logout'); ?>">CERRAR SESION</a>
    </div>
    <a href="listausuarios_view.php">Administrar Usuarios</a>
    <h1>
        <?php
echo "Hola ".$this->session->userdata('login');
echo "<br>";
  ?>
        <section id="banner" data-video="<?php echo base_url(); ?>assets_invitado/images/banneranimal.jpg">
            <div class="inner">
                <header>
                    <h1>
                        <?php echo "Hola ".$this->session->userdata('login'); ?>
                    </h1>
                    <p>Aqui podras ver una lista mas amplia de mascotas para adoptar, y tambien podras subir una mascota para darla en adopcion</p>
                </header>
                <a href="#main" class="more">Learn More</a>
            </div>
        </section>

        <!-- Main -->
        <div id="main">
            <div class="inner">

                <!-- Boxes -->

                <div class="thumbnails">

                    <?php
                foreach ($animales->result() as $row)
                {
                ?>
                    <div class="box">

                        <a href="<?php echo base_url(); ?><?php echo $row->imagen; ?>" class="image fit"><img src="<?php echo base_url(); ?><?php echo $row->imagen; ?>" alt="" /></a>
                        <div class="inner">
                            <h3><a href="#">
                                    <?php echo $row->animal; echo "  "; echo $row->raza; ?></a></h3>
                            <p><a>
                                    <h4>Nombre:</h4>
                                </a>
                                <?php echo $row->nombre; ?>
                            </p>
                            <p><a>
                                    <h4>Edad:</h4>
                                </a>
                                <?php echo $row->edad; ?> años</p>
                            <p><a>
                                    <h4>Sexo:</h4>
                                </a>
                                <?php echo $row->sexo; ?>
                            </p>
                            <a href="#" class="button fit">ADOPTAR</a>
                        </div>

                    </div>
                    <?php
                }
                ?>

                </div>

            </div>
        </div>

        <!-- Footer -->
        <footer id="footer">
            <div class="inner">
                <h2>PROXIMAMENTE</h2>
                <p>DAR EN ADOPCION. </p>

                <ul class="icons">
                    <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                    <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                    <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                    <li><a href="#" class="icon fa-envelope"><span class="label">Email</span></a></li>
                </ul>
                <p class="copyright">&copy; Untitled. Design: <a href="https://templated.co">TEMPLATED</a>. Images: <a href="https://unsplash.com/">Unsplash</a>. Videos: <a href="http://coverr.co/">Coverr</a>.</p>
            </div>
        </footer>

        <!-- Scripts -->
        <script src="<?php echo base_url(); ?>assets_invitado/assets/js/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>assets_invitado/assets/js/jquery.scrolly.min.js"></script>
        <script src="<?php echo base_url(); ?>assets_invitado/assets/js/jquery.poptrox.min.js"></script>
        <script src="<?php echo base_url(); ?>assets_invitado/assets/js/skel.min.js"></script>
        <script src="<?php echo base_url(); ?>assets_invitado/assets/js/util.js"></script>
        <script src="<?php echo base_url(); ?>assets_invitado/assets/js/main.js"></script>
    </h1>
</body>

</html>
