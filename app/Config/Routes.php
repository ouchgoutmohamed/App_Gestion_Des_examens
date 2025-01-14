<?php

use App\Controllers\CourseController;
use CodeIgniter\Router\RouteCollection;

use App\Controllers\UserController;
use App\Controllers\StudentController;
use App\Enums\Roles;


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


// goup of routes with auth filter
$routes->group('', ['filter' => 'auth'], function ($routes) {

    // professor's routes
    $routes->group('', ['filter' => 'role:' . Roles::PROFESSOR->value], function ($routes) {
        // show professor's dashboard
        $routes->view('/professor_dashboard', 'professor/professor_dashboard');


        // gets the courses that are taught by the logged in professor
        $routes->get('/grades_management', [CourseController::class, 'get_courses']);

        $routes->view('/students', 'professor/students');
        $routes->view('/update_grades', 'professor/update_grades');
    });

    // studnet's routes
    $routes->group('', ['filter' => 'role:' . Roles::STUDENT->value], function ($routes) {
        // handle logout request
        $routes->get('/logout', [UserController::class, 'logout']);

        // show student's dashboard
        $routes->view('/student_dashboard', 'student/student_dashboard');

        $routes->view('/results', 'student/results');
    });
});

// gets the courses that are taught by the logged in professor
// $routes->get('/grades_management', [CourseController::class, 'get_courses']);
$routes->view('/grades_management', 'professor/grades_management');

$routes->view('/results', 'student/results');
$routes->view('/students', 'professor/students');

