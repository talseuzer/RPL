<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

#Landing Page
$routes->get('/', 'DashboardController::index');
$routes->get('header', 'Home::header');

#Login
$routes->get('/login', 'LoginController::index');
$routes->post('/login/authenticate', 'LoginController::authenticate');
$routes->get('/logout', 'LoginController::logout');

#Register
$routes->get('/register', 'RegisterController::index');
$routes->post('/register/save', 'RegisterController::save');

#Artikel
$routes->get('/dashboard', 'DashboardController::index');
$routes->get('/dashboard/view/(:num)', 'DashboardController::view/$1');
$routes->get('/dashboard/create', 'DashboardController::create');
$routes->post('/dashboard/store', 'DashboardController::store');
$routes->get('/dashboard/edit/(:num)', 'DashboardController::edit/$1');
$routes->post('/dashboard/update/(:num)', 'DashboardController::update/$1');
$routes->get('/dashboard/delete/(:num)', 'DashboardController::delete/$1');

#TanamanKu
$routes->get('/myPlants', 'MyPlantsController::index');
$routes->get('/myPlants/create', 'MyPlantsController::create');
$routes->post('/myPlants/store', 'MyPlantsController::store');
$routes->get('/myPlants/edit/(:num)', 'MyPlantsController::edit/$1');
$routes->post('/myPlants/update/(:num)', 'MyPlantsController::update/$1');
$routes->post('/myPlants/delete/(:num)', 'MyPlantsController::delete/$1');

#Hitung Air
$routes->get('/water', 'WaterController::index');
$routes->post('/water/calculate', 'WaterController::calculate');

#Komentar
$routes->post('comments/add/(:num)', 'DashboardController::addComment/$1');
$routes->get('comments/edit/(:num)', 'DashboardController::editComment/$1');
$routes->post('comments/update/(:num)', 'DashboardController::updateComment/$1');
$routes->post('comments/delete/(:num)', 'DashboardController::deleteComment/$1');

#Alarm
$routes->get('/alarm/trigger', 'AlarmController::trigger');