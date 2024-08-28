<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/public/css/frameworks/bootstrap/bootstrap.css">
    <title>Usuarios</title>
</head>

<body>
    <table class="table table-hover table-bordered my-3" aria-describedby="titulo">
        <thead class="table-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Correo</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>

        <a href="<?= base_url('usuarios/new'); ?>" class="btn btn-success">Agregar</a>

        <tbody>

            <?php if (!empty($usuarios)): ?>
                <?php foreach ($usuarios as $usuario): ?>
                    <tr>
                        <td><?= $usuario['id_usuario']; ?></td>
                        <td><?= $usuario['nombre']; ?></td>
                        <td><?= $usuario['correo']; ?></td>

                        <td>
                            <a href="<?= base_url('usuarios/' . $usuario['id_usuario'] . '/edit'); ?>" class="btn btn-warning btn-sm me-2">Editar</a>
                            <form action="<?= base_url('usuarios/' . $usuario['id_usuario']); ?>" method="post" style="display:inline;">
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que quieres eliminar este registro?');">Eliminar</button>
                            </form>
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