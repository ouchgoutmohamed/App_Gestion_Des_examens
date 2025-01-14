<?php

use CodeIgniter\Router\RouteCollection;

use App\Controllers\UserController;
use App\Controllers\StudentController;


/**
 * @var RouteCollection $routes
 */
$routes->addRedirect('/', '/login');

// show login and signup pages
$routes->view('/login', 'login');
$routes->view('/signup', 'register_student');

// handle login and signup requests
$routes->post('/login', [UserController::class, 'login']);
$routes->post('/signup', [StudentController::class, 'signup']);

// handle logout request
$routes->get('/logout', [UserController::class, 'logout']);

$routes->view('/student_dashboard', 'student/student_dashboard');
$routes->view('/results', 'student/results');
$routes->view('/professor_dashboard', 'professor/professor_dashboard');
$routes->view('/import_grades', 'professor/import_grades');
$routes->view('/students', 'professor/students');
$routes->view('/update_grades', 'professor/update_grades');