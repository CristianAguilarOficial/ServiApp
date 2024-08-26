<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/public/css/bootstrap/bootstrap.css">
    <title>Agregar - Usuarios</title>
</head>
<body>


<form action="<?= base_url('usuarios') ?>" class=" row g-3" method="post" autocomplete="off">



    <div class="col-md-12">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" value="<?= set_value('nombre') ?>">
    </div>

    <div class="col-md-12">
        <label for="correo" class="form-label">correo</label>
        <input type="email" class="form-control" id="correo" name="correo" value="<?= set_value('correo') ?>">
    </div>
    <br>

    </div>

    <div class="col-md-12">
        <a href="<?= base_url('usuarios'); ?>" class="btn btn-secondary">Regresar</a>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>





</form>

<?php if (session()->getFlashdata('error') !== null) { ?>
    <div class="alert alert-danger">
        <?= session()->getFlashdata('error'); ?>
    </div>
<?php } ?>


<script src="<?php echo base_url() ?>/public/js/bootstrap/bootstrap.js"></script>
    
</body>
</html>