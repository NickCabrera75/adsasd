<!DOCTYPE html>
<html lang="en">
<head>
  	 <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/fav.png">
    <!-- Author Meta -->

    <!-- Site Title -->
    <title>Salva tu mascota</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
      <!--
      CSS
      ============================================= -->
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/linearicons.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/magnific-popup.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/nice-select.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.min.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main.css">
</head>
<body class="blog-page">

<!--inicia sesion--> <div id="iniciasesion" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLiveLabel" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLiveLabel"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Formulario de registro</font></font></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">×</font></font></span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                   <section class="Volunteer-form-area section-gap">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-60 col-lg-9">
                    <div class="title text-center">
                        <h1 class="mb-20">Deja a tu mascota en un lugar seguro</h1>
                        <p>rellena los campos con los datos de tu mascota para dejarlo en buenas manos</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <form action="http://localhost:8080/codesafesoft/daradopcion/agregarbd" enctype="multipart/form-data" method="post" accept-charset="utf-8">                        <div class="form-row">
                            <label name="IdCuenta"></label>
                        </div>
                        <div class="form-group">
                            <label for="first-name">Nombre</label>
                            <input name="Nombre" class="form-control" required="" type="text" placeholder="Nombre de tu mascota">
                        </div>
                        <div class="form-row">
                            <div class="col-6 mb-30">
                                <label for="last-name">Edad</label>
                                <input name="Edad" class="form-control" type="text" placeholder="Edad de tu mascota">
                            </div>
                            <div class="col-6 mb-30">
                                <label for="Raza">Raza</label>
                                <input name="Raza" class="form-control" type="text" placeholder="Raza de tu mascota">
                            </div>
                        </div>
    
                        <div class="form-row">
                            <!--<div class="col-6 mb-30">
                                <label for="City">Ciudad</label>
                                <div class="select-option" id="service-select" ">
                                    <select>
                                        <option data-display="Seleccionar Ciudad">Seleccionar Ciudad</option>
                                        <option value="1">Cochabamba</option>
                                        <option value="2">La Paz</option>
                                        <option value="3">Oruro</option>
                                        <option value="4">Beni</option>
                                        <option value="5">Santa Cruz</option>
                                        <option value="6">Potosi</option>
                                        <option value="7">Sucre</option>
                                        <option value="8">Tarija</option>
                                        <option value="9">Pando</option>
                                    </select>
                                </div>
                            </div>-->

                            <div class="col-12 mb-30">
                                <label for="Tipo de mascota">Tipo de mascota</label>
                                <div class="select-option" id="service-select" "="">
                                    <select name="Tipo" style="display: none;">
                                        <option data-display="Tipo de mascota">Tipo de mascota</option>
                                        <option value="0">Perro</option>
                                        <option value="1">Gato</option>
                                    </select><div tabindex="0" class="nice-select"><span class="current">Tipo de mascota</span><ul class="list"><li class="option selected" data-display="Tipo de mascota" data-value="Tipo de mascota">Tipo de mascota</li><li class="option" data-value="0">Perro</li><li class="option" data-value="1">Gato</li></ul></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-6 mb-30">
                                <label for="Sex">Sexo</label>
                                <div class="select-option" id="service-select" "="">
                                    <select name="Sexo" style="display: none;">
                                        <option data-display="Selecccione el Sexo de su mascota">Selecccione el Sexo de su mascota</option>
                                        <option value="0">Macho</option>
                                        <option value="1">Hembra</option>
                                    </select><div tabindex="0" class="nice-select"><span class="current">Selecccione el Sexo de su mascota</span><ul class="list"><li class="option selected" data-display="Selecccione el Sexo de su mascota" data-value="Selecccione el Sexo de su mascota">Selecccione el Sexo de su mascota</li><li class="option" data-value="0">Macho</li><li class="option" data-value="1">Hembra</li></ul></div>
                                </div>
                            </div>

                            <div class="col-6 mb-30">
                                <label for="Color">Color </label>
                                <input name="Color" class="form-control" required="" type="text" placeholder="Color de tu mascota">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-6 mb-30">
                                <label for="Size">Tamaño</label>
                                <div class="select-option" id="service-select" "="">
                                    <select name="Tamano" style="display: none;">
                                        <option data-display="Seleccione el tamaño de su mascota" required="">Seleccione el tamaño de su mascota</option>
                                        <option value="1">Pequeño</option>
                                        <option value="2">Mediano</option>
                                        <option value="3">Grande</option>
                                    </select><div tabindex="0" class="nice-select"><span class="current">Seleccione el tamaño de su mascota</span><ul class="list"><li class="option selected" data-display="Seleccione el tamaño de su mascota" data-value="Seleccione el tamaño de su mascota">Seleccione el tamaño de su mascota</li><li class="option" data-value="1">Pequeño</li><li class="option" data-value="2">Mediano</li><li class="option" data-value="3">Grande</li></ul></div>
                                </div>
                            </div>
                            <div class="col-6 mb-30">
                                <label for="Pedigree">Pedigree</label>
                                <div class="select-option" id="service-select" "="">
                                    <select name="Pedigree" style="display: none;">
                                        <option data-display="Seleccione si su mascota tiene Pedigree">Seleccione si su mascota tiene Pedigree</option>
                                        <option value="1">Si</option>
                                        <option value="2">No</option>
                                    </select><div tabindex="0" class="nice-select"><span class="current">Seleccione si su mascota tiene Pedigree</span><ul class="list"><li class="option selected" data-display="Seleccione si su mascota tiene Pedigree" data-value="Seleccione si su mascota tiene Pedigree">Seleccione si su mascota tiene Pedigree</li><li class="option" data-value="1">Si</li><li class="option" data-value="2">No</li></ul></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Descripcion">Descripcion</label>
                            <textarea name="Description" class="form-control" id="exampleTextarea" placeholder="Describe un poco del caracter de tu mascota" rows="5"></textarea>
                        </div>
                        
                        <!--<button type="file" name="foto" accept="jpg">subir imagen</button>-->
                        <div class="form-group">
                            <input tabindex="-1" class="filestyle form-control" id="filestyle-0" style="position: absolute; left: -9999px;" type="file" data-classinput="form-control inline" data-classbutton="btn btn-default">
                            <div tabindex="0" class="bootstrap-filestyle" style="display: inline;">

                                <h5>(PROXIMAMENTE) Foto de perfil</h5>
                          
                            <input disabled type="file" name="" accept="images/usuarios/*.jpg ">
                            </div>
                        </div>
                        <button class="btn btn-outline-warning btn-default" type="submit">Registrar Mascota</button>
                    </form>   
                </div>
				
            </div>
    </div></section>
                                </div>
                                <!--<div class="modal-footer">
                                    <button type="button" class="btn btn-inverse" data-toggle="modal" data-target="#crearcuenta">
                         
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">
                               Crear Cuenta
                            </font>
                        </font>
                    </button>
                                </div>-->
                            </div>
                        </div>
                    </div> 

<?php

echo "<br>";

 if ($this->session->userdata('tipo')=='')
  {
    ?>
    <a href="<?php echo site_url('usuario/logout'); ?>">VOLVER ATRAS</a>
     <?php
      echo "Error. Comunicarse con servicio al cliente ";
  }
?>


   
    <header id="header" id="home">
        <div class="container main-menu">
            <div class="row align-items-center justify-content-between d-flex">
                <div id="logo">
                    <a href="index.html"><img src="img/logo.png" alt="" title="" /></a>
                </div>
                <nav id="nav-menu-container">
                <ul class="nav-menu">
                  <li class="menu-active"><a href="<?php echo base_url(); ?>index.php/animales">Inicio</a></li>
                  <li><a href="<?php echo base_url(); ?>index.php/perros">Perros</a></li>
                  <li><a href="<?php echo base_url(); ?>index.php/gatos">Gatos</a></li>
				  <li><a href="<?php echo site_url('usuario/logout'); ?>">Cerrar Session</a></li>
                </ul>
              </nav>
            </div>
        </div>
    </header><!-- #header -->
    <!-- start banner Area -->
    <section class="banner-area relative" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        <?php
  
  echo "Bienvenido ".$this->session->userdata('login');
  ?>
                    </h1>
                    <p class="text-white link-nav"><a href="<?php echo base_url(); ?>animales">Inicio </a>  <span class="lnr lnr-arrow-right"></span> <a href="<?php echo site_url('usuario/panel'); ?>">  <?php
  
  echo "Perfil de ".$this->session->userdata('login');
  ?></a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->
    <!-- Start post-content Area -->
    

    <section class="post-content-area single-post-area">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-4 sidebar-widgets">
                    <div class="widget-wrap">
                        <div class="single-sidebar-widget search-widget">
                            <!--<form class="search-form" action="#">
                                <input placeholder="Search Posts" name="search" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Posts'">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>-->
                        </div>
                        <div class="single-sidebar-widget user-info-widget">
                            <img src="<?php echo base_url(); ?><?php
  
   echo $this->session->userdata('Imagen')
  ?>" alt="PROXIMAMENTE">
                            <a href="#"><h4> <?php
  
  if   ( $this->session->userdata('tipo')=='1')
  {echo 'Usuario';} else	{echo 'Administrador';}
  ?></h4></a>
                            <p>
                              <?php
  
  echo $this->session->userdata('login');
  ?>
                            </p>
														<br><H6>INFORMACION</H6><br />
                           <!-- <ul class="social-links">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <!--<li><a href="#"><i class="fa fa-github"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>   
                            </ul>-->
                             
														 <p>Nombres:
                               <?php
  
   echo $this->session->userdata('Nombres')
  ?>
                            </p>
														  <p>Apellidos:
                               <?php
  
   echo $this->session->userdata('PrimerApellido')
  ?>
                            
														
                               <?php
  
   echo $this->session->userdata('SegundoApellido')
  ?></p>
                            
														<p>Correo:
                               <?php
  
   echo $this->session->userdata('Email')
  ?>
                            </p>
														
                            <a href=""  data-toggle="modal" data-target="#iniciasesion"><label class="primary-btn">Registrar Mascota</label></a> 
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-8 posts-list">
                    <div class="single-post row">
                        <div class="col-lg-12">
                            <a href="<?php echo base_url(); ?>index.php/adopcion">Ver Mascotas</a>
                            <div class="feature-img">
                                <img class="img-fluid" src="img/blog/feature-img1.jpg" alt="">
                            </div>
                            
                        </div>
                        
                     <h2><?PHP echo $this->session->userdata('Nombres')?> <?PHP echo $this->session->userdata('PrimerApellido')?> NO TIENE PUBLICACIONES</h2>
                        
                       
                    </div>

                
                </div>
                
            </div>
        </div>
    </section>
    <!-- End post-content Area -->
     <footer class="footer-area">
        <div class="container">
          <div class="row pt-120 pb-80">
            <div class="col-lg-4 col-md-6">
              <div class="single-footer-widget">
                <h6>Acerca de</h6>
                <p>
                  Este es un sitio web sin fines de lucro dedicada a la adopcion de animales abandonados, maltratados y con problemas de salud. Fundada en el año 2018 con la visión principal ayudar a los animalitos.
                </p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="single-footer-widget">
                <h6>Entradas recientes</h6>
                <div class="row">
                  <ul class="col footer-nav">
                    <li>Animales SOS interviene en este caso</li>
                    <li>Un solo dia y 17vidas en condicion critica</li>

                  </ul>
                </div>
              </div>
            </div>
            <!--<div class="col-lg-4  col-md-6">
              <div class="single-footer-widget mail-chimp">
                <h6 class="mb-20">Contact Us</h6>
                <ul class="list-contact">
                  <li class="flex-row d-flex">
                    <div class="icon">
                      <span class="lnr lnr-home"></span>
                    </div>
                    <div class="detail">
                      <h4>Binghamton, New York</h4>
                      <p>
                        4343 Hinkle Deegan Lake Road
                      </p>
                    </div>
                  </li>
                  <li class="flex-row d-flex">
                    <div class="icon">
                      <span class="lnr lnr-phone-handset"></span>
                    </div>
                    <div class="detail">
                      <h4>00 (953) 9865 562</h4>
                      <p>
                        Mon to Fri 9am to 6 pm
                      </p>
                    </div>
                  </li>
                  <li class="flex-row d-flex">
                    <div class="icon">
                      <span class="lnr lnr-envelope"></span>
                    </div>
                    <div class="detail">
                      <h4>support@colorlib.com</h4>
                      <p>
                        Send us your query anytime!
                      </p>
                    </div>
                  </li>
                </ul>
              </div>
            </div>-->
          </div>
        </div>
        <div class="copyright-text">
          <div class="container">
            <div class="row footer-bottom d-flex justify-content-between">
              <p class="col-lg-8 col-sm-6 footer-text m-0 text-white"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved  <i class="fa fa-heart-o" aria-hidden="true"></i>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
              <div class="col-lg-4 col-sm-6 footer-social">
                <a href="https://www.facebook.com/Salvar-Una-Mascota-299694837529203/"><i class="fa fa-facebook"></i></a>
                <a href="https://www.instagram.com/salvarunamascota/"><i class="fa fa-instagram"></i></a>
                <a href="https://twitter.com/UnaSalvar"><i class="fa fa-twitter"></i></a>

              </div>
            </div>
          </div>
        </div>
      </footer>
      <!-- End footer Area -->

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
    
