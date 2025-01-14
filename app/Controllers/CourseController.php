<?php

namespace App\Controllers;

use App\Models\CourseModel;

class CourseController extends BaseController
{
    public function get_courses()
    {
        $professor_id = session("user_id");
        $courses = (new CourseModel())->get_courses($professor_id);
        return view("professor/grades_management", [
            "courses" => $courses
        ]);
    }
}