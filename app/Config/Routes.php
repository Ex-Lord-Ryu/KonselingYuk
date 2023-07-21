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

$routes->get('/', 'HomeController::index');

$routes->get('/counseling', 'CounselingController::index');
$routes->get('/history', 'CounselingController::history');

$routes->get('counselors', 'CounselorController::index');
$routes->get('counselors/detail/(:num)', 'CounselorController::detail/$1');

$routes->get('/dashboard', 'DashboardController::index');
$routes->get('/dashboard/crudartikel', 'DashboardController::crudartikel');
$routes->get('/dashboard/crudkonselor', 'DashboardController::crudkonselor');

$routes->get('artikel', 'ArtikelController::index');
$routes->get('artikel/create', 'ArtikelController::create');
$routes->post('artikel/store', 'ArtikelController::store');
$routes->get('artikel/edit/(:num)', 'ArtikelController::edit/$1');
$routes->post('artikel/update/(:num)', 'ArtikelController::update/$1');
$routes->get('artikel/delete/(:num)', 'ArtikelController::delete/$1');
$routes->get('gambar/(:segment)', 'ArtikelController::showImage/$1');
$routes->get('/artikel/show/(:num)', 'ArtikelController::show/$1');

$routes->get('counselors', 'CounselorController::index');
$routes->get('counselors/create', 'CounselorController::create');
$routes->post('counselors/store', 'CounselorController::store');
$routes->get('counselors/edit/(:num)', 'CounselorController::edit/$1');
$routes->post('counselors/update/(:num)', 'CounselorController::update/$1');
$routes->get('counselors/delete/(:num)', 'CounselorController::delete/$1');
$routes->get('image/(:segment)', 'CounselorController::showImage/$1');
$routes->get('/counselors/show/(:num)', 'CounselorController::show/$1');

$routes->get('/login', 'LoginController::index');
$routes->get('/register', 'RegisterController::index');
$routes->get('/logout', 'LoginController::do_logout');

$routes->post('/login', 'LoginController::do_login');
$routes->post('/register', 'RegisterController::do_register');

$routes->match(['get', 'post'], 'login', 'UserController::login', ["filter" => "noauth"]);
// Admin routes
$routes->group("admin", ["filter" => "auth"], function ($routes) {
    $routes->get("admin/dashboard", "AdminController::index");
});
// Mahasiswa routes
$routes->group("mahasiswa", ["filter" => "auth"], function ($routes) {
    $routes->get("/", "MahasiswaController::index");
});

$routes->match(['get', 'post'], '/counseling', 'SendEmail::index');
$routes->post('/send-email', 'SendEmail::index');


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
// $routes->get('/', 'Home::index');

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


