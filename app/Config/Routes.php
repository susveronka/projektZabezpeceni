<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Formular::prihlaseni');
$routes->get('formular/prihlaseni', 'Formular::prihlaseni');
$routes->post('formular/prihlaseniPost', 'Formular::prihlaseniPost');
$routes->get('formular/index', 'Admin::index');

