<!DOCTYPE html>
<html lang="">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Agregar Usuario</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets_login/vendor/bootstrap/css/bootstrap.min.css">
</head>

<body>
<?php
  echo form_open_multipart('usuariocrear/agregarbd');
  ?>
  <div class="container">
  <input type="text" name="login" placeholder="Nombre">
  <input type="text" name="password" placeholder="Password">
  <!--<input type="text" name="tipo" placeholder="Tipo Usuario">-->
 <!-- <select name="tipo">
  <option value="tipo">invitado</option>
  <option>admin</option>
  </select>-->
  <button type="submit">Agregar</button>
  </div>
  <?php
  echo form_close();
  ?>
</body>
</html>
