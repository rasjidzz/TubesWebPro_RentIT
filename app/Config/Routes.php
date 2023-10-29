<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
$routes->get('/', 'Modules\LandingPage::index');
$routes->get('/homepage', 'Modules\HomePage::index');
$routes->get('/login', 'Auth\Login::index');
$routes->get('/facility', 'Modules\Facility::index');
$routes->get('/laporankerusakan', 'Modules\LaporanKerusakan::index');
$routes->get('/laporankerusakan2', 'Modules\LaporanKerusakan2::index');
$routes->get('/pembatalan', 'Modules\PembatalanPage::index');
$routes->get('/pembatalan2', 'Modules\Pembatalan2Page::index');

