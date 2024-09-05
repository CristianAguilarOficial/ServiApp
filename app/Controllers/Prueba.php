<?php

namespace App\Controllers;

use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;
use App\Models\MasterModel;
use Dompdf\Dompdf;
use Dompdf\Options;

class Prueba extends ResourceController
{
    protected $helpers = ['form'];
    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */
    public function index()
    {
        $masterModel = new MasterModel();
        $dato['master'] = $masterModel->findAll();
        return view('vistap1', $dato);
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
        return view('vistacrear');
    }

    /**
     * Create a new resource object, from "posted" parameters.
     *
     * @return ResponseInterface
     */
    public function create()
    {

        /*$reglas = [
            'cedula' => 'required|max_length[15]',
            'nombre' => 'required|max_length[15]',
            'apellido' =>'required|max_length[15]',

        ];

        if (!$this->validate($reglas)) {
            return redirect()->back()->withInput()->with('error', $this->validator->listErrors());
        }*/
        $post = $this->request->getpost(['indetificacion', 'perro1', 'perro2']);

        $masterModel = new MasterModel();
        $masterModel->insert([
            'cedula' => trim($post['indetificacion']),
            'nombre' => trim($post['perro1']),
            'apellido' => trim($post['perro2']),

        ]);
        return redirect()->to('prueba');
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
            return redirect()->route('prueba');
        }

        $masterModel = new MasterModel();
        $data['master'] =  $masterModel->find($id_base);
        return view('editprueba', $data);
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
            return redirect()->route('prueba');
        }
        // Validación de datos
        /*$reglas = [
            'nombre' => 'required|max_length[15]',
            'correo' => 'required|valid_email',


        ];
        if (!$this->validate($reglas)) {
            return redirect()->back()->withInput()->with('error', $this->validator->listErrors());
        }*/

        // Obtener datos del formulario
        $post = $this->request->getPost(['identificacion', 'nombre', 'apellido']);


        $masterModel = new MasterModel();
        $masterModel->update($id_base, [
            'cedula' => trim($post['identificacion']),
            'nombre' => trim($post['perro1']),
            'apellido' => trim($post['perro2']),

        ]);

        return redirect()->to('prueba');
    }

    /**
     * Delete the designated resource object from the model.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function delete($id = null)
    {
        //
    }
}
