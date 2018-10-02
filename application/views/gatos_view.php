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
             <!--inicia sesion--> <div id="iniciasesion" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLiveLabel" style="display: none;" aria-hidden="true">
        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLiveLabel"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">LOGIN</font></font></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">×</font></font></span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                     <?php
            echo form_open_multipart('usuario/validarusr');
          ?>
                                  <div class="col-lg-6">
                  <form method="post" novalidate="" data-parsley-validate="">
                     <!-- START panel-->
                     <div class="panel panel-default">
                        <div class="panel-heading">
                           
                        </div>
                        <div class="panel-body">
                           <div class="form-group">
                              <label class="control-label">Nombre de usuario *</label>
                              <input name="login" placeholder="Usuario" class="form-control parsley-error" required="required" type="text" data-parsley-id="9062"><ul class="parsley-errors-list filled" id="parsley-id-4702"><li class="parsley-required">Este campo es obligatorio</li></ul>
                           </div>
                           <div class="form-group">
                              <label class="control-label">Password *</label>
                              <input name="password"  class="form-control parsley-error" required="" type="password" data-parsley-id="8089"><ul class="parsley-errors-list filled" id="parsley-id-8089"><li class="parsley-required">Este campo es obligatorio</li></ul>
                           </div>
                           <div class="required">* Campos requeridos</div>
                        </div>
                         <br />
                        <div class="panel-footer">
                           <button class="btn btn-Default" type="submit">Inicia Sesion</button>
                        </div>
                     </div>
                     <!-- END panel-->
                  </form>
               </div>
                                     <?php
            echo form_close();
          ?>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-inverse" data-toggle="modal" data-target="#crearcuenta">
                         
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">
                               Crear Cuenta
                            </font>
                        </font>
                    </button>
                                </div>
                            </div>
                        </div>
                    </div> 
      
        
        <!--crear cuenta--> <div id="crearcuenta" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLiveLabel" style="display: none;" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLiveLabel"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">TE ESTAS CREANDO UNA CUENTA</font></font></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">×</font></font></span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <?php
  echo form_open_multipart('usuariocrear/agregarbd');
  ?>
                                
                              <div class="panel panel-default">
                        <div class="panel-heading">
                           
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                              <label class="control-label">Nombres *</label>
                              <input name="Nombres" class="form-control" required type="text" data-parsley-id="1099"><ul class="parsley-errors-list" id="parsley-id-1099"></ul>
                           </div>
                            <div class="form-group">
                              <label class="control-label">Primer Apellido *</label>
                              <input name="PrimerApellido" class="form-control" required type="text" data-parsley-id="1099"><ul class="parsley-errors-list" id="parsley-id-1099"></ul>
                           </div>
                            <div class="form-group">
                              <label class="control-label">Segundo Apellido </label>
                              <input name="SegundoApellido" class="form-control" type="text" data-parsley-id="1099"><ul class="parsley-errors-list" id="parsley-id-1099"></ul>
                           </div>
                           <div class="form-group">
                              <label class="control-label">Correo Electronico *</label>
                              <input name="Email" placeholder="persona@email.com" class="form-control" required="" type="text" data-parsley-id="1099"data-parsley-type="email" ><ul class="parsley-errors-list" id="parsley-id-1099"></ul>
                           </div>
                             
                            <div class="form-group">
                              <label class="control-label">Nombre de usuario *</label>
                              <input name="login" placeholder="Usuario" class="form-control parsley-error" required="required" type="text" data-parsley-id="9062"><ul class="parsley-errors-list filled" id="parsley-id-4702"><li class="parsley-required">Nota: con esto iniciaras session</li></ul>
                           </div>
                         <h5>(PROXIMAMENTE) Foto de perfil</h5>
                          
                            <input disabled type="file" name="" accept="images/usuarios/*.jpg ">
                           <div class="form-group">
                              <label class="control-label">Password *</label>
                              <input  name="password" class="form-control" id="id-password" required="" type="password" data-parsley-id="1497"><ul class="parsley-errors-list" id="parsley-id-1497"></ul>
                           </div>
                          <!-- <div class="form-group">
                              <label class="control-label">Confirm Password *</label>
                              <input name="confirmPassword" class="form-control" required="" type="password" data-parsley-equalto="#id-password" data-parsley-id="3548"><ul class="parsley-errors-list" id="parsley-id-3548"></ul>
                           </div>-->
                            <h5>(PROXIMAMENTE) Captcha</h5>
                            
                            <br />
                           <div class="required">* Campos Requeridos</div>
                        </div><br /><br />
                        <div class="panel-footer">
                           <div class="clearfix">
                              <div class="pull-left">
                                 <div class="checkbox c-checkbox">
                                    <label>
                                       <input name="agreements" required="" type="checkbox" data-parsley-error-message="Please read and agree the terms" data-parsley-id="1103" data-parsley-multiple="agreements">
                                       <span class="fa fa-check"></span>Yo Acepto los  <a href="javascript:void(0);">terminos de uso</a>
                                    </label><ul class="parsley-errors-list" id="parsley-id-multiple-agreements"></ul>
                                 </div>
                              </div>
                              <div class="pull-right">
                                 <button class="btn btn-inverse" type="submit">Registrar</button>
                              </div>
                           </div>
                        </div>
                     </div>
<?php
  echo form_close();
  ?>
                                </div>
                               <!-- <div class="modal-footer">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Crear Cuenta</font></font></span>
                                    </button>
                                </div>-->
                            </div>
                        </div>
                    </div>
			 <header id="header" id="home">
          <div class="container main-menu">
            <div class="row align-items-center justify-content-between d-flex">
              <div id="logo">
                <h1 ><a href="<?php echo base_url(); ?>index.php/animales">Bienvenido</a></h1>
              </div>
             <nav id="nav-menu-container">
                <ul class="nav-menu">
                  <li class="menu-active"><a href="<?php echo base_url(); ?>animales">Inicio</a></li>
                  <li><a href="<?php echo base_url(); ?>perros">Perros</a></li>
                  <li><a href="<?php echo base_url(); ?>gatos">Gatos</a></li>
                    <li><a href="" data-toggle="modal" data-target="#iniciasesion"> <span class="btn-label"><i class="fa fa-user"></i>
                           </span><font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">
                               Iniciar Sesion
                            </font>
                        </font></a></li>
                     
                    <li><a href="" data-toggle="modal" data-target="#crearcuenta"> <span class="btn-label"><i class="fa fa-ellipsis-v"></i>
                           </span><font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">
                               Crear Cuenta
                            </font>
                        </font></a></li>
                    
				  
                </ul>
              </nav><!-- #nav-menu-container -->
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
								Gatos				
							</h1>	
							<p class="text-white link-nav"><a href="<?php echo base_url(); ?>index.php/animales">Inicio </a>  <span class="lnr lnr-arrow-right"></span>  <a href="<?php echo base_url(); ?>index.php/gatos"> Gatos</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	
				
			<!-- Start cat-list Area -->
			<section class="cat-list-area section-gap">
				<div class="container">
					<div class="row">
                        
                         <?php
                            foreach ($animales->result() as $row)
                            {
                         ?>
                        <div class="col-lg-3 col-md-6">
							<div class="single-cat-list">
							  <img src="<?php echo base_url(); ?><?php if (($row->Tipo)==0){echo $row->Imagen;}?>" alt="" class="img-fluid rounded">
							  <div class="overlay">
							    <div class="text">Nombre: <?php echo $row->Nombre; ?><br>
                                                  Anios: <?php echo $row->Edad; ?><br>
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
			<!-- End cat-list Area -->
					

			<section class="calltoaction-area section-gap relative">
				<div class="container">
					<div class="overlay overlay-bg"></div>						
					<div class="row align-items-center justify-content-center">
						<h1 class="text-white">¿Desea ayudar? Registrese</h1>
						<p class="text-white">
							Adoptando una mascota su vida puede cambiar. Porque adoptando da una nueva oportunidad de ser feliz a un angel que necesita cariño.
						</p>
						<div class="buttons d-flex flex-row">
							<a href="#" class="primary-btn text-uppercase" data-toggle="modal" data-target="#iniciasesion">Iniciar Sesion</a>
							<a href="#" class="primary-btn text-uppercase" data-toggle="modal" data-target="#crearcuenta">Registrese ahora</a>
						</div>
					</div>
				</div>	
			</section>
				
			<!-- start footer Area -->
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