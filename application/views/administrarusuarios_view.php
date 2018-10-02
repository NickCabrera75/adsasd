<!DOCTYPE html>
<html lang="en">
<head>
  <title>Modificar Usuarios</title>
</head>
<body>

<ul>
<?php
foreach($infoestudiante->result() as $row)
{
?>
  <?php echo form_open_multipart('estudiante/modificarbd'); ?>

    <input type="hidden" name="idestudiante" value="<?php echo $row->idestudiante; ?>">
    <input type="text" name="nombres" value="<?php echo $row->nombres; ?>">


    <input type="hidden" name="idestudiante" value="<?php echo $row->idestudiante; ?>">
    <input type="text" name="apellidos" value="<?php echo $row->apellidos; ?>">

    <input type="hidden" name="idestudiante" value="<?php echo $row->idestudiante; ?>">
    <input type="text" name="nota" value="<?php echo $row->nota; ?>">
    <button type="submit">Modificar</button>

  <?php echo form_close(); ?>
<?php
}
?>
</ul>

</body>
</html>
