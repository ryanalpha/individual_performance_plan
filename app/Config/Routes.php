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
$routes->get('/astra', 'Astra::index');
$routes->get('/astra/create', 'Astra::create');
$routes->get('astra/delete/(:num)', 'Astra::delete/$1');
$routes->post('/astra/store', 'Astra::store');
$routes->get('/astra/coach', 'Astra::coach');
$routes->get('/astra/strength_weakness', 'Astra::strength_weakness');
$routes->get('/astra/summary', 'Astra::summary');
$routes->get('/astra/mid_year_result', 'Astra::mid_year_result');
$routes->get('/astra/one_year_result', 'Astra::one_year_result');
$routes->get('/astra', 'PdfController::index');  
$routes->get('/pdf/generate', 'PdfController::generate');
$routes->get('/astra/one_result', 'Astra::one_result');
$routes->get('/astra/login_view', 'Astra::login_view');




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
