<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/public/css/bootstrap/bootstrap.css">
    <title>Editar - prueba</title>
</head>

<body>


    <form action="<?= base_url('prueba/' . $master['id_base']); ?>" class=" row g-3" method="post" autocomplete="off">


        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="id_base" value="<?= $master['id_base']; ?>">



        <div class="col-md-12">
            <label class="form-label">cedula</label>
            <input type="text" class="form-control" id="nombre" name="identificacion" value="<?= $master['cedula']  ?>">
        </div>

        <div class="col-md-12">
            <label  class="form-label">nombre</label>
            <input type="text" class="form-control" id="correo" name="perro1" value="<?= $master['nombre'] ?>" required autofocus>
        </div>

        <div class="col-md-12">
            <label  class="form-label">apellido</label>
            <input type="text" class="form-control" id="correo" name="perro2" value="<?= $master['apellido'] ?>" required autofocus>
        </div>
        
        <br>



        <div class="col-md-12">
            <a href="<?= base_url('prueba/'); ?>" class="btn btn-secondary">Regresar</a>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </form>






    <script src="<?php echo base_url() ?>/public/js/bootstrap/bootstrap.js"></script>

</body>

</html>