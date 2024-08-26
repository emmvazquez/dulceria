<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/marcas','Marcas::index');
$routes->get('/marcas/add','Marcas::add');
$routes->post('/marcas/insert','Marcas::insert');

$routes->get('/marcas/edit/(:num)','Marcas::edit/$1');
$routes->post('/marcas/update/','Marcas::update/');


$routes->get('/marcas/delete/(:num)','Marcas::delete/$1');
