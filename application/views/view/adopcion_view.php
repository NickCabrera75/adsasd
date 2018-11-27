<div id="Perfilmascota" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLiveLabel" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLiveLabel"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Perfil de <?php echo $row->Nombre; ?></font></font></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">×</font></font></span>
                    </button>
                </div>
                <div class="modal-body">
                    <section class="Volunteer-form-area section-gap">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-9">
                                    <section class="home-about-area">
                                        <div class="container-fluid">
                                           <?php
                                            function accion()
                                            {
                                                foreach ($animales->result() as $row)
                                                {
                                                    ?>
                                            <div class="row align-items-center">
                                                
                                                <div class="col-lg- home-about-left no-padding">
                                                    <img src="<?php echo base_url(); ?>images/adoptar/<?php echo $row->Imagen; ?>" alt="" class="rounded">
                                                </div>
                                                <div class="col-lg-6 home-about-right no-padding">
                                                    
                                                            <?php echo $row->Nombre; ?>

                                                       
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
                                                        <a data-toggle="modal" data-target="#formadopcion" href="" class="primary-btn">Llene el formulario para adoptar</a>
                                                    </div>';}?>

                                                </div>
                                            </div>
                                            <?php
                                                    
                                                }
                                            }?>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
<div id="formadopcion" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLiveLabel" style="display: none;" aria-hidden="true">
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
                                    <button type="submit" class="primary-btn float-right">
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

<div class="col-lg-8 callto-top-right">
								<a  href="<?php echo base_url(); ?>adopcion"   class="primary-btn">Todos</a>
    <a  href="<?php echo base_url(); ?>adopcionperros"   class="primary-btn">Perros</a>
    <a   href="<?php echo base_url(); ?>adopciongatos"   class="primary-btn">Gatos</a>
							</div><br>

			<?php
                        
                            foreach ($animales->result() as $row)
                            {
                                
                         ?>
                                
			
			
			<section class="home-about-area">
				<div class="container-fluid">
					<div class="row align-items-center">	
						<div class="col-lg- home-about-left no-padding">
							 <a data-toggle="modal" data-target="#Perfilmascota" href=""><img src="<?php echo base_url(); ?>images/adoptar/<?php echo $row->Imagen; ?>" alt="" class="rounded"></a>
						</div>
						<div class="col-lg-6 home-about-right no-padding">
							<h1>
								 <?php echo $row->Nombre; ?>
                                <?php echo $row->IdMascotas; ?>
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
     