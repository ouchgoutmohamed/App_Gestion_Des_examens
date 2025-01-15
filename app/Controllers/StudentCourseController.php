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

        // Extract course title from the first student entry (if students exist)
        $course_title = !empty($students) ? $students[0]['title'] : 'Unknown Module';
        
        // Passer les étudiants à la vue
        return view('professor/students', [
            'students' => $students,
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
}