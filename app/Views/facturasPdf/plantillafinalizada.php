<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/public/css/frameworks/bootstrap/bootstrap.css">
    <title>vista de prueba 1</title>
</head>

<body>
    <h1>Finalizadas</h1>
    <table class="table table-hover table-bordered my-3" aria-describedby="titulo">
        <thead class="table-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Zona</th>
                <th scope="col">conductor</th>
                <th scope="col">auxiliar</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>

        <a href="<?= base_url('prueba/new'); ?>" class="btn btn-success">Agregar</a>

        <tbody>

            <?php if (!empty($plantillauser)): ?>
                <?php foreach ($plantillauser as $informacion): ?>
                    <tr>
                        <td><?= $informacion['id_plantila']; ?></td>
                        <td><?= $informacion['zona']; ?></td>
                        <td><?= $informacion['conductor']; ?></td>
                        <td><?= $informacion['auxiliar']; ?></td>

                        <td>
                            <a href="<?= base_url('finalizadas/new') ?>" class="btn btn-primary">Vista factura</a>
                            <a href="<?= base_url('generar/pdf') ?>" class="btn btn-success">Enviar PDF</a>
                        </td>
                    </tr>

                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="1">No hay usuarios disponibles</td>
                </tr>
            <?php endif; ?>


        </tbody>
    </table>

    <script src="<?php echo base_url() ?>/public/js/bootstrap/bootstrap.js"></script>

</body>

</html>