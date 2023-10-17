<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Login::login');
$routes->get('/dashboard', 'Dashboard::index');
$routes->get('/buttons', 'Components::buttons');
$routes->get('/cards', 'Components::cards');
$routes->get('/animations', 'Utilities::animation');
$routes->get('/colors', 'Utilities::color');
$routes->get('/borders', 'Utilities::border');
$routes->get('/other', 'Utilities::other');
$routes->get('/forgot-password', 'Pages::forgot_pass');
$routes->get('/register', 'Pages::register');
// $routes->get('/login', 'Pages::login');
$routes->get('/404', 'OtherPages::eror');
$routes->get('/blank', 'OtherPages::blank');
$routes->get('/charts', 'Charts::charts');
$routes->get('/tables', 'Tables::table');
