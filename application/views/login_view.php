<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
  <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets_login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets_login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets_login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets_login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets_login/vendor/animate/animate.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets_login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets_login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets_login/vendor/select2/select2.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets_login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets_login/css/util.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets_login/css/main.css">
<!--===============================================================================================-->
</head>
<body>
<a href="<?php echo site_url('animales'); ?>">VOLVER</a>
  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        <div class="login100-form validate-form">
          <span class="login100-form-title p-b-34">
            Cuenta Login
          </span>

         <?php
            echo form_open_multipart('usuario/validarusr');
          ?>
          <div class="container">
          <div class="row">
          <div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type user name">
            <input id="first-name" class="input100" type="text" name="login" placeholder="Usuario">
            <span class="focus-input100"></span>
          </div>
          <div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Type password">
            <input class="input100" type="password" name="password" placeholder="Password">
            <span class="focus-input100"></span>
          </div>

          <div class="container-login100-form-btn">
            <button class="login100-form-btn" type="submit">
              Inicia Sesion 2
            </button>

          </div>
          </div>
          </div>
          <?php
            echo form_close();
          ?>

          <div class="w-full text-center p-t-27 p-b-239">
            <span class="txt1">

            </span>

            <a href="#" class="txt2">

            </a>
          </div>

          <div class="w-full text-center">
            <a href="<?php echo base_url(); ?>index.php/usuariocrear/agregar" class="txt3">
              Crear Cuenta
            </a><br>
            <a href="<?php echo base_url(); ?>index.php/animalesinvitado" class="txt3">
              Entrar sin iniciar sesion
            </a>
          </div>
        </div>

        <div class="login100-more" style="background-image: url('<?php echo base_url(); ?>assets_login/images/foto01.jpg');"></div>
      </div>
    </div>
  </div>

  <div id="dropDownSelect1"></div>

<!--===============================================================================================-->
  <script src="<?php echo base_url(); ?>assets_login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="<?php echo base_url(); ?>assets_login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
  <script src="<?php echo base_url(); ?>assets_login/vendor/bootstrap/js/popper.js"></script>
  <script src="<?php echo base_url(); ?>assets_login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="<?php echo base_url(); ?>assets_login/vendor/select2/select2.min.js"></script>
  <script>
    $(".selection-2").select2({
      minimumResultsForSearch: 20,
      dropdownParent: $('#dropDownSelect1')
    });
  </script>
<!--===============================================================================================-->
  <script src="<?php echo base_url(); ?>assets_login/vendor/daterangepicker/moment.min.js"></script>
  <script src="<?php echo base_url(); ?>assets_login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
  <script src="<?php echo base_url(); ?>assets_login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
  <script src="<?php echo base_url(); ?>assets_login/js/main.js"></script>

</body>
</html>
