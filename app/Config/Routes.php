<?php

use App\Controllers\CourseController;
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

// show student's dashboard
$routes->view('/student_dashboard', 'student/student_dashboard');

// show professor's dashboard
$routes->view('/professor_dashboard', 'professor/professor_dashboard');

// gets the courses that are taught by the logged in professor
$routes->get('/grades_management', [CourseController::class, 'get_courses']);

$routes->view('/results', 'student/results');
$routes->view('/students', 'professor/students');
$routes->view('/update_grades', 'professor/update_grades');