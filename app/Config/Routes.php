<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\User;

/**
 * @var RouteCollection $routes
 */
$routes->addRedirect('/', '/login');

// show login and signup pages
$routes->view('/login', 'login');
$routes->view('/signup', 'register_student');

// handle login and signup requests
$routes->post('/login', [User::class, 'login']);
$routes->post('/signup', [User::class, 'signup']);

// handle logout request
$routes->get('/logout', [User::class, 'logout']);