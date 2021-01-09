<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Pages');
$routes->setDefaultMethod('Home');
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
$routes->get('/Home', 'Pages::home');
$routes->get('/', 'Pages::home');
$routes->get('/theatre' ,'Pages::theatre');
$routes->get('/movie','pages::movie');
// $routes->get('/pages/movie','pages::movie');
$routes->get('/movie1','pages::movie1');
$routes->get('/movie2','pages::movie2');
$routes->get('/about','pages::about');
$routes->get('/book','pages::book');
// $routes->get('/register','pages::register');
$routes->get('/user','pages::user');
$routes->get('/adminfilm','pages::adminfilm');
$routes->get('/addfilm','pages::addfilm');
$routes->get('/cinemaadmin','pages::cinemaadmin');
$routes->get('/editfilm','pages::editfilm');
$routes->get('/cinemaedit','pages::cinemaedit');
$routes->get('/tiket','pages::tiket');
$routes->get('/admintransaksi','pages::admintransaksi');
$routes->get('/terimakasih','pages::terimakasih');

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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
