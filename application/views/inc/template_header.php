<!DOCTYPE html>
<html>
<head>
    
    <title>Salva tu mascota</title>
    <?php include("templates/template_head.php"); ?>
    

</head>
<body>
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
                                
                                <fb:login-button scope="public_profile,email" onlogin="validarUsuario();"></fb:login-button><br>

                                <google:login-button class="g-signin2" data-onsuccess="onSignIn"></google:login-button>
                            </div>
                        </div>

                    </form>
                </div>
                <?php
            echo form_close();
          ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#crearcuenta">

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
                        <font style="vertical-align: inherit;">CREAR CUENTA</font>
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
                         <h5>Foto de perfil</h5>

                        <input type="file" name="imagenes" id="imagenes">
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

<div id="contactanos" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLiveLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLiveLabel">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">CONTACTANOS</font>
                    </font>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">×</font>
                        </font>
                    </span>
                </button>
            </div><br>

            <div class="container">
                <div class="row container">
                    <div class="card chosen-container" style="width:215px">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3807.5698043407774!2d-66.14991406569172!3d-17.384421688357513!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2sbo!4v1540896008698" width="210" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
                        <div class="card-body">
                            <h4 class="card-title">Patitas Descalzas</h4>
                            <p class="card-text">
                                Ciudad: Cochabamba
                                Calle: Paccieri, Ismael Vasquez<br>
                                Telefono: 4264578
                                Celular: 79788234
                                Pagina: <a href="http://www.patitasdescalzas.com.bo" >http://www.patitasdescalzas.com.bo</a>
                            </p>
                        </div> 
                    </div>

                    <div class="card chosen-container" style="width:215px">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3805.728244110488!2d-66.10878447762143!3d-17.472716389453904!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x93e371d87a0b8b95%3A0x36f1b676a6071bb6!2sCentro+De+Adopciones+San+Martin+De+Porres!5e0!3m2!1ses!2sbo!4v1540896860692" width="210" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
                        <div class="card-body">
                            <h4 class="card-title">Centro de Adopciones San Martin de Porres</h4>
                            <p class="card-text">
                                Ciudad: Cochabamba
                                Calle: Ushpa Ushpa<br>
                                Telefono: 4264545
                                Celular: 75464063
                            </p>
                        </div>
                    </div>

                    <div class="card chosen-container" style="width:215px">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7614.678526312893!2d-66.27435962768658!3d-17.395498901365528!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sbo!4v1540898885952" width="210" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
                        <div class="card-body">
                            <h4 class="card-title">Centro de Rehabilitación Canina</h4>
                            <p class="card-text">
                                Ciudad: Cochabamba
                                Calle: Av. Ferroviaria, Capitán Ustáriz<br>
                                Telefono: 4265645
                                Celular: 70356236
                                Pagina: <a href="http://www.cerecan.org" >http://www.cerecan.org</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
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

                    <li><a href="" data-toggle="modal" data-target="#crearcuenta"> <span class="btn-label"><i class="fa fa-user"></i>
                            </span>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">
                                    Crear Cuenta
                                </font>
                            </font>
                        </a></li>
                     <li><a href="" data-toggle="modal" data-target="#contactanos"> <span class="btn-label"><i class="fa fa-ellipsis-v"></i>
                            </span>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">
                                    Contactanos
                                </font>
                            </font>
                        </a></li>


                </ul>
            </nav>
        </div>
    </div>
</header>