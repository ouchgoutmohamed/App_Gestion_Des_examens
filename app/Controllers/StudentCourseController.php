<?php

namespace App\Controllers;

use App\Models\StudentCourseModel;

class StudentCourseController extends BaseController {

    // Méthode pour afficher les étudiants inscrits à un cours spécifique
    public function getStudentsByCourse($course_id) {

        // Récupérer les étudiants inscrits à ce cours
        $students = (new StudentCourseModel())->getStudentsByCourse($course_id);
        dd($students);
        // Passer les étudiants à la vue
        return view('professor/students', ['students' => $students]);
    }
}