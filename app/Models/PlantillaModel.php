<?php

namespace App\Models;

use CodeIgniter\Model;

class PlantillaModel extends Model
{
    protected $table            = 'plantillamaster';
    protected $primaryKey       = 'id_base';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['numero_factura', 'codigo_cliente', 'nombre_cliente', 'codigo_producto', 'nombre_producto', 'tipo', 'num_cantidad', 'bodega', 'valor_sin_iva', 'valor_con_iva', 'varl_factura', 'asesor', 'ruta', 'placa', 'poblacion', 'valor_cargue', 'conductor', 'auxiliar'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

}
