<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/public/css/bootstrap/bootstrap.css">
    <title>Editar - Usuarios</title>
</head>

<body>

    <?php if (session()->getFlashdata('error') !== null) { ?>
        <div class="alert alert-danger">
            <?= session()->getFlashdata('error'); ?>
        </div>
    <?php } ?>

    <form action="<?= base_url('usuarios/' . $usuario['id_usuario']); ?>" class=" row g-3" method="post" autocomplete="off">


        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="id_usuario" value="<?= $usuario['id_usuario']; ?>">



        <div class="col-md-12">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="<?= $usuario['nombre']  ?>">
        </div>

        <div class="col-md-12">
            <label for="correo" class="form-label">Correo</label>
            <input type="email" class="form-control" id="correo" name="correo" value="<?= $usuario['correo'] ?>" required autofocus>
        </div>
        <br>



        <div class="col-md-12">
            <a href="<?= base_url('usuarios'); ?>" class="btn btn-secondary">Regresar</a>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </form>






    <script src="<?php echo base_url() ?>/public/js/bootstrap/bootstrap.js"></script>

</body>

</html>