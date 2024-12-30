<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\User;
use App\Controllers\Student;

/**
 * @var RouteCollection $routes
 */
$routes->addRedirect('/', '/login');

// show login and signup pages
$routes->view('/login', 'login');
$routes->view('/signup', 'register_student');

// handle login and signup requests
$routes->post('/login', [User::class, 'login']);
$routes->post('/signup', [Student::class, 'signup']);

// handle logout request
$routes->get('/logout', [User::class, 'logout']);