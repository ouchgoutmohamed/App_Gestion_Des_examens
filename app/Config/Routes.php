<?php

use App\Controllers\CourseController;
use App\Controllers\StudentCourseController;
use CodeIgniter\Router\RouteCollection;

use App\Controllers\UserController;
use App\Controllers\StudentController;
use App\Enums\Roles;

/**
 * @var RouteCollection $routes
 */
$routes->addRedirect('/', '/login');

// show login and signup pages
$routes->view('/login', 'login', ['filter' => 'guest']);
$routes->view('/signup', 'register_student', ['filter' => 'guest']);

// handle login and signup requests
$routes->post('/login', [UserController::class, 'login'], ['filter' => 'guest']);
$routes->post('/signup', [StudentController::class, 'signup'], ['filter' => 'guest']);

// goup of routes with auth filter
$routes->group('', ['filter' => 'auth'], function ($routes) {

    // professor's routes
    $routes->group('', ['filter' => 'role:' . Roles::PROFESSOR->value], function ($routes) {
        // show professor's dashboard
        $routes->view('/professor_dashboard', 'professor/professor_dashboard');

        // gets the courses that are taught by the logged in professor
        $routes->get('/grades_management', [CourseController::class, 'get_courses']);

        // get students list that study this
        $routes->get('/courses/(:num)/students', [StudentCourseController::class,'getStudentsByCourse']);

        $routes->view('/update_grades', 'professor/update_grades');
    });

    // studnet's routes
    $routes->group('', ['filter' => 'role:' . Roles::STUDENT->value], function ($routes) {

        // show student's dashboard
        $routes->view('/student_dashboard', 'student/student_dashboard');

        $routes->view('/results', 'student/results');
    });

    // handle logout request
    $routes->get('/logout', [UserController::class, 'logout']);

    // show unauthorized page (403 status code)
    $routes->view('/unauthorized', 'unauthorized');
});