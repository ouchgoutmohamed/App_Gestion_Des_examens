<?php

use App\Controllers\CourseController;
use App\Controllers\ProfessorController;
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

// handle logout request
$routes->get('/logout', [UserController::class, 'logout']);

// goup of routes with auth filter
$routes->group('', ['filter' => 'auth'], function ($routes) {

    // professor's routes
    $routes->group('', ['filter' => 'role:' . Roles::PROFESSOR->value], function ($routes) {

        // show professor's dashboard
        $routes->get('/professor_dashboard', [ProfessorController::class, 'index']);

        // gets the courses that are taught by the logged in professor
        $routes->get('/grades_management', [CourseController::class, 'get_courses']);

        // get students list that study this
        $routes->get('/courses/(:num)/students', [StudentCourseController::class, 'getStudentsByCourse']);

        // import grades of students trough an excel file
        $routes->post('/courses/(:num)/import_grades', [StudentCourseController::class, 'import_grades']);

        // update grades of student
        $routes->post('/courses/(:num)/students/(:num)/update', [StudentCourseController::class, 'updateGrade']);

        $routes->view('/reclamations', 'professor/reclamations');

    });

    // studnet's routes
    $routes->group('', ['filter' => 'role:' . Roles::STUDENT->value], function ($routes) {

        $routes->get('/results/(:num)', [StudentCourseController::class, 'get_grades']);

        // show student's dashboard
        $routes->view('/student_dashboard', 'student/student_dashboard');

        $routes->view('/submit_reclamation', 'student/submit_reclamation');
        $routes->view('/my_reclamations', 'student/my_reclamations');
    });

    // handle logout request
    $routes->get('/logout', [UserController::class, 'logout']);

    // show unauthorized page (403 status code)
    $routes->view('/unauthorized', 'unauthorized');

    // show 404 page
    $routes->set404Override(function () {
        return view('errors/404');
    });
});