<!DOCTYPE html>
	<html lang="zxx" class="no-js">
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
		<body>	
            <!--inicia sesion--> <div id="formadopcion" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLiveLabel" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLiveLabel"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Formulario de adopcion</font></font></h5>
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
                        <h1 class="mb-20">Formulario para Adoptar una Mascota</h1>
                        <p>Rellena el formulario para dar un nuevo hogar a esta mascota</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <?php echo form_open_multipart('formulario/modificarbd');?>
                        <div class="form-group">
                            <label for="direccion">Direccion</label>
                            <textarea class="form-control" name="direccion" id="exampleTextarea" rows="5" placeholder="Escriba su direccion"></textarea>
                        </div>
                        <div class="form-row"> 
                            <div class="col-6 mb-30">
                                <label for="City">Ciudad</label>
                                <div class="select-option" id="service-select">
                                    <select name="ciudad">
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
                            </div>                            
                            <div class="col-6 mb-30">
                                <label for="postal-code">Número de telefono</label>
                                <input type="text" name="telefono" class="form-control" placeholder="Número de telefono">
                            </div>
                        </div>
                        <button type="submit" class="primary-btn float-right" >
                            Enviar Solicitud
                        </button>
                    <?php echo form_close();?>
                </div>
            </div>
        </div>
    </section>
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
								Adopci&oacute;n				
							</h1>	
							<p class="text-white link-nav"><a href="<?php echo base_url(); ?>index.php/animales">Inicio </a>  <span class="lnr lnr-arrow-right"></span>  <a href="<?php echo base_url(); ?>index.php/adopcion"> Adopci&oacute;n</a></p>
						</div>	
					</div>
				</div>
			</section><br>
			<!-- End banner Area -->
			<!-- Start home-about Area -->
			<?php
                            foreach ($animales->result() as $row)
                            {
                         ?>
			
			
			
			<section class="home-about-area">
				<div class="container-fluid">
					<div class="row align-items-center">	
						<div class="col-lg- home-about-left no-padding">
							<img src="<?php echo base_url(); ?><?php echo $row->Imagen; ?>" alt="" class="rounded">
						</div>
						<div class="col-lg-6 home-about-right no-padding">
							<h1>
								 <?php echo $row->Nombre; ?>
							</h1>
							<ul class="thumbnail-boxed-meta">
								<li><span class="icon icon-xs icon-tan-hide material-icons-event_available"></span><span>Edad: <?php echo $row->Edad; ?> anios</span></li>
								<li><span class="icon icon-xs icon-tan-hide material-icons-done"></span><span>Color: <?php echo $row->Color; ?></span></li>
								<li><span class="icon icon-xs icon-tan-hide material-icons-place"></span><span>Raza: <?php echo $row->Raza; ?></span></li>
							  </ul>
							<p>
								 Descripcion: <?php echo $row->Description; ?>
							</p>
							
							<label class="text-uppercase text-<?php if (($row->Estado)==0){echo 'success';} else{echo 'danger';}?>"> <?php if (($row->Estado)==0){echo 'Disponible para ser adoptado';} else{echo 'El animal ya fue adoptado';}?></label>
                            <?php if (($row->Estado)==0){echo '<div class="col-lg-8 callto-top-right">
								<a  data-toggle="modal" data-target="#formadopcion" href=""   class="primary-btn">Llene el formulario para adoptar</a>
							</div>';}?>
														
						</div>
					</div>
				</div>	
			</section>
                       
                        <?php
                            }
                        ?>
			
			<!-- End home-about Area -->

			<!-- Start testomial Area SIGUIENTE SPRINT-->
<!--			<section class="testomial-area section-gap" id="testimonail">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Personas que visitaron este perfil</h1>
							</div>
						</div>
					</div>						
					<div class="row">
						<div class="active-testimonial-carusel">
							<div class="single-testimonial item">
								<img class="mx-auto" src="img/t1.png" alt="">
								<p class="desc">
									Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory
								</p>
								<h4>Mark Alviro Wiens</h4>
								<p>
									CEO at Google
								</p>
							</div>
							<div class="single-testimonial item">
								<img class="mx-auto" src="img/t2.png" alt="">
								<p class="desc">
									Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory
								</p>
								<h4>Mark Alviro Wiens</h4>
								<p>
									CEO at Google
								</p>
							</div>
							<div class="single-testimonial item">
								<img class="mx-auto" src="img/t3.png" alt="">
								<p class="desc">
									Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory
								</p>
								<h4>Mark Alviro Wiens</h4>
								<p>
									CEO at Google
								</p>
							</div>	
							<div class="single-testimonial item">
								<img class="mx-auto" src="img/t1.png" alt="">
								<p class="desc">
									Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory
								</p>
								<h4>Mark Alviro Wiens</h4>
								<p>
									CEO at Google
								</p>
							</div>
							<div class="single-testimonial item">
								<img class="mx-auto" src="img/t2.png" alt="">
								<p class="desc">
									Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory
								</p>
								<h4>Mark Alviro Wiens</h4>
								<p>
									CEO at Google
								</p>
							</div>
							<div class="single-testimonial item">
								<img class="mx-auto" src="img/t3.png" alt="">
								<p class="desc">
									Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory
								</p>
								<h4>Mark Alviro Wiens</h4>
								<p>
									CEO at Google
								</p>
							</div>															
							<div class="single-testimonial item">
								<img class="mx-auto" src="img/t1.png" alt="">
								<p class="desc">
									Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory
								</p>
								<h4>Mark Alviro Wiens</h4>
								<p>
									CEO at Google
								</p>
							</div>
							<div class="single-testimonial item">
								<img class="mx-auto" src="img/t2.png" alt="">
								<p class="desc">
									Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory
								</p>
								<h4>Mark Alviro Wiens</h4>
								<p>
									CEO at Google
								</p>
							</div>
							<div class="single-testimonial item">
								<img class="mx-auto" src="img/t3.png" alt="">
								<p class="desc">
									Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory
								</p>
								<h4>Mark Alviro Wiens</h4>
								<p>
									CEO at Google
								</p>
							</div>														
						</div>
					</div>
				</div>	
			</section>
			<!-- End testomial Area -->		
	<!-- start footer Area -->
            <br />
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