<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/fav.png">
    <title>Salva tu mascota</title>
    <?php include("templates/template_head.php"); ?>
</head>
<body>
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


<header id="header" id="home">
    <div class="container main-menu">
        <div class="row align-items-center justify-content-between d-flex">
            <div id="logo">
                <h1><a>Bienvenido</a></h1>
            </div>
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                   <!-- <li class="menu-active"><a href="<?php echo base_url(); ?>animales">Inicio</a></li>-->
                    <li><a href="<?php echo site_url('usuario/logout'); ?>">Cerrar Session</a></li>
                  


                </ul>
            </nav>
        </div>
    </div>
</header>