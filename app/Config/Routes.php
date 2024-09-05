<?php

use App\Controllers\PdfController;
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

$routes->get('finalizadas', 'PdfController::index'); // Vista de finalizadas del usario
// pdf
$routes->get('finalizadas/new', 'PdfController::new');
$routes->get('generar/pdf', 'PdfController::generarPdf');

//vista de la facturas admin
$routes->get('administrador/lista', 'PdfController::adminfact');
