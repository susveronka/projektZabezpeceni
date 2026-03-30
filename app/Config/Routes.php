<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Formular::prihlaseni');
$routes->get('login/prihlaseni', 'Formular::prihlaseni');
$routes->post('login/prihlaseniPost', 'Formular::prihlaseniPost');

$routes->group('admin', ['filter' => 'login'] , static function ($routes){
$routes->get('index', 'Admin::index');

});



