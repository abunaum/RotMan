<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Auth/Login');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Auth/Login::index');
$routes->get('/login', 'Auth/Login::index');
$routes->post('/cek', 'Auth/Login::cek');
$routes->get('/logout', 'Auth/Logout::index');
$routes->group('admin', ['filter' => 'auth'], function ($routes) {
	$routes->get('/', 'Admin::index', ['filter' => 'authadmin']);
	$routes->post('tambah-router', 'Admin::addrouter', ['filter' => 'authadmin']);
	$routes->delete('router/(:num)', 'Admin::hapusrouter/$1', ['filter' => 'authadmin']);
	$routes->get('router-detail/(:num)', 'Admin::detailrouter/$1', ['filter' => 'authadmin']);
	$routes->post('connect/(:num)', 'Admin::connectrouter/$1', ['filter' => 'authadmin']);
});
$routes->group('router', ['filter' => 'authrouter'], function ($routes) {
	$routes->get('/', 'Router/Beranda::index');
});

/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
