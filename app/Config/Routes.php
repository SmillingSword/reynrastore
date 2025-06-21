<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'HomeController::index');
$routes->get('produk/detail/(:segment)', 'HomeController::detail/$1');


$routes->post('login', 'AuthController::doLogin');
$routes->post('register', 'AuthController::register');
$routes->get('logout', 'AuthController::logout');

$routes->get('/digiflazz/products', 'DigiflazzController::getPriceList');
$routes->get('/digiflazz/getproducts', 'DigiflazzController::getGames');

$routes->post('transaksi/submit', 'TransaksiController::submit');
$routes->get('transaksi/check/(:segment)', 'TransaksiController::checkQRIS/$1');

$routes->post('transaksi/order', 'TransaksiController::order');

// app/Config/Routes.php
$routes->group('admin', ['filter' => 'admin'], function($routes) {
    $routes->get('/', 'Admin\DashboardController::index');

    $routes->get('promo', 'Admin\PromoController::index');
    $routes->get('promo/tambah', 'Admin\PromoController::create');
    $routes->post('promo/tambah', 'Admin\PromoController::store');
    $routes->get('promo/hapus/(:num)', 'Admin\PromoController::delete/$1');

    $routes->get('flash-sale', 'Admin\FlashSaleController::index');
    $routes->post('flash-sale/store', 'Admin\FlashSaleController::store');
    $routes->get('flash-sale/delete/(:num)', 'Admin\FlashSaleController::delete/$1');

    $routes->get('trending', 'Admin\TrendingController::index');
    $routes->post('trending/create', 'Admin\TrendingController::store');
    $routes->get('trending/delete/(:num)', 'Admin\TrendingController::delete/$1');

    $routes->get('produk', 'Admin\ProductController::index');
    $routes->post('produk/create', 'Admin\ProductController::create');
    $routes->get('produk/get-digiflazz', 'Admin\ProductController::getFromDigiflazz');
    $routes->post('produk/delete/(:num)', 'Admin\ProductController::delete/$1');
    $routes->post('produk/upload-gambar', 'Admin\ProductController::uploadGambar');
    $routes->post('produk/update-gambar', 'Admin\ProductController::updateGambar');
});

$routes->post('payment/saldo', 'PaymentController::bayarSaldo');
$routes->post('payment/bayarQris', 'PaymentController::bayarQris');



