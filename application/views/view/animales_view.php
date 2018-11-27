
<section class="banner-area relative" id="home">
    <div class="container">
        <div class="overlay overlay-bg"></div>
        <div class="row fullscreen d-flex align-items-center justify-content-start">
            <div class="banner-content col-lg-8 col-md-12">
                <h1 class="text-uppercase">
                    Adoptanos. <br>
                    Necesitamos tu ayuda.
                </h1>
                <p class="text-white sub-head">
                    Una vida que rescatas es una vida que salvas. ¡ADOPTA!
                </p>
                <a href="<?php echo base_url(); ?>perrosgatos" class="primary-btn header-btn text-uppercase">Encuentra una mascota para adoptar</a>
            </div>
        </div>
    </div>
</section>

<section class="image-carusel-area">
    <div class="container">
        <div class="row">
            <div class="active-image-carusel">
                <?php
            foreach ($animales->result() as $row)
            {
              ?>
                <div class="single-image-carusel">
                    <img class="img-fluid" src="<?php echo base_url(); ?><?php echo $row->Imagen; ?>" alt="">
                </div>
                <?php
            }
            ?>
            </div>
        </div>
    </div>
</section>

<section class="process-area section-gap">
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
                    <a href="#" data-toggle="modal" data-target="#iniciasesion">
                        <h4>
                            Registrarse\Iniciar Sesion
                        </h4>
                    </a>
                    <p>
                        Iniciar sesion con tu usuario y contraseña/ llenar el formulario y registrarse
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-process">
                    <span class="lnr lnr-thumbs-up"></span>
                    <a href="<?php echo base_url(); ?>perrosgatos">
                        <h4>
                            Selección de mascotas
                        </h4>
                    </a>
                    <p>
                        Selecciona a la mascota que mas te agrade
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
                        Llena en el formulario de adopcion con tus datos personales
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
                        LLeva a tu nueva mascota a tu hogar
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="video-area section-gap">

    <div class="container">

        <div class="row justify-content-center align-items-center">

            <div class="col-lg-8">
                <div class="description">
                    <h4>Video</h4>
                    <p>
                        Ellos no te abandonaran jam&aacute;s, NO NOS DEJES!
                    </p>
                </div>
                <div class="about-video-right justify-content-center align-items-center d-flex relative">
                    <div class="overlay overlay-bg"></div>

                    <a class="play-btn" href="<?php echo base_url(); ?>videos/video01.mp4"><img class="img-fluid mx-auto" src="<?php echo base_url(); ?>assets/img/play-btn.png" alt=""></a>       
                </div>
            </div>
        </div>
    </div>
</section>
