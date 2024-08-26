<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/public/css/bootstrap/bootstrap.css">
    <title>Editar - prueba</title>
</head>

<body>

    
    <form action="<?= base_url('plantilla/' . $plantillamaster['id_base']); ?>" class=" row g-3" method="post" autocomplete="off">

        
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="id_base" value="<?= $plantillamaster['id_base']; ?>">
        
        <div class="container bg-dark text-white ">
            <div class="col-md-4 m-1">
                <label for="Numero de facturacion" class="form-label">Numero de factura</label>
                <input type="text" class="form-control"  name="numero_facturacion" value="<?= $plantillamaster['numero_factura'] ?>">
            </div>
            
            <div class="col-md-4 m-1">
                <label for="codigo de cliente" class="form-label">Codigo de cliente</label>
                <input type="text" class="form-control"  name="codigo_clientes" value="<?= $plantillamaster['codigo_cliente'] ?>">
            </div>
            
            <div class="col-md-4 m-1">
                <label for="Nombre del cliente" class="form-label">Nombre del cliente</label>
                <input type="text" class="form-control"  name="nombres_cliente" value="<?= $plantillamaster['nombre_cliente'] ?>">
            </div>
            
            <div class="col-md-4 m-1">
                <label for="Codigo del producto" class="form-label">Codigo del producto</label>
                <input type="text" class="form-control"  name="producto" value="<?= $plantillamaster['codigo_producto'] ?>">
            </div>
            
            <div class="col-md-4 m-1">
                <label for="Nombre del producto" class="form-label">Nombre del producto</label>
                <input type="text" class="form-control"  name="nombres_producto" value="<?= $plantillamaster['nombre_producto'] ?>">
            </div>
            
            <div class="col-md-4 m-1">
                <label for="acesibilidad" class="form-label">tipo</label>
                <input type="text" class="form-control" name="tipo" value="<?= $plantillamaster['tipo'] ?>">
            </div>
            
            <div class="col-md-4 m-1">
                <label for="acesibilidad" class="form-label">cantidad</label>
                <input type="text" class="form-control"  name="cantidad" value="<?= $plantillamaster['num_cantidad'] ?>">
            </div>
            
            <div class="col-md-4 m-1">
                <label for="acesibilidad" class="form-label">Bodega</label>
                <input type="text" class="form-control"  name="bodega" value="<?= $plantillamaster['bodega'] ?>">
            </div>
            
            <div class="col-md-4 m-1">
                <label for="acesibilidad" class="form-label">valor sin iva</label>
                <input type="text" class="form-control"  name="vlr_sin_iva" value="<?= $plantillamaster['valor_sin_iva'] ?>">
            </div>
            
            <div class="col-md-4 m-1">
                <label for="acesibilidad" class="form-label">valor con iva</label>
                <input type="text" class="form-control"  name="vlr_con_iva" value="<?= $plantillamaster['valor_con_iva'] ?>">
            </div>
            
            <div class="col-md-4 m-1">
                <label for="acesibilidad" class="form-label">Valor factura</label>
                <input type="text" class="form-control"  name="vlr_factura" value="<?= $plantillamaster['varl_factura'] ?>">
            </div>
            
            <div class="col-md-4 m-1">
                <label for="acesibilidad" class="form-label">Asesor</label>
                <input type="text" class="form-control"  name="asesor" value="<?= $plantillamaster['asesor'] ?>">
            </div>
            
            <div class="col-md-4 m-1">
                <label for="acesibilidad" class="form-label">Ruta</label>
                <input type="text" class="form-control" name="ruta" value="<?= $plantillamaster['ruta'] ?>">
            </div>
            
            <div class="col-md-4 m-1">
                <label for="acesibilidad" class="form-label">Placa</label>
                <input type="text" class="form-control" name="placa" value="<?= $plantillamaster['placa'] ?>">
            </div>
            
            <div class="col-md-4 m-1">
                <label for="acesibilidad" class="form-label">Poblacion</label>
                <input type="text" class="form-control"  name="poblacion" value="<?= $plantillamaster['poblacion'] ?>">
            </div>
            
            <div class="col-md-4 m-1">
                <label for="acesibilidad" class="form-label">Valor cargue</label>
                <input type="text" class="form-control" name="vlr_cargue" value="<?= $plantillamaster['valor_cargue'] ?>">
            </div>
            
            <div class="col-md-4 m-1">
                <label for="acesibilidad" class="form-label">Conductor</label>
                <input type="text" class="form-control"  name="conductor" value="<?= $plantillamaster['conductor'] ?>">
            </div>
            
            <div class="col-md-4 m-1">
                <label for="acesibilidad" class="form-label">Auxiliar</label>
                <input type="text" class="form-control"  name="auxiliar" value="<?= $plantillamaster['auxiliar'] ?>">
            </div>
            
            <div class="col-md-4 m-1">
                <a href="<?= base_url('plantilla'); ?>" class="btn btn-secondary">Regresar</a>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </div>
        
    </from>
        
    <script src="<?php echo base_url() ?>/public/js/bootstrap/bootstrap.js"></script>

</body>

</html>
