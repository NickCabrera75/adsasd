

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Adopci&oacute;n				
							</h1>	
							<p class="text-white link-nav"><!--<a href="<?php echo base_url(); ?>animales">Inicio </a>  <span class="lnr lnr-arrow-right"></span>-->  <a href="<?php echo site_url('usuario/panel'); ?>">  <?php
  
  echo "Perfil de ".$this->session->userdata('login');
  ?></a>  <span class="lnr lnr-arrow-right"></span>  <a href="<?php echo base_url(); ?>adopcion"> Adopci&oacute;n</a></p>
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
			
			
            <br />
     