<?php

namespace App\Controllers;

use App\Models\CourseModel;
use App\Models\UserModel;

class ProfessorController extends UserController
{
    public function index()
    {
        $prof_id = session('user_id');

        $studentsCount = (new UserModel())->get_students_count($prof_id);

        // Fetch the total number of courses taught by the professor using the User Model
        $coursesCount = (new CourseModel())->get_courses_count($prof_id);

        // Load the professor dashboard view and pass the session data
        return view('professor/professor_dashboard', [
            'studentsCount' => $studentsCount,
            'coursesCount' => $coursesCount,
        ]);
    }
}