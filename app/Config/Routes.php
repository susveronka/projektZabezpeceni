<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Formular::prihlaseni');
$routes->post('/', 'Formular::prihlaseni');

