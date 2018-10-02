<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Login</title>
</head>
<body>
<?php
  echo form_open_multipart('usuario/validarusr');
?>
   <input type="text" name="login" placeholder="login">
   <input type="text" name="password" placeholder="password">

      <button type="submit">Ingresar</button>
<?php
echo form_close();
?>
</body>
</html>