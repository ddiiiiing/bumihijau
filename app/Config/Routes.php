<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

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
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// File: app/Config/Routes.php

// File: app/Config/Routes.php

$routes->get('/', 'Home::index');
$routes->get('register', 'Auth::register');
$routes->post('auth/storeRegister', 'Auth::storeRegister');
$routes->get('login', 'Auth::login');
$routes->post('auth/doLogin', 'Auth::doLogin');
$routes->get('logout', 'Auth::logout');

$routes->get('trees', 'Tree::index');
$routes->get('trees/create', 'Tree::create');
$routes->post('trees/store', 'Tree::store');
$routes->get('trees/edit/(:num)', 'Tree::edit/$1');
$routes->post('trees/update/(:num)', 'Tree::update/$1');
$routes->get('trees/delete/(:num)', 'Tree::delete/$1');

$routes->get('locations', 'Location::index');
$routes->get('locations/create', 'Location::create');
$routes->post('locations/store', 'Location::store');
$routes->get('locations/edit/(:num)', 'Location::edit/$1');
$routes->post('locations/update/(:num)', 'Location::update/$1');
$routes->get('locations/delete/(:num)', 'Location::delete/$1');

$routes->get('donations/create', 'Donation::create');
$routes->post('donation/calculateTotal', 'Donation::calculateTotal');
$routes->post('donation/store', 'Donation::store');
$routes->get('donations/success', 'Donation::success');

$routes->get('info/trees', 'Info::trees');
$routes->get('info/locations', 'Info::locations');

$routes->get('/admin/dashboard', 'Admin::dashboard', ['filter' => 'auth:admin']);
$routes->get('/admin/addTree', 'Admin::addTree', ['filter' => 'auth:admin']);
$routes->post('/admin/storeTree', 'Admin::storeTree', ['filter' => 'auth:admin']);
$routes->get('admin/edit_tree/(:num)', 'Admin::editTree/$1', ['filter' => 'auth:admin']);
$routes->post('admin/update_tree/(:num)', 'Admin::updateTree/$1', ['filter' => 'auth:admin']);
$routes->get('admin/delete_tree/(:num)', 'Admin::deleteTree/$1', ['filter' => 'auth:admin']);
$routes->get('admin/locations', 'Admin::locations', ['filter' => 'auth:admin']);
$routes->get('/admin/addLocation', 'Admin::addLocation', ['filter' => 'auth:admin']);
$routes->post('/admin/storeLocation', 'Admin::storeLocation', ['filter' => 'auth:admin']);
$routes->post('admin/update_location/(:num)', 'Admin::updateLocation/$1', ['filter' => 'auth:admin']);
$routes->get('admin/delete_location/(:num)', 'Admin::deleteLocation/$1', ['filter' => 'auth:admin']);
$routes->get('/admin/donations', 'Admin::donations', ['filter' => 'auth:admin']);

$routes->get('/unauthorized', function () {
    return view('unauthorized');
});

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need to go about it using closures. You can do so here.
 *
 * require additional route files for better organization.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
