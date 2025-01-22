<?php

namespace App\Controllers;

use App\Models\StudentCourseModel;

use App\Models\StudentModel;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Reader\Exception;

class StudentCourseController extends BaseController
{

    // Méthode pour afficher les étudiants inscrits à un cours spécifique
    public function getStudentsByCourse($course_id)
    {

        // Récupérer les étudiants inscrits à ce cours
        $students = (new StudentCourseModel())->getStudentsByCourse($course_id);

        // Get the students enrolled in the course
        $students = (new StudentCourseModel())->getStudentsByCourse($course_id);

        // Extract course title from the first student entry (if students exist)
        $course_title = !empty($students) ? $students[0]['title'] : 'Unknown Module';

        // Passer les étudiants à la vue
        return view('professor/students', [
            'students' => $students,
            'course_id' => $course_id,
            'course_title' => $course_title,
        ]);
    }

    public function import_grades($course_id)
    {
        $file = $this->request->getFile('excel_file');

        if ($file && $file->isValid() && !$file->hasMoved()) {
            try {
                $filePath = $file->getTempName();

                // Load the Excel file
                $spreadsheet = IOFactory::load($filePath);
                $sheet = $spreadsheet->getActiveSheet();
                $rows = $sheet->toArray();

                foreach ($rows as $key => $row) {
                    // Skip the header row
                    if ($key === 0) {
                        continue;
                    }
                    $student_id = (new StudentModel())->getStudentId($row[0], $row[1], $row[2]);
                    (new StudentCourseModel())->updateGrade($student_id, $course_id, $row[3]);
                }

                return redirect()->to("/courses/$course_id/students");
            } catch (Exception $e) {
                return redirect()->back()->with('error', 'Error reading the file: ' . $e->getMessage());
            }
        } else {
            return redirect()->back()->with('error', 'Invalid file uploaded.');
        }
    }

    public function updateGrade($course_id, $student_id)
    {
        // Get the new grade from the request
        $new_grade = $this->request->getPost('grade');

        // Validate the new grade
        if (!is_numeric($new_grade) || $new_grade < 0 || $new_grade > 20) {
            return redirect()->back()->with('error', 'Invalid grade. Please enter a grade between 0 and 20.');
        }

        // Update the grade in the database
        $update_status = (new StudentCourseModel())->updateGrade($student_id, $course_id, $new_grade);

        if ($update_status) {
            return redirect()->to("/courses/$course_id/students")->with('success', 'Grade updated successfully.');
        } else {
            return redirect()->back()->with('error', 'Failed to update grade.');
        }
    }

    public function get_grades($student_id)
    {
        $grades = (new StudentCourseModel())->get_grades($student_id);

        return view('student/results', ['grades'=> $grades]);
    }

}