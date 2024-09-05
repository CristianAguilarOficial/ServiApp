<?php

namespace App\Models;

use CodeIgniter\Model;

class UserplantillaModelo extends Model
{
    protected $table            = 'plantillauser';
    protected $primaryKey       = 'id_plantila';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'zona',
        'conductor',
        'auxiliar',
        'vehiculo',
        'poblacion',
        'Denominacion',
        'cantidad_efectivo',
        'valor_efectivo',
        'sub_efectivo',
        'banco',
        'cantidad_banco',
        'sub_consignaciones',
        'factura_creditos',
        'cliente_credito',
        'valor_credito',
        'sub_credito',
        'devolucion_factura',
        'cliente_devolucion_factura',
        'valor_devolucion_factura',
        'motivo',
        'sub_devolucion_factura',
        'factura_devolucion_producto',
        'productos',
        'valor_producto',
        'sub_producto',
        'gasto_motivo',
        'cantidad_motivo',
        'sub_gastos',
        'total_carga',
        'total',
        'observaciones'
    ];

    public function obtenerPorId($id)
    {
        return $this->where('id_plantilla', $id)->first();
    }


    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];
}
