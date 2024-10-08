<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/marcas','Marcas::index');
$routes->get('/proveedor','Proveedor::index');
$routes->get('/categoria','Categoria::index');
$routes->get('/usuario','Usuario::index');
$routes->get('/usuario/salir','Usuario::salir');

$routes->post('/usuario/acceder','Usuario::acceder');


$routes->get('/marcas/add','Marcas::add');
$routes->get('/proveedor/add','Proveedor::add');

$routes->post('/marcas/insert','Marcas::insert');
$routes->post('/proveedor/insert','Proveedor::insert');

$routes->get('/marcas/edit/(:num)','Marcas::edit/$1');
$routes->post('/marcas/update/','Marcas::update/');


$routes->get('/marcas/delete/(:num)','Marcas::delete/$1');
$routes->get('/categoria/delete/(:num)','Categoria::delete/$1');
