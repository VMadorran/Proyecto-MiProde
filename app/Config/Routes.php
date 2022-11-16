<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
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
$routes->get('/tablaEquipo', 'EquipoController::index');
$routes->get('/equipo/delete/(:num)','EquipoController::deleteEquipo/$1');
$routes->get('/get-equipo/(:num)','EquipoController::getEquipo/$1');
$routes->post( 'submit-equipo', 'EquipoController::createEquipo');


/*
 *  USUARIOS
 */
$routes->get('tablaUsuario', 'UsuarioController::index');
$routes->get('/usuario/delete/(:num)','UsuarioController::deleteUsuario/$1');
$routes->get('/get-usuario/(:num)','UsuarioController::getUsuario/$1');
$routes->post( 'submit-usuario', 'UsuarioController::createUsuario');

/*
 *   LOGIN
 */
$routes->get('/login', 'LoginController::index');
$routes->post('login-user','LoginController::login');
$routes->get('/log-out', 'LoginController::logout');

/*
 * FASE
 */
$routes->get('createFase', 'FaseController::index');

/*
 *  SIGNUP
 */

$routes->get('/signup', 'SignUpController::index');
$routes->post('/new-user','SignupController::signUp');


/*
 *   PARTIDO
 */
$routes->get('/list-partido', 'PartidoController::index');
$routes->post('submit-partido','PartidoController::createPartido');
$routes->post( '/list-partido', 'PartidoController::findAllVisitantes');

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
