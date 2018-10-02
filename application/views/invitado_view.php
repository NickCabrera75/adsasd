<!DOCTYPE HTML>
<html >

<head>
  <meta charset="utf-8">
  <title>INVITADO</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="<?php echo base_url(); ?>assets_invitado/css/bootstrap-responsive.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets_invitado/css/style.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets_invitado/color/default.css" rel="stylesheet">
  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets_invitado/img/favicon.ico">


<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/linearicons.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/magnific-popup.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/nice-select.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.min.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main.css">

</head>

<body>
  <!-- navbar -->
  <header id="header" id="home">
          <div class="container main-menu">
            <div class="row align-items-center justify-content-between d-flex">
              <div id="logo">
                <h1 ><a href="<?php echo base_url(); ?>index.php/animalesinvitado">Bienvenido</a></h1>
              </div>
              <nav id="nav-menu-container">
                <ul class="nav-menu">
                  <li class="menu-active"><a href="<?php echo base_url(); ?>index.php/animales">Pagina Principal</a></li>
                  <!--<li><a href="about.html">Acerca De</a></li>-->
                  <!--<li><a href="dogs.html">Perros</a></li>
                  <li><a href="cats.html">Gatos</a></li>-->
                 <!-- <li><a href="volunteer.html">Voluntarios</a></li>-->
                  <!--<li class="menu-has-children"><a href="">Blog</a>
                    <ul>
                      <li><a href="blog-home.html">Blog Home</a></li>
                      <li><a href="blog-single.html">Blog Single</a></li>
                    </ul>
                  </li>-->
                  <!--<li><a href="contact.html">Contacto</a></li>-->
                 <!-- <li class="menu-has-children"><a href="">Dropdown</a>
                    <ul>
                      <li><a href="elements.html">Elements</a></li>
                      <li><a href="#">Item</a></li>
                      <li class="menu-has-children"><a href="">Level 2</a>
                      <ul>
                        <li><a href="#">Item 1</a></li>
                        <li><a href="#">Item 2</a></li>
                      </ul>
                    </li>
                    </ul>
                  </li>-->
                </ul>
              </nav><!-- #nav-menu-container -->
            </div>
          </div>
        </header><!-- #header -->
  <!-- Header area -->
  <div id="header-wrapper" class="header-slider">
    <header class="clearfix">
      <div class="logo">
        <!--<img src="img/logo-image.png" alt="" />-->
      </div>
      <div class="container">
        <div class="row">
          <div class="span12">
            <div id="main-flexslider" class="flexslider">
              <ul class="slides">
                <li>
                  <p class="home-slide-content">
                    <strong>Te importan</strong> ellos
                  </p>
                </li>
                <li>
                  <p class="home-slide-content">
                    no los dejes <strong>abandonados</strong>
                  </p>
                </li>
                <li>
                  <p class="home-slide-content">
                     salva una vida <strong>adopta</strong>
                  </p>
                </li>
              </ul>
            </div>
            <!-- end slider -->
          </div>
        </div>
      </div>
    </header>
  </div>
  <!-- spacer section -->

  <!--<section class="image-carusel-area">
        <div class="container">
          <div class="row">
            <div class="active-image-carusel">
             <?php
            foreach ($animales->result() as $row)
            {
              ?>
               <div class="single-image-carusel">
                <img class="img-fluid" src="<?php echo base_url(); ?><?php echo $row->imagen; ?>" alt="">
              </div>
            <?php
            }
            ?>
            </div>
          </div>
        </div>
      </section>-->
  <!-- end spacer section -->
  <!-- section: services -->


    <section class="process-area section-gap" id="services">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="menu-content pb-60 col-lg-8">
              <div class="title text-center">
                <h1 class="mb-10">Proceso para adoptar una mascota</h1>
                <p>Cualquier persona que tenga un espacio en su hogar y en su corazon</p>
              </div>
            </div>
          </div>
          <div class="row">
           <div class="col-lg-3 col-md-6">
              <div class="single-process">
                <span class="lnr lnr-user"></span>
                <a href="#">
                  <h4>
                    Registrarse\Iniciar Sesion
                  </h4>
                </a>
                <p>
                  inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct.
                </p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="single-process">
                <span class="lnr lnr-thumbs-up"></span>
                <a href="#">
                  <h4>
                    Selección de mascotas
                  </h4>
                </a>
                <p>
                  inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct.
                </p>
              </div>
            </div>

            <div class="col-lg-3 col-md-6">
              <div class="single-process">
                <span class="lnr lnr-license"></span>
                <a href="#">
                  <h4>
                    Formulario de adopción
                  </h4>
                </a>
                <p>
                  inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct.
                </p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="single-process">
                <span class="lnr lnr-magic-wand"></span>
                <a href="#">
                  <h4>
                    Trae a la nueva familia
                  </h4>
                </a>
                <p>
                  inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

  <!-- end section: services -->
  <!-- section: works -->
  <section id="works" class="section">
    <div class="container clearfix">
      <h4>Mascotas</h4>
      <!-- portfolio filter -->
      <div class="row">
        <div id="filters" class="span12">
          <ul class="clearfix">
            <li>
              <a href="#" data-filter="*" class="active">
                <h5>Todos</h5>
              </a>
            </li>
           <!-- <li>
              <a href="#" data-filter=".web">
                <h5>Perros</h5>
              </a>
            </li>
            <li>
              <a href="#" data-filter=".print">
                <h5>Gatos</h5>
              </a>
            </li>
            <li>
              <a href="#" data-filter=".design">
                <h5>Periquitos</h5>
              </a>
            </li>
            <li>
              <a href="#" data-filter=".photography">
                <h5>Hamsters</h5>
              </a>
            </li>-->
          </ul>
        </div>
        <!-- END PORTFOLIO FILTERING -->
      </div>
      <section class="cat-list-area section-gap">
        <div class="container">
          <div class="row">
           <?php
            foreach ($animales->result() as $row)
            {
              ?>
               <div class="col-lg-3 col-md-6">
              <div class="single-cat-list">
                <img src="<?php echo base_url(); ?><?php echo $row->imagen; ?>" alt="" class="img-fluid">
                <div class="overlay">
                  <div class="text"><?php echo $row->tipo; ?><br>
                                    <?php echo $row->nombre; ?><br>
                                    <?php echo $row->edad; ?><br>
                                    <?php if (($row->sexo)==0){echo "Hembra";} else{ echo "Macho";} ?>
                                    </div>
                </div>
              </div>
            </div>
            <?php
            }
            ?>

          </div>
        </div>
      </section>
    </div>
  </section>

  <!-- section: blog -->


  <!-- end spacer section -->

<!-- spacer section -->
  <!--<section class="calltoaction-area section-gap relative">
        <div class="container">
          <div class="overlay overlay-bg"></div>
          <div class="row align-items-center justify-content-center">
            <h1 class="text-white">Want to help? Become a Volunteer</h1>
            <p class="text-white">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              Ut enim ad minim. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.
            </p>
            <div class="buttons d-flex flex-row">
              <a href="#" class="primary-btn text-uppercase">View pdf details</a>
              <a href="#" class="primary-btn text-uppercase">Register now</a>
            </div>
          </div>
        </div>
      </section>-->
  <!-- end spacer section -->

  <footer>
    <div class="container">
      <div class="row">
        <div class="span6 offset3">
          <ul class="social-networks">
            <li><a href="https://www.facebook.com/Salvar-Una-Mascota-299694837529203/"><i class="icon-circled icon-bgdark icon-facebook icon-2x"></i></a></li>
            <li><a href="https://www.instagram.com/salvarunamascota/"><i class="icon-circled icon-bgdark icon-instagram icon-2x"></i></a></li>
            <li><a href="https://twitter.com/UnaSalvar"><i class="icon-circled icon-bgdark icon-twitter icon-2x"></i></a></li>
          </ul>
          <p class="copyright">
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved

          </p>
        </div>
      </div>
    </div>
    <!-- ./container -->
  </footer>
  <a href="#" class="scrollup"><i class="icon-angle-up icon-square icon-bgdark icon-2x"></i></a>

  <script src="<?php echo base_url(); ?>assets_invitado/js/jquery.js"></script>
  <script src="<?php echo base_url(); ?>assets_invitado/js/jquery.scrollTo.js"></script>
  <script src="<?php echo base_url(); ?>assets_invitado/js/jquery.nav.js"></script>
  <script src="<?php echo base_url(); ?>assets_invitado/js/jquery.localScroll.js"></script>
  <script src="<?php echo base_url(); ?>assets_invitado/js/bootstrap.js"></script>
  <script src="<?php echo base_url(); ?>assets_invitado/js/jquery.prettyPhoto.js"></script>
  <script src="<?php echo base_url(); ?>assets_invitado/js/isotope.js"></script>
  <script src="<?php echo base_url(); ?>assets_invitado/js/jquery.flexslider.js"></script>
  <script src="<?php echo base_url(); ?>assets_invitado/js/inview.js"></script>
  <script src="<?php echo base_url(); ?>assets_invitado/js/animate.js"></script>
  <script src="<?php echo base_url(); ?>assets_invitado/js/custom.js"></script>
  <script src="<?php echo base_url(); ?>assets_invitado/contactform/contactform.js"></script>
   <script src="<?php echo base_url(); ?>assets/js/vendor/jquery-2.2.4.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="<?php echo base_url(); ?>assets/js/vendor/bootstrap.min.js"></script>
      <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
      <script src="<?php echo base_url(); ?>assets/js/easing.min.js"></script>
      <script src="<?php echo base_url(); ?>assets/js/hoverIntent.js"></script>
      <script src="<?php echo base_url(); ?>assets/js/superfish.min.js"></script>
      <script src="<?php echo base_url(); ?>assets/js/jquery.ajaxchimp.min.js"></script>
      <script src="<?php echo base_url(); ?>assets/js/jquery.magnific-popup.min.js"></script>
      <script src="<?php echo base_url(); ?>assets/js/owl.carousel.min.js"></script>
      <script src="<?php echo base_url(); ?>assets/js/jquery.nice-select.min.js"></script>
      <script src="<?php echo base_url(); ?>assets/js/mail-script.js"></script>
      <script src="<?php echo base_url(); ?>assets/js/main.js"></script>
</body>

</html>

