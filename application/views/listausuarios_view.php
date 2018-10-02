<!DOCTYPE html>
<html lang="">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de usuarios</title>
  <link rel="stylesheet" href="<?php echo base_url(); ?>bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>bootstrap/dist/css/bootstrap.css">
  <link rel="stylesheet" href="../../bootstrap.css">
</head>

<body>
<br>
<a href="<?php echo base_url(); ?>index.php/usuariocrear/agregar" >
<button class="btn btn-lg btn-primary" type="button">Agregar Usuarios</button></a>
<br>
<br>
<div class="col-md6">
<table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>#</th>
          <th>Nombre</th>
          <th>Tipo</th>
          <th>Editar</th>
          <th>Eliminar</th>
        </tr>
      </thead>
      <tbody>
      <?php
        foreach ($usuarios->result() as $row)
        {
          ?>
          <tr>
          <td><?php echo $row->idusuarios; ?></td>
          <td><?php echo $row->login; ?></td>
          <td><?php echo $row->tipo; ?></td>
          <td><?php echo form_open_multipart('usuario/modificar'); ?><input type="hidden" name="idusuarios" value="<?php echo $row->idusuarios; ?>"><button class="btn btn-xs btn-warning" type="submit">Editar</button><?php echo form_close(); ?></td>
          <td><?php echo form_open_multipart('usuario/eliminarbd'); ?><input type="hidden" name="idusuarios" value="<?php echo $row->idusuarios; ?>"><button class="btn btn-xs btn-danger" type="submit">Eliminar</button><?php echo form_close(); ?></td>
          </tr>
          <?php
        }
        ?>
      </tbody>
    </table>
</div>
</body>
</html>
