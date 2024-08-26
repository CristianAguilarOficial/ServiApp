<?= $this->extend('layout/datos'); ?>

<?= $this->section('content');?>

    <table class="table table-hover table-bordered my-3" aria-describedby="titulo">
        <thead class="table-dark">
            <tr>
            <th>ID</th>
                <th scope="col">Numero de Factura</th>
                <th scope="col">Codigo Cliente</th>
                <th scope="col">Nombre Cliente</th>
                <th scope="col">Codigo Producto</th>
                <th scope="col">Nombre Producto</th>
                <th scope="col">Tipo</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Bodega</th>
                <th scope="col">Valor sin IVA</th>
                <th scope="col">Valor con IVA</th>
                <th scope="col">Valor Factura</th>
                <th scope="col">Asesor</th>
                <th scope="col">Ruta</th>
                <th scope="col">Placa</th>
                <th scope="col">Población</th>
                <th scope="col">Valor Carge</th>
                <th scope="col">Conductor</th>
                <th scope="col">Auxiliar</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>

            <?php if (!empty($plantillamaster)): ?>
                <?php foreach ($plantillamaster as $informacion): ?>
                    <tr>
                        <td><?= $informacion['id_base']; ?></td>
                        <td><?= $informacion['numero_factura']; ?></td>
                        <td><?= $informacion['codigo_cliente']; ?></td>
                        <td><?= $informacion['nombre_cliente']; ?></td>
                        <td><?= $informacion['codigo_producto']; ?></td>
                        <td><?= $informacion['nombre_producto']; ?></td>
                        <td><?= $informacion['tipo']; ?></td>
                        <td><?= $informacion['num_cantidad']; ?></td>
                        <td><?= $informacion['bodega']; ?></td>
                        <td><?= $informacion['valor_sin_iva']; ?></td>
                        <td><?= $informacion['valor_con_iva']; ?></td>
                        <td><?= $informacion['varl_factura']; ?></td>
                        <td><?= $informacion['asesor']; ?></td>
                        <td><?= $informacion['ruta']; ?></td>
                        <td><?= $informacion['placa']; ?></td>
                        <td><?= $informacion['poblacion']; ?></td>
                        <td><?= $informacion['valor_cargue']; ?></td>
                        <td><?= $informacion['conductor']; ?></td>
                        <td><?= $informacion['auxiliar']; ?></td>


                        <td>
                            <a href="<?= base_url('plantilla/' . $informacion['id_base'] . '/edit'); ?>" class="btn btn-warning btn-sm me-2 mb-2" >Editar</a>
                            <form action="<?= base_url('plantilla/' . $informacion['id_base']); ?>" method="post" style="display:inline;">
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
    <a href="<?= base_url('plantilla/new'); ?>" class="btn btn-success m-3">Agregar</a>
<?= $this->endSection();?>
