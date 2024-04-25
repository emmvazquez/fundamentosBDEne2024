<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/analisis', 'AnalisisController::index');
$routes->get('/analisis/byprecio', 'AnalisisController::byPrecio');

$routes->get('/productos/show', 'ProductoController::show');
$routes->get('/marcas/show', 'MarcaController::show');
