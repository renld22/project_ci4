<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/dosen', 'Dosen::index');
$routes->post('/dosen/tambah', 'Dosen::tambah');
$routes->get('login', 'Login::index', ['as' => 'login']);
$routes->get('register', 'register::index', ['as' => 'register']);
$routes->post('login/process', 'Login::process' );
$routes->post('register/process', 'register::process' );
$routes->get('/transaksi', 'Transaksi::index');
$routes->get('/barang', 'Barang::index');
$routes->post('/barang/tambah', 'Barang::tambah');
$routes->get('/barang/(:num)', 'Barang::detail/$1');

$routes->get('/customer', 'Customer::index');
$routes->post('/customer/tambah', 'Customer::tambah');


$routes->get('transaksi/input', 'TransaksiController::input');
$routes->post('transaksi/save', 'Transaksi::save');

$routes->get('/transaksi_detail', 'TransaksiMaster::detail');
$routes->post('/transaksi_detail/insertData', 'TransaksiMaster::insertDataDetail');
$routes->post('/transaksi_detail/updateData/(:num)', 'TransaksiMaster::updateDataDetail/$1');
$routes->get('/transaksi_detail/deleteData/(:num)', 'TransaksiMaster::deleteDataDetail/$1');

$routes->get('/transaksi_header', 'TransaksiMaster::header');
$routes->post('/transaksi_header/insertData', 'TransaksiMaster::insertDataHeader');
$routes->post('/transaksi_header/updateData/(:num)', 'TransaksiMaster::updateDataHeader/$1');
$routes->get('/transaksi_header/deleteData/(:num)', 'TransaksiMaster::deleteDataHeader/$1');
