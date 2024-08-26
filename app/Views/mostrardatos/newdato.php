<?= $this->extend('layout/datos');?>

<?= $this->section('content');?>


<form action="<?= base_url('plantilla') ?>" class=" row g-3" method="post" autocomplete="off">

<div class="container bg-dark text-white ">
    <div class="row">
<!-- -->
        <div class="col-md-4 m-1">
            <label for="Numero de facturacion" class="form-label">Numero de factura</label>
            <input type="text" class="form-control"  name="numero_facturacion" value="<?= set_value('numero_factura') ?>">
        </div>

        <div class="col-md-4 m-1">
            <label for="codigo de cliente" class="form-label">Codigo de cliente</label>
            <input type="text" class="form-control"  name="codigo_clientes" value="<?= set_value('codigo_cliente') ?>">
        </div>
    
        <div class="col-md-4 m-1">
            <label for="Nombre del cliente" class="form-label">Nombre del cliente</label>
            <input type="text" class="form-control"  name="nombres_cliente" value="<?= set_value('nombres_cliente') ?>">
        </div>

        <div class="col-md-4 m-1">
            <label for="Codigo del producto" class="form-label">Codigo del producto</label>
            <input type="text" class="form-control"  name="producto" value="<?= set_value('codigo_producto') ?>">
        </div>
    

    <div class="col-md-4 m-1">
        <label for="Nombre del producto" class="form-label">Nombre del producto</label>
        <input type="text" class="form-control"  name="nombres_producto" value="<?= set_value('nombre_producto') ?>">
    </div>

    <div class="col-md-4 m-1">
        <label for="acesibilidad" class="form-label">tipo</label>
        <input type="text" class="form-control" name="tipo" value="<?= set_value('tipo') ?>">
    </div>

    <div class="col-md-4 m-1">
        <label for="acesibilidad" class="form-label">cantidad</label>
        <input type="text" class="form-control"  name="cantidad" value="<?= set_value('num_cantidad') ?>">
    </div>

    <div class="col-md-4 m-1">
        <label for="acesibilidad" class="form-label">Bodega</label>
        <input type="text" class="form-control"  name="bodega" value="<?= set_value('bodega') ?>">
    </div>

    <div class="col-md-4 m-1">
        <label for="acesibilidad" class="form-label">valor sin iva</label>
        <input type="text" class="form-control"  name="vlr_sin_iva" value="<?= set_value('valor_sin_iva') ?>">
    </div>

    <div class="col-md-4 m-1">
        <label for="acesibilidad" class="form-label">valor con iva</label>
        <input type="text" class="form-control"  name="vlr_con_iva" value="<?= set_value('valor_con_iva') ?>">
    </div>

    <div class="col-md-4 m-1">
        <label for="acesibilidad" class="form-label">Valor factura</label>
        <input type="text" class="form-control"  name="vlr_factura" value="<?= set_value('varl_factura') ?>">
    </div>

    <div class="col-md-4 m-1">
        <label for="acesibilidad" class="form-label">Asesor</label>
        <input type="text" class="form-control"  name="asesor" value="<?= set_value('asesor') ?>">
    </div>

    <div class="col-md-4 m-1">
        <label for="acesibilidad" class="form-label">Ruta</label>
        <input type="text" class="form-control" name="ruta" value="<?= set_value('ruta') ?>">
    </div>

    <div class="col-md-4 m-1">
        <label for="acesibilidad" class="form-label">Placa</label>
        <input type="text" class="form-control" name="placa" value="<?= set_value('placa') ?>">
    </div>
    
    <div class="col-md-4 m-1">
        <label for="acesibilidad" class="form-label">Poblacion</label>
        <input type="text" class="form-control"  name="poblacion" value="<?= set_value('poblacion') ?>">
    </div>

    <div class="col-md-4 m-1">
        <label for="acesibilidad" class="form-label">Valor cargue</label>
        <input type="text" class="form-control" name="vlr_cargue" value="<?= set_value('valor_cargue') ?>">
    </div>

    <div class="col-md-4 m-1">
        <label for="acesibilidad" class="form-label">Conductor</label>
        <input type="text" class="form-control"  name="conductor" value="<?= set_value('conductor') ?>">
    </div>

    <div class="col-md-4 m-1">
        <label for="acesibilidad" class="form-label">Auxiliar</label>
        <input type="text" class="form-control"  name="auxiliar" value="<?= set_value('auxiliar') ?>">
    </div>

    <div class="col-md-4 m-1">
        <a href="<?= base_url('plantilla'); ?>" class="btn btn-secondary">Regresar</a>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
    </form>
    </div>
</div>

<?php if (session()->getFlashdata('error') !== null) { ?>
    <div class="alert alert-danger">
        <?= session()->getFlashdata('error'); ?>
    </div>
<?php } ?>











<?= $this->endSection();?>