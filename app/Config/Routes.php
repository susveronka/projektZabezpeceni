<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Formular::prihlaseni');
$routes->get('login/prihlaseni', 'Formular::prihlaseni');
$routes->post('login/loginFinish', 'Formular::loginFinish');

$routes->group('admin', ['filter' => 'login/prihlaseni'] , static function ($routes){
$routes->get('index', 'Admin::index');

});



