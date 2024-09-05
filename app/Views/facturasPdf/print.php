<? $platillaUser = ['denominacion' => '20000', 'denominacion' => '3000']; ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>factura</title>
</head>

<body>

    <style>
        body {
            font-size: 11px;
            width: 190mm;
            /* Ancho de una hoja A4 */
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            overflow-y: scroll;
            /* Asegura que la barra de desplazamiento vertical esté siempre visible */
            font-family: Arial, Helvetica, sans-serif;
        }

        .container_padre {
            background-color: white;
            width: 90%;
            box-sizing: border-box;
            padding: 10mm;
            /* Ajusta el padding según sea necesario */
        }

        header .container {

            border-top: 1px solid black;
        }

        .container_padre h1 {
            text-align: center;
            margin: 8px;
            padding: 0;
        }

        .container {
            width: 100%;
            border: 1px solid black;
            border-top: 0px;

        }



        p {
            width: 90%;
            text-align: left;
            margin: 5px;
            padding: 0;
        }

        table {
            width: 100%;
            table-layout: fixed;
        }

        th,
        td {

            text-align: center;
            padding: 2px;

        }

        th {
            background-color: white;
        }


        textarea {
            width: 148mm;
            border: none;
        }

        textarea:focus {

            outline: none;

        }

        .section {
            padding: 2px;
        }

        .firma {
            margin-top: 50px;
        }
    </style>


    <div class="container_padre">
        <header>
            <div class="container">
                <div class="section">
                    <h1>Plantilla de cuadre</h1>
                    <table>

                        <tr>
                            <th>zona</th>
                            <th>conductor</th>
                            <th>Auxiliar</th>
                            <th>vehiculo</th>
                            <th>poblacion</th>
                        </tr>
                        <?php if (!empty($plantillauser)): ?>
                            <?php foreach ($plantillauser as $dato): ?>
                                <tr>
                                    <td><?= $dato['zona']; ?></td>
                                    <td><?= $dato['conductor']; ?></td>
                                    <td><?= $dato['auxiliar']; ?></td>
                                    <td><?= $dato['vehiculo']; ?></td>
                                    <td><?= $dato['poblacion']; ?></td>
                                </tr>
                                <?php
                                $id = 3;
                                while ($id <= 5) {
                                    echo "<tr>
                                    <td>" . $id . " " . $dato['zona'] . "</td>
                                    <td>numero $id</td>
                                    <td>edad $id</td>
                                    </tr>";
                                    $id++;
                                }
                                ?>
                    </table>
        </header>
        <main>
            <div class="container">
                <div class="section">
                    <p>Efectivo</p>
                    <table>
                        <thead>
                            <tr>
                                <th>Denominacion</th>
                                <th>Cantidad</th>
                                <th>Valor</th>
                                <th></th>
                                <th>Subtotal</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?= $dato['Denominacion']; ?></td>
                                <td><?= $dato['cantidad_efectivo']; ?></td>
                                <td><?= $dato['valor_efectivo']; ?></td>
                                <th></th>
                                <td><?= $dato['sub_efectivo']; ?></td>

                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="container">
                <div class="section">
                    <p>Consignaciones</p>
                    <table class="table1">
                        <thead>
                            <tr>
                                <th>Banco</th>
                                <th>Cantidad</th>
                                <th></th>
                                <th></th>
                                <th>Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?= $dato['banco']; ?></td>
                                <td><?= $dato['cantidad_banco']; ?></td>
                                <td></td>
                                <td></td>
                                <td><?= $dato['sub_consignaciones']; ?></td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
            <div class="container">
                <div class="section">
                    <p>Créditos factura</p>
                    <table class="table1">
                        <thead>
                            <tr>
                                <th>#Factura</th>
                                <th>Cliente</th>
                                <th>Valor</th>
                                <th></th>
                                <th>Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?= $dato['factura_creditos']; ?></td>
                                <td><?= $dato['cliente_credito']; ?></td>
                                <td><?= $dato['valor_credito']; ?></td>
                                <th></th>
                                <td><?= $dato['sub_credito']; ?></td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
            <div class="container">
                <div class="section">
                    <p>Devolucion por facturas</p>
                    <table class="table1">
                        <thead>
                            <tr>
                                <th>#Factura</th>
                                <th>Cliente</th>
                                <th>Valor</th>
                                <th>Motivo</th>
                                <th>Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?= $dato['devolucion_factura']; ?></td>
                                <td><?= $dato['cliente_devolucion_factura']; ?> PÉREZ</td>
                                <td><?= $dato['valor_devolucion_factura']; ?></td>
                                <td><?= $dato['motivo']; ?></td>
                                <td><?= $dato['sub_devolucion_factura']; ?></td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
            <div class="container">
                <div class="section">
                    <p>Devolucion por Productos</p>
                    <table class="table1">
                        <tbody>
                            <tr>
                                <th>#Factura</th>
                                <th>producto</th>
                                <th>Valor</th>
                                <th></th>
                                <th>Subtotal</th>
                            </tr>
                            <tr>
                                <td><?= $dato['factura_devolucion_producto']; ?></td>
                                <td><?= $dato['productos']; ?></td>
                                <td><?= $dato['valor_producto']; ?></td>
                                <td></td>
                                <td><?= $dato['sub_producto']; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="container">
                <div class="section">
                    <p>Gasto adicionales</p>
                    <table class="table1">
                        <tbody>

                            <tr>
                                <th>Motivo</th>
                                <th>Cantidad</th>
                                <th></th>
                                <th></th>
                                <th>Subtotal</th>
                            </tr>

                            <tr>
                                <td><?= $dato['gasto_motivo']; ?></td>
                                <td><?= $dato['cantidad_motivo']; ?></td>
                                <td></td>
                                <td></td>
                                <td><?= $dato['sub_gastos']; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
        <footer>
            <div class="container">
                <div class="section">
                    <table>
                        <tbody>
                            <tr>
                                <th>Total carga</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th>Total</th>
                            </tr>
                            <tr>
                                <td><?= $dato['total_carga']; ?></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><?= $dato['total']; ?></td>
                            </tr>
                        </tbody>

                    </table>
                </div>
            </div>
            <div class="container">
                <div class="section">
                    <p>observaciones</p>
                    <textarea name="" id=""><?= $dato['observaciones']; ?></textarea>
                </div>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="1">No hay usuarios disponibles</td>
        </tr>
    <?php endif; ?>

    <table class="firma">
        <tbody>
            <tr>
            </tr>
            <tr>
                <td>_______________________________________ </td>
                <td>_______________________________________ </td>
            </tr>
            <tr>
                <td>Firma quien recibe</td>
                <td>Firma quien entrega</td>
            </tr>
        </tbody>

    </table>
        </footer>
</body>

</html>