<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\User;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// show login and signup pages
$routes->get('/login', [User::class, 'showLoginForm']);
$routes->get('/signup', [User::class, 'showSignupForm']);

// handle login and signup requests
$routes->post('/login', [User::class, 'login']);
$routes->post('/signup', [User::class, 'signup']);