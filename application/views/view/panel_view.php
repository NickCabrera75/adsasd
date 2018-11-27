
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
                    <p class="text-white link-nav"><!--<a href="<?php echo base_url(); ?>animales">Inicio </a>-->  <span class="lnr lnr-arrow-right"></span> <a href="<?php echo site_url('usuario/panel'); ?>">  <?php
  
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
                            <a href="<?php echo base_url(); ?>index.php/adopcion">Ver todas las Mascotas</a>
                            <div class="feature-img">
                                <img class="img-fluid" src="img/blog/feature-img1.jpg" alt="">
                            </div>
                            
                        </div>
                        
                     <h2>Macotas de <?PHP echo $this->session->userdata('Nombres')?> <?PHP echo $this->session->userdata('PrimerApellido')?> </h2>
                        <br /><br />
                        
                      
                        <?php echo $this->session->userdata('idMascota') ?>
                    </div>

                
                </div>
                
            </div>
        </div>
    </section>
    <!-- End post-content Area -->
     