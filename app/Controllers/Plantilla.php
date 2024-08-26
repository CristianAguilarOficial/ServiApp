<?php

namespace App\Controllers;

use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;
use App\Models\PlantillaModel;


class Plantilla extends ResourceController
{
    protected $helpers = ['form'];
    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */
    public function index()
    {
        //master es el nombre de la tabla
        $plantillaModel = new PlantillaModel();
        $datos['plantillamaster'] = $plantillaModel->findAll();
        return view ('mostrardatos/vist' ,$datos);

    }

    /**
     * Return the properties of a resource object.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties.
     *
     * @return ResponseInterface
     */
    public function new()
    {
        return view('mostrardatos/newdato');
    }

    /**
     * Create a new resource object, from "posted" parameters.
     *
     * @return ResponseInterface
     */
    public function create()
    {
        /** 
        *$reglas=[
        *'numero_factura'=>'',
        *'codigo_cliente'=>'',
        *'nombre_cliente'=>'',
        *'codigo_producto'=>'',
        *'nombre_producto'=>'',
        *'tipo, num_cantidad'=>'',
        *'bodega', 'valor_sin_iva'=>'',
        *'valor_con_iva'=>'',
        *'varl_factura'=>'',
        *'asesor'=>'',
        *'ruta'=>'',
        *'placa'=>'',
        *'poblacion'=>'',
        *'valor_cargue'=>'',
        *'conductor'=>'',
        *'auxiliar'=>'', 
    *];
    *if (!$this->validate($reglas)) {
     *   return redirect()->back()->withInput()->with('error', $this->validator->listErrors());
    *}
        */

        $post = $this->request->getpost(['numero_facturacion', 'codigo_clientes', 'nombres_cliente', 'producto', 'nombres_producto', 'tipo', 'cantidad', 'bodega', 'vlr_sin_iva', 'vlr_con_iva', 'vlr_factura', 'asesor', 'ruta', 'placa', 'poblacion', 'vlr_cargue', 'conductor', 'auxiliar']);

        $plantillaModel = new PlantillaModel();
        $plantillaModel->insert([
            'numero_factura' => trim($post['numero_facturacion']),
            'codigo_cliente' => trim($post['codigo_clientes']),
            'nombre_cliente' => trim($post['nombres_cliente']),
            'codigo_producto' => trim($post['producto']),
            'nombre_producto' => trim($post['nombres_producto']),
            'tipo' => trim($post['tipo']),
            'num_cantidad' => trim ($post['cantidad']), 
            'bodega' => trim ($post['bodega']),
            'valor_sin_iva' => trim ($post['vlr_sin_iva']), 
            'valor_con_iva' => trim ($post['vlr_con_iva']), 
            'varl_factura' => trim ($post['vlr_factura']), 
            'asesor' => trim ($post['asesor']),
            'ruta' => trim ($post['ruta']),
            'placa' => trim ($post['placa']), 
            'poblacion' => trim ($post['poblacion']),
            'valor_cargue' => trim ($post['vlr_cargue']),
            'conductor' => trim ($post['conductor']), 
            'auxiliar' => trim ($post['auxiliar']),

        ]);
        return redirect()->to('plantilla');
    }
    

    /**
     * Return the editable properties of a resource object.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function edit($id_base = null)
    {
        if ($id_base == null) {
            return redirect()->route('plantilla');
        }
        
        $plantillaModel = new PlantillaModel();
        $datos['plantillamaster'] = $plantillaModel->find($id_base); // Corrección aquí
        return view('mostrardatos/editdato', $datos);

    }

    /**
     * Add or update a model resource, from "posted" properties.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function update($id_base = null)
    {
        if ($this->request->getMethod() !== 'PUT' || $id_base === null) {
            return redirect()->route('plantilla');
        }

        $post = $this->request->getPost([
            'numero_facturacion', 'codigo_clientes', 'nombres_cliente', 
            'producto', 'nombres_producto', 'tipo', 'cantidad', 'bodega', 
            'vlr_sin_iva', 'vlr_con_iva', 'vlr_factura', 'asesor', 'ruta', 
            'placa', 'poblacion', 'vlr_cargue', 'conductor', 'auxiliar'
        ]);
        
    $plantillaModel = new PlantillaModel();
    $plantillaModel->update($id_base, [
    'numero_factura' => trim($post['numero_facturacion']),
    'codigo_cliente' => trim($post['codigo_clientes']),
    'nombre_cliente' => trim($post['nombres_cliente']),
    'codigo_producto' => trim($post['producto']),
    'nombre_producto' => trim($post['nombres_producto']),
    'tipo' => trim($post['tipo']),
    'num_cantidad' => trim($post['cantidad']),
    'bodega' => trim($post['bodega']),
    'valor_sin_iva' => trim($post['vlr_sin_iva']),
    'valor_con_iva' => trim($post['vlr_con_iva']),
    'varl_factura' => trim($post['vlr_factura']),
    'asesor' => trim($post['asesor']),
    'ruta' => trim($post['ruta']),
    'placa' => trim($post['placa']),
    'poblacion' => trim($post['poblacion']),
    'valor_cargue' => trim($post['vlr_cargue']),
    'conductor' => trim($post['conductor']),
    'auxiliar' => trim($post['auxiliar']),
]);

return redirect()->to('plantilla');

    }

    /**
     * Delete the designated resource object from the model.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function delete($id_base = null)
    {
    
        if ($id_base == null) {
            return redirect()->to('plantilla');
        }

        $plantillaModel = new PlantillaModel();
        $plantillaModel->delete($id_base);

        return redirect()->to('plantilla')->with('message', 'Usuario eliminado exitosamente');

    }
}
