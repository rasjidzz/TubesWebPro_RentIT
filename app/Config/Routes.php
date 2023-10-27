<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/pembatalan', 'Modules\PembatalanPage::index');
$routes->get('/pembayaran/tagihan', 'Modules\PembayaranPage2::index');
