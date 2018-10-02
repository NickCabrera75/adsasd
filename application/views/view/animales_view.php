<!--inicia sesion-->
<div id="iniciasesion" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLiveLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLiveLabel">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">LOGIN</font>
                    </font>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">×</font>
                        </font>
                    </span>
                </button>
            </div>
            <div class="modal-body">
                <?php
            echo form_open_multipart('usuario/validarusr');
          ?>
                <div class="col-lg-6">
                    <form method="post" novalidate="" data-parsley-validate="">

                        <div class="panel panel-default">
                            <div class="panel-heading">

                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <label class="control-label">Nombre de usuario *</label>
                                    <input name="login" placeholder="Usuario" class="form-control parsley-error" required="required" type="text" data-parsley-id="9062">
                                    <ul class="parsley-errors-list filled" id="parsley-id-4702">
                                        <li class="parsley-required">Este campo es obligatorio</li>
                                    </ul>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Password *</label>
                                    <input name="password" class="form-control parsley-error" required="" type="password" data-parsley-id="8089">
                                    <ul class="parsley-errors-list filled" id="parsley-id-8089">
                                        <li class="parsley-required">Este campo es obligatorio</li>
                                    </ul>
                                </div>
                                <div class="required">* Campos requeridos</div>
                            </div>
                            <br />
                            <div class="panel-footer">
                                <button class="btn btn-Default" type="submit">Inicia Sesion</button>
                            </div>
                        </div>

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


<!--crear cuenta-->
<div id="crearcuenta" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLiveLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLiveLabel">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">TE ESTAS CREANDO UNA CUENTA</font>
                    </font>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">×</font>
                        </font>
                    </span>
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
                            <input name="Nombres" class="form-control" required type="text" data-parsley-id="1099">
                            <ul class="parsley-errors-list" id="parsley-id-1099"></ul>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Primer Apellido *</label>
                            <input name="PrimerApellido" class="form-control" required type="text" data-parsley-id="1099">
                            <ul class="parsley-errors-list" id="parsley-id-1099"></ul>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Segundo Apellido </label>
                            <input name="SegundoApellido" class="form-control" type="text" data-parsley-id="1099">
                            <ul class="parsley-errors-list" id="parsley-id-1099"></ul>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Correo Electronico *</label>
                            <input name="Email" placeholder="persona@email.com" class="form-control" required="" type="text" data-parsley-id="1099" data-parsley-type="email">
                            <ul class="parsley-errors-list" id="parsley-id-1099"></ul>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Nombre de usuario *</label>
                            <input name="login" placeholder="Usuario" class="form-control parsley-error" required="required" type="text" data-parsley-id="9062">
                            <ul class="parsley-errors-list filled" id="parsley-id-4702">
                                <li class="parsley-required">Nota: con esto iniciaras session</li>
                            </ul>
                        </div>
                        <h5>(PROXIMAMENTE) Foto de perfil</h5>

                        <input type="file" name="Imagen" accept="images/usuarios/*.jpg ">
                        <div class="form-group">
                            <label class="control-label">Password *</label>
                            <input name="password" class="form-control" id="id-password" required="" type="password" data-parsley-id="1497">
                            <ul class="parsley-errors-list" id="parsley-id-1497"></ul>
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
                                        <span class="fa fa-check"></span>Yo Acepto los <a href="javascript:void(0);">terminos de uso</a>
                                    </label>
                                    <ul class="parsley-errors-list" id="parsley-id-multiple-agreements"></ul>
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
                <h1><a href="<?php echo base_url(); ?>animales">Bienvenido</a></h1>
            </div>
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="<?php echo base_url(); ?>animales">Inicio</a></li>
                    <li><a href="<?php echo base_url(); ?>perros">Perros</a></li>
                    <li><a href="<?php echo base_url(); ?>gatos">Gatos</a></li>
                    <li><a href="" data-toggle="modal" data-target="#iniciasesion"> <span class="btn-label"><i class="fa fa-user"></i>
                            </span>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">
                                    Iniciar Sesion
                                </font>
                            </font>
                        </a></li>

                    <li><a href="" data-toggle="modal" data-target="#crearcuenta"> <span class="btn-label"><i class="fa fa-ellipsis-v"></i>
                            </span>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">
                                    Crear Cuenta
                                </font>
                            </font>
                        </a></li>


                </ul>
            </nav>
        </div>
    </div>
</header>
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
                <a href="<?php echo base_url(); ?>usuario" class="primary-btn header-btn text-uppercase">Encuentra una mascota para adoptar</a>
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
                    <a href="#">
                        <h4>
                            Registrarse\Iniciar Sesion
                        </h4>
                    </a>
                    <p>
                        Iniciar session con tu usuario y contrasenia/ llenar el formulario y registrarse
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

<br><br>
<section class="video-area section-gap">

    <div class="container">

        <div class="row justify-content-center align-items-center">

            <div class="col-lg-8">
                <div class="description">
                    <h4>Videos</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.
                    </p>
                </div>
                <div class="about-video-right justify-content-center align-items-center d-flex relative">

                    <div class="overlay overlay-bg"></div>

                    <a class="play-btn" href="https://www.youtube.com/watch?v=lPe4vmjY6Fk"><img class="img-fluid mx-auto" src="<?php echo base_url(); ?>assets/img/play-btn.png" alt=""></a>
                </div>

            </div>
        </div>
    </div>
</section>