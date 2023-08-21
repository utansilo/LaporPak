<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('signup', 'Signup::index');
$routes->post('signup', 'Signup::signup');
$routes->post('auth', 'Home::authentication');
$routes->get('logout', 'Home::logout');
$routes->get('dashboard', 'Dashboard::index');
$routes->get('admin', 'Dashboard::admin');
$routes->get('form', 'Dashboard::forms');
$routes->post('form', 'LaporanController::store');
$routes->get('laporan/edit/(:num)', 'LaporanController::edit/$1');
$routes->post('laporan/admin/(:num)', 'LaporanController::storeAdmin/$1');
$routes->post('laporan/update/(:num)', 'LaporanController::update/$1');
$routes->get('laporan/delete/(:num)', 'LaporanController::delete/$1');
$routes->get('report', 'Dashboard::report');
$routes->get('info', 'Dashboard::info');
$routes->get('peminjaman', 'Dashboard::peminjaman');
$routes->get('pengembalian', 'Dashboard::pengembalian');
$routes->post('dashboard/check_menu', 'Dashboard::check_menu');


/*
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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
