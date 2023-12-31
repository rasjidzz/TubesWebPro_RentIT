<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
$routes->get('/', 'Modules\LandingPage::index');
$routes->get('/homepage', 'Modules\HomePage::index');
$routes->get('/login', 'Auth\Login::index');
$routes->get('/signup', 'Auth\Signup::index');
$routes->get('/facility', 'Modules\Facility::index');
$routes->get('/pembayaran', 'Modules\pembayaran::index');
$routes->get('/pembayaran2', 'Modules\pembayaran2::index');
$routes->get('/rentpage', 'Modules\RentPage::index');
$routes->get('/laporankerusakan', 'Modules\LaporanKerusakan::index');
$routes->get('/laporankerusakan2', 'Modules\LaporanKerusakan2::index');
$routes->get('/pembatalan', 'Modules\PembatalanPage::index');
$routes->get('/pembatalan2', 'Modules\PembatalanPage::toPembatalan2');
$routes->get('/pembayaran/tagihan', 'Modules\PembayaranPage2::index');
$routes->get('/status', 'Modules\StatusPage::index');

$routes->get('/adminpage', 'Admin\AdminPage::index');
$routes->get('/approved', 'Admin\ApprovedPage::index');
$routes->get('/submission', 'Admin\SubmissionPage::index');
$routes->get('/report', 'Admin\ReportPage::index');
$routes->get('/cancellation', 'Admin\CancellationPage::index');
$routes->get('/declined', 'Admin\Declined_Page::index');
$routes->get('/test', 'Auth\Login::testData');
