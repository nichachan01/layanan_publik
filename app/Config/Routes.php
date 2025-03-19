<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// menampilkan data
$routes->get('/unitkerja', 'UnitKerjaController::index',['as' => 'kerja']);

//tambah data
$routes->get('/tambahunitkerja', 'UnitKerjaController::create',['as' => 'tambahunit']);
$routes->post('/simpanunitkerja', 'UnitKerjaController::store',['as' => 'simpanunit']);

//edit data
$routes->get('/editunitkerja/(:num)', 'UnitKerjaController::edit/$1',['as' => 'editunit']);
$routes->post('/saveunitkerja', 'UnitKerjaController::update',['as' => 'saveunit']);

$routes->get('/deleteunitkerja/(:num)', 'UnitKerjaController::delete/$1',['as' => 'deleteunit']);