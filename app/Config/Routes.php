<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('password', 'home::passwordNew');
// listar los usuarios
//$routes->get('usuarios', 'Usuarios::index');


// rutas restful
$routes->resource("plantilla", ['placeholder' => '(:num)', 'except' => 'show']);
$routes->resource("prueba", ['placeholder' => '(:num)', 'except' => 'show']);
$routes->resource("usuarios", ['placeholder' => '(:num)', 'except' => 'show']);

