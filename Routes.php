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
//untuk view
$routes->get('/', 'Home::index');
$routes->get('/jimmy', 'Berita::index');
$routes->get('/daerah', 'Daerah::index');
$routes->get('/pengguna', 'Pengguna::index');
$routes->get('/kategori', 'Kategori::index');
$routes->get('/view_register', 'Register::index');
$routes->get('/dosen', 'Dosen::index');
$routes->get('/anggota', 'Anggota::index');
$routes->get('/mahasiswa', 'Mahasiswa::index');
//edit
$routes->post('/jimmy/edit', 'Berita::edit/$1');
$routes->post('/dosen/edit', 'Dosen::edit/$1');
$routes->post('/anggota/edit', 'Anggota::edit/$1');
$routes->post('/mahasiswa/edit', 'Mahasiswa::edit/$1');
//update
$routes->get('/dosen/update/(:num)', 'Dosen::update/$1');
$routes->get('/anggota/update/(:num)', 'Anggota::update/$1');
$routes->get('/mahasiswa/update/(:num)', 'Mahasiswa::update/$1');
//insert
$routes->post('/dosen/insert', 'Dosen::insert');
$routes->post('/anggota/insert', 'Anggota::insert');
$routes->post('/mahasiswa/insert', 'Mahasiswa::insert');
//isert V
$routes->add('/dosen/input', 'Dosen::input');
$routes->add('/anggota/input', 'Anggota::input');
$routes->add('/mahasiswa/input', 'Mahasiswa::input');
//delete
$routes->add('/dosen/delete/(:num)', 'Dosen::delete/$1');
$routes->add('/anggota/delete/(:num)', 'Anggota::delete/$1');
$routes->add('/mahasiswa/delete/(:num)', 'Mahasiswa::delete/$1');
//register & login not ready
$routes->post('/register/process', 'Register::process');
$routes->get('/view_login', 'Login::index',['as' => 'login']);
$routes->post('/login/process', 'Login::process');
$routes->get('/logout', 'Login::logout');




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
