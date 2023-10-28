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
$routes->get('/pembayaran', 'Modules\pembayaran::index');
