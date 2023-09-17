<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/Studinfo', 'StudinfoController::jecjec');
//$routes->get('/jecjec', 'Home::jecjec');
$routes->post('/save', 'StudinfoController::save');