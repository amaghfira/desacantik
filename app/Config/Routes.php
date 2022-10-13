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
$routes->get('/login', 'Auth::login');

// menu tidak perlu login
$routes->get('/', 'Home::index');
$routes->get('/paser', 'Desa::daftardesa');
$routes->get('/kubar', 'Desa::daftardesa');
$routes->get('/kukar', 'Desa::daftardesa');
$routes->get('/kutim', 'Desa::daftardesa');
$routes->get('/berau', 'Desa::daftardesa');
$routes->get('/ppu', 'Desa::daftardesa');
$routes->get('/balikpapan', 'Desa::daftardesa');
$routes->get('/samarinda', 'Desa::daftardesa');
$routes->get('/bontang', 'Desa::daftardesa');
$routes->get('/paser/sempulang', 'Desa::detaildesa');
$routes->get('/paser/suatangketeban', 'Desa::detaildesa');
$routes->get('/kubar/penawai', 'Desa::detaildesa');
$routes->get('/kubar/jengandanum', 'Desa::detaildesa');
$routes->get('/kukar/jawa', 'Desa::detaildesa');
$routes->get('/kukar/loajananulu', 'Desa::detaildesa');
$routes->get('/kukar/maluhu', 'Desa::detaildesa');
$routes->get('/kukar/sungaipayang', 'Desa::detaildesa');
$routes->get('/kukar/pela', 'Desa::detaildesa');
$routes->get('/kutim/kandolo', 'Desa::detaildesa');
$routes->get('/kutim/sangattautara', 'Desa::detaildesa');
$routes->get('/berau/batu-batu', 'Desa::detaildesa');
$routes->get('/ppu/sidorejo', 'Desa::detaildesa');
$routes->get('/ppu/waru', 'Desa::detaildesa');
$routes->get('/mahulu/batumajang', 'Desa::detaildesa');
$routes->get('/balikpapan/sumberrejo', 'Desa::detaildesa');
$routes->get('/samarinda/makroman', 'Desa::detaildesa');
$routes->get('/samarinda/pelita', 'Desa::detaildesa');
$routes->get('/bontang/gunungtelihan', 'Desa::detaildesa');
$routes->get('/bontang/guntung', 'Desa::detaildesa');

// menu pakai login
$routes->group('', ['filter' => 'authfilter'], function($routes) {
    $routes->get('/upload/excel', 'Upload::index');
    $routes->get('/upload/laporan', 'Upload::laporan');
    $routes->get('/download', 'Download::index');
    $routes->post('/simpan-excel', 'Upload::simpanExcel');
    $routes->post('/simpan-laporan', 'Upload::simpanLaporan');
    $routes->get('/dashboard', 'Backend::index');
});
// $routes->get('/', 'Home::index');
// $routes->get('/unggah-file', 'UploadKabkot::index');
// $routes->post('/import-csv','UploadKabkot::importCsvToDb');


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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
