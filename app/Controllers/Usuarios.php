<?php

namespace App\Controllers;

use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;
use App\Models\UsuariosModel;

class Usuarios extends ResourceController

{

    protected $helpers = ['form'];
    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */
    public function index()
    {
        $usuariosModel = new UsuariosModel();
        $datos['usuarios'] =  $usuariosModel->findAll();
        return view('usuarios/listar',$datos);
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
    }

    /**
     * Return a new resource object, with default properties.
     *
     * @return ResponseInterface
     */
    public function new()
    {
        
        return view('usuarios/nuevo');
    }

    /**
     * Create a new resource object, from "posted" parameters.
     *
     * @return ResponseInterface
     */
    public function create()
    {
        $reglas = [
            'nombre' => 'required|max_length[15]',
            'correo' => 'required|valid_email',

        ];

        if (!$this->validate($reglas)) {
            return redirect()->back()->withInput()->with('error', $this->validator->listErrors());
        }

        $post = $this->request->getpost(['nombre', 'correo']);

        $usuariosModel = new UsuariosModel();
        $usuariosModel->insert([
            'nombre' => trim($post['nombre']),
            'correo' => trim($post['correo']),
            
        ]);
        return redirect()->to('usuarios');
    }

    /**
     * Return the editable properties of a resource object.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function edit($id_usuario = null)
    {
        if ($id_usuario == null) {
            return redirect()->route('usuarios');
        }

        $usuariosModel = new UsuariosModel();
        $data['usuario'] =  $usuariosModel->find($id_usuario);
        return view('usuarios/editar', $data);

    }

    /**
     * Add or update a model resource, from "posted" properties.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function update($id_usuario = null)
    {
        if ($this->request->getMethod() !== 'PUT' || $id_usuario === null) {
            return redirect()->route('usuarios');
        }

        // Validación de datos
        $reglas = [
            'nombre' => 'required|max_length[15]',
            'correo' => 'required|valid_email',


        ];

        if (!$this->validate($reglas)) {
            return redirect()->back()->withInput()->with('error', $this->validator->listErrors());
        }

        // Obtener datos del formulario
        $post = $this->request->getPost(['nombre', 'correo']);

        // Depuración
        log_message('debug', 'Post data: ' . print_r($post, true));

        $usuariosModel = new UsuariosModel();
        $usuariosModel->update($id_usuario, [
            'nombre' => trim($post['nombre']),
            'correo' => trim($post['correo']),

        ]);

        return redirect()->to('usuarios');

    }

    /**
     * Delete the designated resource object from the model.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function delete($id_usuario = null)
    {
    
        if ($id_usuario == null) {
            return redirect()->to('usuarios');
        }

        $usuariosModel = new UsuariosModel();
        $usuariosModel->delete($id_usuario);

        return redirect()->to('usuarios')->with('message', 'Usuario eliminado exitosamente');

    }
}
